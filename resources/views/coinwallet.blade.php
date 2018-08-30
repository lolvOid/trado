@extends('dashmaster')

@section('dashboard')

          <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Static Tables</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                          
                            <li class="active">Coin Wallet</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
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
                                        <h3 class="panel-title">Your Balance</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="flot4"></div>
                                    </div>
                                </div>
                            </div>   
                    </div><!-- Row -->
                </div>


        @endsection()