<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airdrop and Swap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/web3@1.7.0/dist/web3.min.js"></script>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- CSRF Token Meta Tag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to the Airdrop and Swap Platform</h1>
        
        <!-- Wallet Type Selection -->
        <div class="text-center mt-4">
            <label for="walletType">Select Wallet Type:</label>
            <select id="walletType" class="form-select w-50 mx-auto">
                <option value="Ethereum">Ethereum (MetaMask)</option>
                <!-- Add more wallet types as needed -->
            </select>
        </div>

        <!-- Connect and Disconnect Wallet Buttons -->
        <div class="text-center mt-4">
            <button id="connectWalletButton" class="btn btn-primary">Connect Wallet</button>
            <button id="disconnectWalletButton" class="btn btn-danger d-none">Disconnect Wallet</button>
            <p id="walletAddress" class="mt-3"></p>
        </div>

        <!-- Swap Interface (Hidden by default) -->
        <div id="swapInterface" class="text-center mt-5 d-none">
            <h3>Swap Chain Currency to Token</h3>
            <div class="mb-3 w-50 mx-auto">
                <label for="swapAmount">Amount to Swap:</label>
                <input type="number" id="swapAmount" class="form-control" placeholder="Amount to Swap" min="0">
            </div>
            <div class="mb-3 w-50 mx-auto">
                <label for="tokenSelect">Select Token:</label>
                <select id="tokenSelect" class="form-select">
                    <option value="DAI">DAI</option>
                    <option value="USDC">USDC</option>
                    <option value="USDT">USDT</option>
                    <!-- Add other tokens as needed -->
                </select>
            </div>
            <button id="swapButton" class="btn btn-success">Swap</button>
            <p id="swapStatus" class="mt-3"></p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            const walletAddressElement = $('#walletAddress');
            const connectWalletButton = $('#connectWalletButton');
            const disconnectWalletButton = $('#disconnectWalletButton');
            const walletTypeSelect = $('#walletType');
            const swapInterface = $('#swapInterface');
            const swapButton = $('#swapButton');
            const swapStatus = $('#swapStatus');

            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (typeof window.ethereum !== 'undefined') {
                connectWalletButton.on('click', async function() {
                    try {
                        const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                        const account = accounts[0];

                        walletAddressElement.text("Connected Wallet: " + account);
                        connectWalletButton.addClass('d-none');
                        disconnectWalletButton.removeClass('d-none');
                        swapInterface.removeClass('d-none'); // Show swap interface after connection
                    } catch (error) {
                        console.error("User denied wallet connection", error);
                    }
                });

                disconnectWalletButton.on('click', function() {
                    walletAddressElement.text("");
                    connectWalletButton.removeClass('d-none');
                    disconnectWalletButton.addClass('d-none');
                    swapInterface.addClass('d-none'); // Hide swap interface on disconnect
                    swapStatus.text('');
                });

                // Swap functionality
                swapButton.on('click', async function() {
                    const swapAmount = parseFloat($('#swapAmount').val());
                    const selectedToken = $('#tokenSelect').val();
                    const account = walletAddressElement.text().split(": ")[1];
                    console.log(walletAddressElement,'the wallet address')

                    if (!account) {
                        Swal.fire('Not Connected', 'Please connect your wallet first', 'error');
                        return;
                    }

                    if (isNaN(swapAmount) || swapAmount <= 0) {
                        Swal.fire('Invalid Amount', 'Please enter a valid swap amount', 'error');
                        return;
                    }

                    try {
                        const balance = await ethereum.request({
                            method: 'eth_getBalance',
                            params: [account, 'latest']
                        });
                        console.log(balance,'the balance')

                        const etherBalance = parseFloat(Web3.utils.fromWei(balance, 'ether'));
                        console.log(etherBalance,'the real balance')

                        if (swapAmount > etherBalance) {
                            Swal.fire('Insufficient Funds', 'Not enough funds to complete this swap', 'error');
                            return;
                        }

                        // Send swap request
                        $.post("swap_tokens", {
                            from: "ETH",
                            to: selectedToken,
                            amount: swapAmount,
                            walletAddress: account
                        })
                        .done(function(response) {
                            swapStatus.text("Swap successful! Amount swapped: " + swapAmount + " ETH to " + selectedToken);
                            Swal.fire('Swap Successful','Tokens swapped successfully','success');
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            swapStatus.text("Swap failed. Please try again.");
                            Swal.fire('Swap Failed','Could not complete swap','error');
                        });
                    } catch (error) {
                        console.error("Error fetching balance or swapping:", error);
                    }
                });
            } else {
                alert("Please install MetaMask or another Ethereum wallet provider to use this feature.");
            }
        });
    </script>
</body>
</html>
