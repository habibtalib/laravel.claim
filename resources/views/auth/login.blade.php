@extends('back.layouts.auth')
@section('authcontent')
<div class="col-md-12">

    <div class="animated bounce"> {{-- zoomIn --}}
             <img  class="hvr-grow " src=" {{  asset('img/logo.png') }}"  height="100" width="100" alt="Avatar">
    </div>
    <h2>Experience Claims Management</h2>        
    <p>Sign in below:</p>
    
    <form  method="POST" action="{{ url('/login') }}" id="login">

        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="claimNo" class="cls-controls form-control" name="claimNo" value="{{ old('claimNo') }}" required autofocus placeholder="Claim Number">
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="cls-controls form-control block" placeholder="Password" name="password" required>
        </div>

        <div class="form-group">
            <label id="group_remember"><input type="checkbox" name="remember"> Remember Me</label> 
        </div>

        <div class="form-group">
            <button class="form-control-name  btn btn-outline-primary  btnhover btn-login" id="voyager-login-btn">
                <span class="login_text">
                    <i class="voyager-lock"></i> Login
                </span>
            </button>
        </div>
                
    </form>



</div>



 


@stop

