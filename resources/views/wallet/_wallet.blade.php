@extends('dashmaster')

@section('dashboard')

          <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Wallet Tables</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="dashboard">Home</a></li>
                          
                            <li class="active">Coin Wallet</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Transaction</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Transaction</th>
                                                <th>Date</th>
                                                <th>Coin Received</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>1</td>
                                                <td>21,7,2018</td>
                                                <td>0.00014 BTC</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>1</td>
                                                <td>21,7,2018</td>
                                                <td>0.00014 BTC</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>1</td>
                                                <td>21,7,2018</td>
                                                <td>0.00014 BTC</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                           
                        </div>
                        <div class="col-md-6">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Your Balance</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="flot3"></div>
                                    </div>
                                </div>
                            </div>   

                            <div class="col-md-6">
                                <div id="token-txs-11"></div>


                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Transaction Fees USD</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="flot4"></div>
                                    </div>
                                </div>
                            </div>   
                    </div><!-- Row --> --}}
                        
                            
                        
                        <div class="row" style="padding-top:30px">
                                @foreach ($wallets as $wallet)
                            <div class="col-md-4 offset-4" style="padding-bottom:10px">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item active">Wallet Data</li>
                                    <li class="list-group-item">
                                        <label for="guid">Wallet ID(Private):</label><br/>
                                        <span name="guid">{{$wallet->wallet_id}}</span>
                                    </li>
                                    <li class="list-group-item">
                                            <label for="address">BTC Address(Public):</label><br/>
                                            <span name="address">{{$wallet->main_address}}</span>
                                        </li> 
                                    <li class="list-group-item">
                                            <label for="label">Balance:</label>
                                            <span name="label">0.0000 <i class="fa fa-fa-bitcin"></i></span>
                                    </li>
                                </ul>        
                            </div>
                            @endforeach
                            <a class="btn btn-default" href="{{route('wallet.index')}}" >Create A wallet</a>
                            </div>
                        </div>

                </div>


        @endsection()