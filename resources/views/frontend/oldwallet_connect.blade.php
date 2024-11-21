<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airdrop and Staking Platform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/web3@1.7.0/dist/web3.min.js"></script>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- CSRF Token Meta Tag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to the Airdrop & Staking Platform</h1>
        
        <!-- Wallet Type Selection -->
        <div class="text-center mt-4">
            <label for="walletType">Select Wallet Type:</label>
            <select id="walletType" class="form-select w-50 mx-auto">
                <option value="Ethereum">Ethereum (MetaMask)</option>
                <option value="Phantom">Phantom</option>
                <option value="Solfare">Solfare</option>
                <option value="Coingate">Coingate</option>
                <option value="Bitget">Bitget</option>
            </select>
        </div>

        <!-- Connect and Disconnect Wallet Buttons -->
        <div class="text-center mt-4">
            <button id="connectWalletButton" class="btn btn-primary">Connect Wallet</button>
            <button id="disconnectWalletButton" class="btn btn-danger d-none">Disconnect Wallet</button>
            <p id="walletAddress" class="mt-3"></p>
        </div>

        <!-- Staking Section -->
        <div id="stakingSection" class="d-none mt-5">
            <h2 class="text-center">Stake Your TRP Tokens</h2>
            
            <div class="row justify-content-center">
                <!-- Staking Amount -->
                <div class="col-md-6">
                    <label for="stakingPercentage">Stake Percentage (%):</label>
                    <input type="number" id="stakingPercentage" class="form-control" min="1" max="100" placeholder="Enter percentage to stake">
                </div>
            </div>
            
            <div class="row justify-content-center mt-3">
                <!-- Staking Period -->
                <div class="col-md-6">
                    <label for="stakingPeriod">Staking Period (days):</label>
                    <input type="number" id="stakingPeriod" class="form-control" min="1" placeholder="Enter number of days">
                </div>
            </div>

            <div class="text-center mt-4">
                <button id="stakeTokensButton" class="btn btn-success">Stake Tokens</button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            const walletAddressElement = $('#walletAddress');
            const connectWalletButton = $('#connectWalletButton');
            const disconnectWalletButton = $('#disconnectWalletButton');
            const walletTypeSelect = $('#walletType');
            const stakingSection = $('#stakingSection');
            const stakingPercentageInput = $('#stakingPercentage');
            const stakingPeriodInput = $('#stakingPeriod');
            const stakeTokensButton = $('#stakeTokensButton');
            let account = null;

            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (typeof window.ethereum !== 'undefined') {
                connectWalletButton.on('click', async function() {
                    const selectedWalletType = walletTypeSelect.val();

                    try {
                        const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                        account = accounts[0];
                        walletAddressElement.text("Connected Wallet: " + account);
                        connectWalletButton.addClass('d-none');
                        disconnectWalletButton.removeClass('d-none');
                        stakingSection.removeClass('d-none');

                        $.post("connect_wallet_address", {
                            type: selectedWalletType,
                            address: account
                        })
                        .done(function(response) {
                            Swal.fire('Wallet Connected', 'Wallet Connected Successfully', 'success');
                        })
                        .fail(function(jqXHR, textStatus, errorThrown) {
                            Swal.fire('Wallet Not Connected', 'Try again later!', 'error');
                        });

                    } catch (error) {
                        console.error("User denied wallet connection", error);
                    }
                });

                disconnectWalletButton.on('click', function() {
                    walletAddressElement.text("");
                    connectWalletButton.removeClass('d-none');
                    disconnectWalletButton.addClass('d-none');
                    stakingSection.addClass('d-none');
                });
            } else {
                alert("Please install MetaMask or another Ethereum wallet provider to use this feature.");
            }

            // Staking functionality
            stakeTokensButton.on('click', function() {
                const stakingPercentage = parseInt(stakingPercentageInput.val());
                const stakingPeriod = parseInt(stakingPeriodInput.val());

                if (stakingPercentage < 1 || stakingPercentage > 100 || stakingPeriod < 1) {
                    Swal.fire('Invalid Input', 'Please enter a valid staking percentage and period.', 'error');
                    return;
                }

                // Sample Web3 staking interaction
                const stakingData = {
                    address: account,
                    percentage: stakingPercentage,
                    period: stakingPeriod
                };

                $.post("stake_tokens", stakingData)
                .done(function(response) {
                    Swal.fire('Staking Successful', 'Your tokens have been staked successfully!', 'success');
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    Swal.fire('Staking Failed', 'Please try again later.', 'error');
                });
            });
        });
    </script>
</body>
</html>
