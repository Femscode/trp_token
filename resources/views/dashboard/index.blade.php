@extends('dashboard.master')
@section('header')
@endsection
@section('content')
<div class="col-lg-9 col-md-8">
    <div class="mb-4">
        <h1 class="mb-0 h3">Admin Dashboard For TRP token distribution.</h1>
    </div>

    <div class="row mb-5 g-4">
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <i class='bx bx-wallet'></i>
                    <span>Connected Wallets</span>
                    <h3 class="mb-0 mt-4">{{count($wallets)}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <span>Contact Us Messages</span>
                    <h3 class="mb-0 mt-4">{{count($allcontacts)}}</h3>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4">
        <h3>User's Wallet Addresses</h3>
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-lg-5">
                <table class="table datatable table-strip">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wallets as $key => $wallet)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$wallet->type}}</td>
                            <td>{{$wallet->address}}</td>
                            <td><a class='btn btn-primary btn-sm'>Copy</a></td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

@endsection


@section('script')
@endsection