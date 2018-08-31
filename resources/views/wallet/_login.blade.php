@extends('master')



    @section('pages')
@if (isset($success_message))
<div class="alert alert-success">
    {{$success_message}}
</div>
@endif

@if (count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="col-md-4 offset-4">
    <div style="text-align:center;">
        <h2 class="divider-style"><span>Wallet Login</span></h2>
    </div>
    <div class="login-dark" style="background-color:rgb(255,255,255);background-image:url(&quot;dsfdsfdfdfsf&quot;);height:717px;">
            <form method="post" action="{{route('wallet.store')}}" style="background-color:rgb(0,0,0);">

            {{ csrf_field() }}
            <h2 class="sr-only">Login</h2>
            <div class="illustration"><i class="icon ion-social-bitcoin" style="color:rgb(255,255,255);"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="guid" placeholder="WalletID"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"  style="background-color:rgb(28,28,28);">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a><br/>
            <p class="text-center text-info"><a href="{{route('wallet.index')}}">Get a FREE Wallet</a></p>
        </div></form>
    </div>
    </div>
    
    
    @endsection()
    