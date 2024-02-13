@extends('layouts.master_authen')
@section('content')
	
<div class="limiter">
    <div class="container-login100" style="background-image: url('authen/images/1.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf

                <h6 style="text-align: center; color:#ffffff ;font-size:27px;">Boonyuan Bar & Restaurant</h6><br>
                <span class="login100-form-logo"><img src="{{asset('authen/images/icons/apple-touch-icon1.png')}}">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">
                     REGISTER YOU ACCOUNT 
                    <hr align="center" color="#9f9f9f" style="width: 75%; margin-left: 12%;">
                </span>

                <div class="wrap-input100 validate-input" data-validate="Enter name">
                    <input class="input100" type="text" name="name" placeholder="Name" required>
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username" required>
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Email">
                    <input class="input100" type="text" name="email" placeholder="Enter Email" required>
                    <span class="focus-input100" data-placeholder="&#xf159;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone">
                    <input class="input100" type="text " name="phone" placeholder="Enter Phone Number" required>
                    <span class="focus-input100" data-placeholder="&#xf390;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Enter Password" required>
                    <span class="focus-input100" data-placeholder="&#xf190;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter confirmpassword">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Enter Confirm Password" required>
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        REGISTER
                    </button>
                </div>
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