@extends('master')

@section('pages')

    <div class="login-clean">
        <form acrtion="" method="post">

            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fa fa-user" style="color:#373737"></i></div>
            
            <div class="form-group">
                
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            </div>
            <div class="form-group  ">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>

            

            <div class="form-group col-md-6">
                
                <button class="btn btn-secondary" type="submit">Log In</button>
                
            </div>
           
                
            <a href="{{ route('password.request') }}" class="forgot">Forgot your email or password?</a>    
            
            </form>
    </div>
      


@endsection()