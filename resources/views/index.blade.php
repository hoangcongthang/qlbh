@extends('layouts.master')
@section('content')
<!-- start slider / Tạo vùng chứa file ảnh tự động cuộn-->
<div class="slider">
    <!---start-image-slider / Tạo các vùng chứa ảnh có khả năng tự động cuộn---->
    <div class="image-slider">
        <div class="wrapper">
            <div id="ei-slider" class="ei-slider">
                <!-- bắt đầu tạo vùng slide chứa ảnh lớn -->
                <ul class="ei-slider-large">
                    <!-- ảnh 1 -->
                    <- cho vòng lặp for ở đây ->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image1.jpg" alt="image06" /></a>
                        <- chỗ này bỏ ->
                        {{-- <div class="ei-title">
                            <h3 class="btn">$6.99</h3>
                            <h2>Strawboffee Pie<br>  New product in Sept</h2>
                            <h3 class="active">Coming in late of Sept<br> Less sugar, more energy and more healthy </h3>
                            <h3 class="">
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                                </h3>
                        </div> --}}
                        <- kết thúc chỗ bỏ ->
                    </li>
                    <- kết thúc vòng lặp ->
                    <!-- ảnh 2 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image2.jpg" alt="image01" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$15.99</h3>
                            <h2>Birthday Cake <br>  For special event</h2>
                            <h3 class="active">Dont waste your event.<br>An Handmade product, choose your own style </h3>
                            <h3>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <!-- ảnh 3 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image3.jpg" alt="image02" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$3.99</h3>
                            <h2>Prada Cake<br> Best selling in 2017</h2>
                            <h3 class="active">Let us help you color your life<br>Start color the cake and enjoy the new day</h3>
                            <h3>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <!-- ảnh 4 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image4.jpg" alt="image03" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$10.99</h3>
                            <h2>Mix combo <br>  Best selling in July</h2>
                            <h3 class="active">We offer two big dessert in one<br>Dessert is one of big path after meal</h3>
                            <h3>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <!-- ảnh 5 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image6.jpg" alt="image04" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$9.99</h3>
                            <h2>Bespoke Cakes<br>   Most popular in Aug </h2>
                            <h3 class="active">It is a long established fact that a reader<br>Lorem Ipsum is that it has a more-or-less</h3>
                            <h3>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <!-- ảnh 6 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image5.jpg" alt="image05" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$2.99</h3>
                            <h2>Tiramisu Cake<br> The most cuties Cake</h2>
                            <h3 class="active">It is a long established fact that a reader<br>Lorem Ipsum is that it has a more-or-less </h3>
                            <h3>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                    <!-- ảnh 7 -->
                    <li>
                        <a href="{{asset('')}}" title=""><img src="img/slider-image7.jpg" alt="image07" /></a>
                        <div class="ei-title">
                            <h3 class="btn">$4.99</h3>
                            <h2>Sweet Donuts  <br> For every one</h2>
                            <h3>Addicted donuts<br>You're greeted with a good morning and <br> insured  to love your donuts</h3>
                            <h3>
                                 <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_1.png" alt=""></a>
                                 <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_2.png" alt=""></a>
                                 <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_3.png" alt=""></a>
                                 <a class="ei_icons" href="{{asset('details')}}"><img src="img/icon_4.png" alt=""></a>
                            </h3>
                        </div>
                    </li>
                </ul>
                <!-- kết thúc phần tạo vùng ảnh lớn -->
                <!-- bắt đầu tạo vùng ảnh nhỏ khi di chuột vào-->
                <ul class="ei-slider-thumbs">
                    <li class="ei-slider-element"></li>
                    <li><a href="#"><span>Strawboffee Pie</span><p>now $6.99</p></a><img src="img/thumbs/1.jpg" alt="thumb01" /></li>
                    <li><a href="#"><span>Birthday Cake</span><p>limited edition</p> </a><img src="img/thumbs/2.jpg" alt="thumb01" /></li>
                    <li><a href="#"><span>prada</span><p>Best selling</p></a><img src="img/thumbs/3.jpg" alt="thumb02" /></li>
                    <li><a href="#"><span>Mix Combo</span><p>Only $10.99</p> </a><img src="img/thumbs/4.jpg" alt="thumb03" /></li>
                    <li><a href="#"><span>Bespoke Cakes</span><p>three in one</p> </a><img src="img/thumbs/6.jpg" alt="thumb06" /></li>
                    <li><a href="#"><span>Tiramisu Cake</span><p>4 pies in a box</p> </a><img src="img/thumbs/5.jpg" alt="thumb05" /></li>
                    <li><a href="#"><span>Sweet Donuts </span><p>The most popular</p> </a><img src="img/thumbs/7.jpg" alt="thumb07" /></li>
                </ul>
                <!-- kết thúc phần tạo vùng ảnh nhỏ -->
            </div>
            <!-- kết thúc vùng chứa ảnh -->
        </div>
        <!-- Kết thúc phần viền gói khu vực chứa ảnh tự chuyển động -->
    </div>
    <!---kết thúc toàn bộ vùng ảnh tự chuyển động---->
</div>
<!-- kết thúc toàn vùng ảnh -->
<!-- Phân vùng chứa ảnh của 1 số sản phẩm dặc biệt-->
<div class="top_bg">
    <div class="wrap">
        <div class="main1">
            <div class="image1_of_3">
                <img src="img/img1.jpg" alt="" />
                <a href="{{asset('details')}}"><span class="tag">on sale</span></a>
            </div>
            <div class="image1_of_3">
                <img src="img/img2.jpg" alt="" />
                <a href="{{asset('details')}}"><span class="tag">special offers</span></a>
            </div>
            <div class="image1_of_3">
                <img src="img/img3.jpg" alt="" />
                <a href="{{asset('details')}}"><span class="tag">must have</span></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- kết thúc phân vùng chứa ảnh sản phẩm đặc biệt -->
<!-- Phân vùng chứa ảnh của sản phẩm nổi bật-->
<div class="main_bg">
    <div class="wrap">
        <!-- phần chính -->
        <div class="main">
            <!-- bắt đầu phân vùng chứa sản phẩm mới -->
            <!-- tiêu đề -->
            <div class="top_main">
                <h2>new arrivals</h2>
                <!-- 
                <a href="#">show all</a> -->
                <div class="clear"></div>
            </div>
            <!-- bắt đầu phân vùng ảnh cho sp mới -->
            <div class="grids_of_3">
                <!-- ảnh 1 -->
                {{-- chỗ này làm tương tự như trên kìa. Xong mới phân trang --}}
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/baked-cookies.jpg" alt=""/>
                        <h3>baked cookies</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <!-- ảnh 2 -->
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/pink-miringues.jpg" alt=""/>
                        <h3>pink-miringues</h3>
                        <span class="price">$8,99</span>
                        <span class="price_title bg">on sale <br>-20%</span>
                    </a>
                </div>
                <!-- ảnh 3 -->
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/Éclair.jpg" alt=""/>
                        <h3>Éclair</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <!-- bắt đầu phân vùng sp bán chạy trong tháng -->
            <!-- tiêu đề -->
            <div class="top_main">
                <h2>Top selling products</h2>
                <a href="#">show all</a>
                <div class="clear"></div>
            </div>
            <!-- bắt đầu phân vùng ảnh sp bán chạy -->
            <div class="grids_of_3">
                <!-- ảnh 1 -->
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/Bara-Brith.jpg" alt=""/>
                        <h3>Bara Brith</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <!-- ảnh 2 -->
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/two-macarons-in-square-white-plate.jpg" alt=""/>
                        <h3>macarons</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <!-- ảnh 3 -->
                <div class="grid1_of_3">
                    <a href="{{asset('details')}}">
                        <img src="img/four-baked-donuts.jpg" alt=""/>
                        <h3>baked donuts</h3>
                        <span class="price">$15,99</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <!-- kết thúc phân vùng sản phẩm nổi bật -->
            <!-- Chính sách free ship / Blog -->
            <div class="grids_of_2">
                <!-- Chính sách free ship -->
                <div class="grid1_of_2">
                    <div class="freeship">
                        <h2>free shipping</h2>
                        <p>In addition to shipping cakes nationwide within the United Kingdom, we also offer our Operation: Birthday Cake program, through which we can deliver to deployed UK service members anywhere in the world, all year round!</p>
                        <br>
                        <h2>Gift Hampers</h2>
                        <p>For every order over $50, you can choose anything in our Gift Store. It's all for free. Dont miss it!</p>
                    </div>
                </div>
                <!-- Khu vực blog -->
                <div class="grid1_of_2 bg">
                    <div class="blognews">
                        <h2>blog news</h2>
                        <div class="grid_date">
                            <a href="#">
                                <div class="date">
                                    <h4>Sept 18</h4>
                                </div>
                            </a>
                            <div class="date_text">
                                <h4><a href="#"> Strawboffee pie recipe</a></h4>
                                <p>Strawboffee pie is Summer’s answer to banoffee pie. And once you have mastered this easy recipe....</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="grid_date">
                        <a href="#">
                            <div class="date">
                                <h4>Sept 14</h4>
                            </div>
                        </a>
                        <div class="date_text">
                            <h4><a href="#"> Cookie secrets: Everything you need to know to make the best cookies ever!</a></h4>
                            <p>Cookies, cookies, cookies. You know, there’s pie season.... </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- Kết thúc khu vực blog -->
            </div>
            <!-- Kết thúc phân vùng chứa chính sách / blog -->
        </div>
        <!-- kết thúc phần chính -->
    </div>
    <!-- kết thúc khu vực gói phần chính -->
</div>
<!-- kết thúc phân vùng sp nổi bật -->
<!-- Bắt đầu footer trên -->
<div class="footer_top">
    <div class="wrap">
        <!-- main footer -->
        <div class="footer">
            <!-- vùng chứa main footer -->
            <div class="span_of_3">
                <!--Giờ mở cửa -->
                <div class="span1_of_3 opening">
                    <h3>Hours of Operation</h3>
                    <p> From Monday to Sartuday </p>
                    <p> Opening Time: 6AM to 8PM</p>
                    <br>
                    <p> On Sunday </p>
                    <p> Opening Time: 7AM to 6PM</p>
                    <br>
                    <p> Close on every last Sunday of the month</p>
                </div>
                <!-- Nhận xét từ khách hang -->
                <div class="span1_of_3">
                    <h3>Commend from Customers</h3>
                    <p><a href="#">@Smiths</a> It's the best place where we usually visit every week. Good food, healthy and best service. I recommend it is the one of the best bakery in London </p>
                    <p class="time">4 days ago</p>
                    <br>
                    <br>
                    <p class="top"><a href="#">@Anna</a> I love the place. So peaceful and quiet. I can use my hold day at their for working and reading books. And the bakers are awesome. </p>
                    <p class="time">7 days ago</p>
                </div>
                <!-- Các kênh vận chuyển và thanh toán -->
                <div class="span1_of_3">
                    <div class="payment_delivery">
                        <div class="payment">
                            <h3> Payment </h3>
                            <ul class="payment_logo">
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/pay1.png?v=201" alt=""></a>
                                </li>
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/pay2.png?v=201" alt=""></a>
                                </li>
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/pay3.png?v=201" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="delivery">
                            <h3> Delivery </h3>
                            <ul class="delivery_logo">
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/dt1.png?v=201" alt=""></a>
                                </li>
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/dt2.png?v=201" alt=""></a>
                                </li>
                                <li>
                                    <a href="" title=""><img src="https://theme.hstatic.net/1000061125/1000364405/14/dt3.png?v=201" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- kết thúc vùng chứa main footer -->
        </div>
        <!-- kết thúc main footer -->
    </div>
</div>
@endsection