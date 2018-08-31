@extends('layouts.app')

@section('content')
    

    <div class="container" >
            <div class="col-md-4 offset-4">
                <div class="form-group">
                    <form method="post" action="{{route('wallet.create')}}">

                                {{ csrf_field() }}
                       <h2 class="">Get Trado Wallet</h2>
                       
                       <div class="illustration"><i class="icon ion-ios-locked-outline" style=" color:rgb(250,250,250);"></i></div>
                       <div class="form-group"><input type="password" name="password" required placeholder="Password" autocomplete="off" class="form-control" /></div>
                       <div class="form-group"><input type="password" name="password-confirm" required placeholder="Retype Password" class="form-control" /></div>
                       <div class="form-group">
                           <button class="btn btn-dark btn-block" type="submit">Create</button></div>
                           <a href="#" class="forgot">Forgot Password?</a>
                        </form>
                </div>
                
            </div>
    
</div>

@endsection
