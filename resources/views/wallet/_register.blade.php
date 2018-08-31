@extends('master')

@section('pages')


<div style="text-align:center;">
        <h2 class="divider-style"><span>Get TRADO Wallet</span></h2>
    </div>
    <div class="login-dark" style="background-color:rgb(255,255,255);background-image:url(&quot;dsfdsfdfdfsf&quot;);height:717px;">
            <form method="post" action="{{route('wallet.create')}}" style="background-color:rgb(0,0,0);">
                    {{ csrf_field() }}
            <h2 class="sr-only">Create Wallet</h2>
            <div class="illustration"><i class="icon ion-social-bitcoin" style="color:rgb(255,255,255);"></i></div>
            <div class="form-group"><label>Enter your password</label><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><label>Retype your password</label><input class="form-control" type="password" name="password-confirm" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(28,28,28);">Create</button></div>
             <a href="#" class="forgot">i Accept the terms and conditions</a>
            <div class="form-group">
                    <p class="text-center text-info"><a href="{{route('wallet.login')}}" > I have a Wallet </a></p></div>
        </form>
            
    </div>



@endsection()