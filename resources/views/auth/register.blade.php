


@extends('master')
    @section('pages')
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
                <form class="custom-form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    {{ csrf_field() }}
                <h1>SignUp Form</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name">Name </label></div>
                    <div class="col-sm-6 input-column"><input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus></div>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="username">Username</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" id="username" name="username" type="text"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="number">Contact Number</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" id="contact" name="contact" type="text"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email">Email </label></div>
                    <div class="col-sm-6 input-column"><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="password">Password </label></div>
                    <div class="col-sm-6 input-column"><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="password-confirm">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></div>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">I've read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="submit">Submit</button>
                </form>
        </div>
    </div>
   @endsection()