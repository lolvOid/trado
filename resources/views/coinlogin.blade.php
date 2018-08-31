@extends('master')



    @section('pages')
    
    <div style="text-align:center;">
        <h2 class="divider-style"><span>Wallet confirmation</span></h2>
    </div>
    <div class="login-dark" style="background-color:rgb(255,255,255);background-image:url(&quot;dsfdsfdfdfsf&quot;);height:717px;">
        <form method="post" style="background-color:rgb(0,0,0);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-social-bitcoin" style="color:rgb(255,255,255);"></i></div>
            <div class="form-group"><label>Enter your password</label><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(28,28,28);">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    
    
    @endsection()
    