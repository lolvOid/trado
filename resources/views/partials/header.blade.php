<!DOCTYPE html>

    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradoexchange</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Athiti') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Cookie') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Poppins:400,500') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
   
      
      
</head>

<body style="background-color:rgb(255,255,255);"><nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="#"><img src="/img/tradologo.png" style=" margin-left:13px;margin-bottom:10px;height:60px;width:130px;">
</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">
            Toggle navigation

        </span>
        <span class="custom-toggler navbar-toggler-icon">

        </span>
</button>  
        <div class="collapse navbar-collapse"
            id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('shop.index')}}">Shop</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="blog">Blog</a></li>
            </ul>


            <form action="{{route('search')}}" class="form-inline mr-auto" target="_self"  >
            <div class="box">
                  <div class="container-2">
                      <span class="icon"><i class="fa fa-search"></i>
                      </span>
                      <input type="search" id="search" placeholder="Search..." name="query" id="query" value="{{request()->input('query')}}"/>
                  </div>
                </div>
            </form>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <ul class="nav navbar-nav ml-auto">

                @guest

                <li class="dropdown">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">
                        
                    <img style="width:50px;height:50px;" src="assets/img/user-astronaut 150px.png" class="dropdown-image" />
                </a>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a class="dropdown-item" role="presentation" href="{{route('login')}}">Login</a>
                    <a class="dropdown-item" role="presentation" href="{{route('register')}}">Signup</a>
                </div>
                </li>

                @else

                <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">
                            
                        <img style="width:50px;height:50px;" src={{$user->avatar}} class="dropdown-image" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a class="dropdown-item" role="presentation" href="{{ route('dashboard.index') }}">Dashboard</a>
                    <a class="dropdown-item" role="presentation" href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                 
                    </div>
                </li>

                @endguest
            </ul>
          
        </div>
    </div>
</nav>

