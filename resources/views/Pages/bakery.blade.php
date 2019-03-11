@extends('master')
@section('content')

<!-------------   Bắt đầu Main      --------------->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="top_main">
                <h2>new arrivals </h2>
                <div class="clear"></div>
            </div>
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="source/images/brakery/baked-cupcakes-on-brown-wooden-table.jpg" alt="">
                        <h3>baked cupcakes</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="source/images/brakery/closeup-photo-of-baked-pastry.jpg" alt="">
                        <h3>baked pastry</h3>
                        <span class="price">$8,99</span>
                        <span class="price_title bg">on sale <br>-30%</span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="details.html">
                        <img src="source/images/brakery/four-baked-donuts.jpg" alt="">
                        <h3>baked donuts</h3>
                        <span class="price">$5,99</span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="top_main">
                <h2>Other Cake</h2>
                <a href="#">show all</a>
                <div class="clear"></div>
            </div>


            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                @foreach($sanphams as $item)
                    <div class="grid1_of_3">
                        <a href="details.html">
                            <img src="{{ $item-> hinhanh }}" alt="">
                            <h3>{{ $item-> tensanpham }}</h3>
                            <span class="price">{{ $item-> giaban }}</span>
                        </a>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>
            {{ $sanphams->links() }}


        <div class="clear"></div>
    </div>
</div>
</div>

@endsection