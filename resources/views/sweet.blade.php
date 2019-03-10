@extends('layouts.master')
@section('content')
<!-- start top_bg -->
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">
            <h2 class="style">Sweets</h2>
        </div>
    </div>
</div>
<!-------------------------------------------------   Bắt đầu Main      ----------------------------------------->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="top_main">
                <h2>new arrivals</h2>
                <div class="clear"></div>
            </div>
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="img/sweet/assorted-candies.jpg" alt="">
                        <h3>assorted candies</h3>
                        <span class="price">$1,99</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="img/sweet/assorted-hear-shape-candies-on-white-bowl.jpg" alt="">
                        <h3>heart-shaped candies</h3>
                        <span class="price">$0,99</span>
                        <span class="price_title bg">on sale<br>-60%</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="img/sweet/assorted-color-candies.jpg" alt="">
                        <h3> color candies</h3>
                        <span class="price">$5,99</span>
                        <span class="price_title bg">on sale <br>-40%</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="top_main">
                <h2>Others Sweets</h2>
                <a href="#">show all</a>
                <div class="clear"></div>
            </div>
            <!-- start grids_of_3 -->
            
 
            <div class="grids_of_3">
                @foreach ($sanphams as $item)
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="{{$item->hinhanh}}" alt="">
                        <h3>{{$item->tensanpham}}</h3>
                        <span class="price">{{$item->gia}}</span>
                    </a>
                </div>
                @endforeach
                <div class="clear"></div>
                {{ $sanphams->links() }}
            </div>
        </div>
    </div>
    @endsection