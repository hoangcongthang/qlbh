@extends('master')
@section('content')

<!-- start top_bg -->
    <div class="top_bg">
        <div class="wrap">
            <div class="main_top">
                <h4 class="style">login or create an account</h4>
            </div>
        </div>
    </div>
    <!-------------------------------------------------   Bắt đầu Main      ----------------------------------------->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
            	<!-- khu vực đăng nhập cho khách hàng cũ -->
                <div class="login_left">
                    <h3>login customers</h3>
                    <p>if you have any account with us, please log in.</p>
                    <!-- Bắt đầu đăng nhập -->
                    <div class="registration">
                        <div class="registration_left">
                    		<!-- Vùng đăng nhập của facebook -->
                            <a href="#">
                                <div class="reg_fb"><img src="source/images/facebook.png" alt=""><i>sign in using Facebook</i>
                                    <div class="clear"></div>
                                </div>
                            </a>
                            <!-- form đăng nhập -->
                            <div class="registration_form">
                                <form id="registration_form" action="#" method="post" >
                                    <div>
                                        <label>
                                            <input placeholder="email:" type="email" tabindex="3" required="">
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input placeholder="password" type="password" pattern=".{8,}" tabindex="4" required="">
                                        </label>
                                    </div>
                                    <div>
                                        <input type="submit" value="sign in" id="register-submit">
                                    </div>
                                    <div class="forget">
                                        <a href="#">forgot your password</a>
                                    </div>
                                </form>
                                <!-- Kết thúc form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kết thúc khu vực đăng nhập bên trái -->

                <!-- bắt đầu khu vực đăng ký bên phải -->
                <div class="login_left">
                    <h3>register new customers</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping address, view and track your orders in your accoung and more.</p>
                    <div class="registration_left">
                    	<!-- đăng ký bằng facebook -->
                        <a href="#">
                            <div class="reg_fb"><img src="source/images/facebook.png" alt=""><i>register using Facebook</i>
                                <div class="clear"></div>
                            </div>
                        </a>
                        <!-- đăng ký bằng form -->
                        <div class="registration_form">
                            <form id="registration_form" action="contact.php" method="post" >
                                <div>
                                    <label>
                                        <input placeholder="first name:" type="text" tabindex="1" required="" autofocus="">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input placeholder="last name:" type="text" tabindex="2" required="" autofocus="">
                                    </label>
                                </div>
                                <div class="sky_form">
                                    <ul>
                                        <li>
                                            <label class="radio left">
                                                <input type="radio" name="radio" checked=""><i>Male</i></label>
                                        </li>
                                        <li>
                                            <label class="radio">
                                                <input type="radio" name="radio"><i>Female</i></label>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <label>
                                        <input placeholder="email address:" type="email" tabindex="3" required>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input placeholder="password" type="password" pattern=".{8,}" tabindex="4" required title="8 or more characters">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input placeholder="retype password" type="password" pattern=".{8,}" tabindex="4" required title="8 or more characters">
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" value="create an account" id="register-submit">
                                </div>
                                <div class="sky_form">
                                    <label class="checkbox">
                                        <input type="checkbox" name="checkbox"><i>I agree to <a class="terms" href="#"> Terms of service</a> </i></label>
                                </div>
                            </form>
                            <!-- Kết thúc form đăng ký -->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- Kết thúc form đăng ký bên phải -->
        </div>
    </div>
    <!-- kết thúc vùng đăng ký -->

@endsection