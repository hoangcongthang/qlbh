<!DOCTYPE HTML>
<html>

<head>
    <title>London Bakery and Sweets</title>
    <base href="{{asset('')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="source/css/reset.css">
    <link rel='icon' href='source/images/mini.jpg' type='image/x-icon' />
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
    <link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--- start-mmmenu-script---->
    <script src="source/js/jquery.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="source/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="source/js/jquery.mmenu.js"></script>
    <script type="text/javascript">

    // Thanh menu khi thu hẹp kích cỡ ở bên trái
    $(function() {
        $('nav#menu-left').mmenu();
    });
    </script>

    <!-- start slider -->
    <link href="source/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="source/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="source/js/easing.js"></script>
    <script type="text/javascript">
    // tạo thanh slider các hình ảnh tự động chuyển động mỗi 3s 
    $(function() {
        $('#ei-slider').eislideshow({
            animation: 'center',
            autoplay: true,
            slideshow_interval: 3000,
            titlesFactor: 0
        });
    });
    </script>

    <!-- start top_js_button -->
    <script type="text/javascript" src="source/js/move-top.js"></script>
</head>

<body>
    <!-- start header / Phần header trên -->
    <div class="top_bg">
        <div class="wrap">
            <div class="header">
                <!-- Logo -->
                <div class="logo">
                    <a href="index"><img src="source/images/logo.png" alt=""/></a>
                </div>
                <!-- login / register -->
                <div class="log_reg">
                    <ul>
                        <li><a href="login-bakery">Login</a> </li>
                        <span class="log"> or </span>
                        <li><a href="register-bakery">Register</a> </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- start header_btm / Phần header dưới-->
    <div class="wrap">
        <div class="header_btm">
            <!-- Thanh navigation bar  -->
            <div class="menu">
                <ul>
                    <li class="active"><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="bakery">Bakery</a></li>
                    <li><a href="sweets">Sweets</a></li>
                    <li> <a href="gift" title=""> Gift</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="contact">Contact</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <!-- Tạo vùng cho thanh nav khi thu hẹp độ rộng theo kích cỡ màn hình -->
            <div id="smart_nav">
                <a class="navicon" href="#menu-left"> </a>
            </div>
            <nav id="menu-left">
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="bakery">Bakery</a></li>
                    <li><a href="sweets">Sweets</a></li>
                    <li> <a href="gift" title=""> Gift</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="contact">Contact</a></li>
                    <div class="clear"></div>
                </ul>
            </nav>
            <!-- Tạo vùng đánh giá bên phải header dưới -->
            <div class="header_right">
                <ul>
                    <li><a href="#"><i  class="art"></i><span class="color1">0</span></a></li>
                    <li><a href="checkout.html"><i  class="cart"></i><span>0</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    
    <main class="py-4">
       @yield('content') 
    

        <!-- bắt đầu footer cuối -->
        <div class="footer_bg">
            <div class="wrap">
                <div class="footer">
                    <!-- Script để thanh cuộn cuộn mượt hơn lên top-->
                    <script type="text/javascript">
                    $(document).ready(function() {
                        var defaults = {
                            containerID: 'toTop', // fading element id
                            containerHoverID: 'toTopHover', // fading element hover id
                            scrollSpeed: 1200,
                            easingType: 'linear'
                        };
                        // khi cuộn xuống 600px thì onTop tự xuất hiện
                        $().UItoTop({ easingType: 'easeOutQuart' });
                    });
                    </script>
                    <!-- nút tự động về đầu trang -->
                    <a href="#" id="toTop"><span id="toTopHover"></span></a>
                    <!-- kết thúc phần cuộn lên đầu trang -->
                    <!-- khu vực liên kết nội trang -->
                    <div class="bottom-nav">
                        <ul>
                            <li><a href="index.html">Home /</a></li>
                            <li><a href="#">Support /</a></li>
                            <li><a href="#">Terms and conditions /</a></li>
                            <li><a href="#">Faqs /</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- bắt đầu khu vực quản lý bản quyền nội dung -->
                    <div class="copy">
                        <p class="link"><span> Create and Template by&nbsp;<a href="#"> A-Team </a></span></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- kết thúc footer cuối -->

    </main>

</body>

</html>