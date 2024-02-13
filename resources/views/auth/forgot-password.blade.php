@extends('layouts.master_authen')
@section('content')
	
<div class="limiter">
    <div class="container-login100" style="background-image: url('authen/images/1.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <h6 style="text-align: center; color:#ffffff ;font-size:27px;">Boonyuarn Bar & Restaurant</h6><br>
                <span class="login100-form-logo"><img src="{{asset('authen/images/icons/apple-touch-icon1.png')}}">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                     FORGOT PASSWORD 
                    <hr align="center" color="#9f9f9f" style="width: 75%; margin-left: 12%;">
                
                <h6 style="font-size: 10px ;"> No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>
                </span>
                <div class="wrap-input100 validate-input" data-validate="Enter Email">
                    <input class="input100" type="text" name="email" placeholder="Enter Email" required>
                    <span class="focus-input100" data-placeholder="&#xf159;"></span>
                </div>
                <x-auth-session-status style="color: #fff" class="mb-4 text-success" :status="session('status')"/>

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        forgot password send to your email
                    </button>
                </div><br>

                <div class="form-group d-md-flex">

                    <div class="w-100 text-md-right">
                        <a href="{{ route('login')}}" style="color: #fff;">LOG IN</a>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>


</section>
@endsection