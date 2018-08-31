<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Trado User Dashboard</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <!-- Styles -->
        <link rel="shortcut icon" href="img/tradoalpha.png" type="image/x-icon">
        <link href="{{ URL::asset('plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ URL::asset('plugins/uniform/css/default.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }} ">
        <link href="{{ URL::asset('plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ URL::asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::asset('plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css"/>
	
	
	
	<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
       <link href="{{ URL::asset('plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css"/>
<style>
        #token-txs-11 {
            line-height: 1.8;
            border-radius: 8px;
            max-width: 700px !important;
            background-blend-mode: darken;
            background-color: rgba(255, 255, 255, 0.9);
        }
        #token-txs-11 .txs.big-screen-table td .tx-amount{
            display: inline-block;
            width: 150px;
            white-space: nowrap;
        }
        #token-txs-11 .txs.big-screen-table td .tx-link{
            max-width: 120px;
        }
        #token-txs-11 .txs.big-screen-table td .tx-link:last-child{
            max-width: 150px;
        }
        #token-txs-11 .txs.big-screen-table td .tx-amount a:nth-child(1){
            max-width: 110px !important;
        }
        #token-txs-11 .txs.big-screen-table td .tx-amount  a:nth-child(2){
            max-width: 50px !important;
        }
    
    </style>
        	
        <!-- Theme Styles -->
        <link href="{{ URL::asset('css/meteor.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/custom.cs') }}s" rel="stylesheet" type="text/css"/>
        
        <script src="{{ URL::asset('plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="compact-menu">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="img/kmmpp.jpg" alt=""><span>Khant Myat Min<small> Hi,hoW ARE YOU?</small></span></a>
            </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Khant Myat Min</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="img/kmmpp.jpg" alt="">
                    </div>
                    <div class="chat-message">
                      Hi,hoW ARE YOU?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                    All is well
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="img/kmmpp.jpg" alt="">
                    </div>
                    <div class="chat-message">
                        Do you want to trade ma boi.
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        No Ty. Scammer.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="img/kmmpp.jpg" alt="">
                    </div>
                    <div class="chat-message">
                    HELL NO
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                     :/
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
        <form class="search-form" action="{{route('search')}}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="{{ url('/') }}" class="logo-text"><span>TRADO</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>
                            </ul>
                          
                          
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                        <p class="task-details">New user registered</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">3 Charts refreshed</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{$user->username}}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src={{$user->avatar}} width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="{{route('profile.index')}}"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                        <li role="presentation"><a href="login"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
        </div>

         <div class="page-sidebar sidebar">
                    <div class="page-sidebar-inner slimscroll">
                        <ul class="menu accordion-menu">
                            <li ><a href="dashboard" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a></li>
                            <li><a href="profile" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p><span class="active-page"></span></a></li>
                      <li><a href="{{route('wallet.show')}}" class="waves-effect waves-button"><span class="menu-icon icon-wallet"></span><p>Wallet</p></a></li>
                            <li><a href="statistics" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Statisics</p></a></li>
                        <li><a href="{{route('productdata.index')}}" class="waves-effect waves-button"><span class="menu-icon icon-basket"></span><p>Products</p></a></li>
                            <li><a href="" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Logout</p></a></li>
                        
                        </ul>
                    </div><!-- Page Sidebar Inner -->
                </div><!-- Page Sidebar -->
