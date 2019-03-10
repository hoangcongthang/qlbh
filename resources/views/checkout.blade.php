@extends('layouts.master')
@section('content')
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">
            <h2 class="style">Check Out</h2>
        </div>
    </div>
</div>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="address_arrival">
                <div class="address">
                    <img src="img/user.png" width="19px" height="19px"> <p>shipping address</p>
                </div>
                <div class="my_address">
                    <p>
                        Nguyen Ngoc Anh (+84) 943981565  &nbsp; &nbsp; &nbsp; 16 Le Dai Hanh, Tp Thai Binh, Thai Binh 

                        <a href="#" title="">Default</a>

                        <a href="#" title="">Change</a>
                    </p>
                </div>
            </div>

            <div class="checkout">
                <table>
                      <tr>
                        <th style="width: 60%">Products</th>
                        <th style="width: 20%">Price</th>
                        <th style="width: 10%">Quantity</th>
                        <th style="width: 10%"> Price</th>
                      </tr>
                      <tr>
                        <td>
                            <img src="img/blog.jpg" > Treat Time Box
                        </td>
                        <td>$4</td>
                        <td>10</td>
                        <td>$40</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td>Products Price</td>
                          <td>$40</td>
                      </tr>
                </table>
            </div>
            <div class="under_checkout">
                <div class="span_select" style=""  >
                    <p>
                    Select your payment
                </p>
                </div>
                <div class="span_delivery">
                    <select >
                        <option value="">Cash on delivery</option>
                        <option value="">Credit card</option>
                    </select>
                </div>
            
                
            <div class="clear"></div>
            </div>
            <div class="sum1">
                <div class="total_price" style="">
                    <p>Products Price: $40</p>
                    <br>
                    <p >Shipping Payment: $10</p>
                    <div class="under_line_price"></div>
                    <br >
                    <p style="padding-top: 10px">Total: $50</p>
                    <br>
                </div>
                
                <div class="clear"></div>
            </div>

            <div style="margin-top: 15px">
                <button type="button" class="complete_buy_now" onclick="complete()">Buy Now</button>
            </div>
        </div>
    </div>
</div>
@endsection