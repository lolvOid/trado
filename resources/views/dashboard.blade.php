@extends('dashmaster')

@section('dashboard')

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{('/')}}">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
              
                <div id="main-wrapper">
                    <div class="row">

                      <!--sale table-->
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Sales</h3>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-headfer-stats">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-basket"></i>
                                                <h4 class="no-m">$14,000</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-globe"></i>
                                                <h4 class="no-m">$14,000</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-credit-card"></i>
                                                <h4 class="no-m">$2,134</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-shield"></i>
                                                <h4 class="no-m">15</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <canvas id="chart1" height="165"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--sale table end-->

                        <!--visitor table-->
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Visitors</h3>
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-header-stats">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-users"></i>
                                                <h4 class="no-m">Total: 300</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user"></i>
                                                <h4 class="no-m">Male: 200</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user-female"></i>
                                                <h4 class="no-m">Female: 100</h4>
                                            </div>
                                            <div class="col-md-3 col-xs-6">
                                                <i class="icon-user-follow"></i>
                                                <h4 class="no-m">Avg: 200</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <canvas id="chart2" height="165"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--visitor table end-->
                        
                    </div>
                  
                </div><!-- Main Wrapper -->
                


        @endsection()