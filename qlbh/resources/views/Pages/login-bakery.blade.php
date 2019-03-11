@extends('master')
@section('content')

<!-- Tiêu đề trang -->
    <div class="top_bg">
        <div class="wrap">
            <div class="main_top">
                <h4 class="style">create an account or login</h4>
            </div>
        </div>
    </div>
    <!-- Mục chính khu vực đăng nhập / đăng ký-->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
            	<!-- dành cho khách hàng mới tạo tài khoản bên trái -->
                <div class="login_left">
                    <h3>new customers</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping address, view and track your orders in your accoung and more.</p>
                    <div class="btn_login">
                        <form>
                            <input type="button" onclick="location.href='register-bakery';" value="create an account" />
                        </form>
                    </div>
                </div>
				
				<!-- Khu vực login cho khách hàng cũ -->
                <div class="login_left">
                    <h3>registered customers</h3>
                    <p>if you have any account with us, please log in.</p>
                    <!-- Hướng dẫn đăng nhập -->
                    <div class="registration">
                        <div class="registration_left">
                        	<!-- sử dụng tài khoản từ facebook -->
                            <a href="#">
                                <div class="reg_fb"><img src="source/images/facebook.png" alt=""><i>sign in using Facebook</i>
                                    <div class="clear"></div>
                                </div>
                            </a>

                            <!-- form đăng nhập -->
                            <div class="registration_form">
                                <form id="registration_form" action="contact.php" method="post">
                                    <div>
                                        <label>
                                            <input placeholder="email:" type="email" tabindex="3" required="">
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input placeholder="password" type="password" tabindex="4" required="">
                                        </label>
                                    </div>
                                    <div>
                                        <input type="submit" value="sign in" id="register-submit">
                                    </div>
                                    <div class="forget">
                                        <a href="#">forgot your password</a>
                                    </div>
                                </form>
                            </div>
                            <!-- kết thúc form -->
                        </div>
                    </div>
                    <!-- Kết thúc khu vực đăng nhập -->
                </div>
                <div class="clear"></div>
                <!-- kết thúc khu vực login cho khách hàng cũ -->
            </div>
        </div>
    </div>

@endsection