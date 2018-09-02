@extends('layouts.app')

@section('content')
    

    <div class="container" >
            <div class="col-md-12 offset-12">
                @if(\Session::has('success_message'))
                    <div style="width:100%;" class=' col-md-12 alert alert-success'>
                        <p>
                            {{\Session::get('success_message')}}
                        </p>
                    </div>
                @endif
                <div class="form-group">
                    <form method="post" action="{{route('wallet.store')}}">

                                {{ csrf_field() }}
                       <h2 class="">Login to your wallet</h2>
                       
                       <div class="illustration"><i class="icon ion-ios-locked-outline" style="  color:rgb(250,250,250);"></i></div>
                       <div class="form-group"><input type="text" name="guid" required placeholder="guid" autocomplete="off" class="form-control" /></div>
                       <div class="form-group"><input type="password" name="password" required placeholder="Password" autocomplete="off" class="form-control" /></div>
                       <div class="form-group">
                           <button class="btn btn-dark btn-block" type="submit">Log In</button></div>
                           <a href="#" class="forgot">Forgot Password?</a>
                        </form>
                </div>
                
            </div>
    
</div>

@endsection
