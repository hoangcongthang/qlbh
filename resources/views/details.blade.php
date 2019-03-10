@extends('layouts.master')
@section('content')
<!-- start top_bg -->
<div class="top_bg">
    <div class="wrap">
        <div class="main_top">
            <h2 class="style">Bakery</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start content -->
            <div class="single">
                <!-- start span1_of_1 -->
                <div class="left_content">
                    <div class="span1_of_1">
                        <a href="img/blog.jpg" ><img src="img/blog.jpg"></a>
                    </div>
                    <!-- start span1_of_1 -->
                    <div class="span1_of_1_des">
                        <div class="desc1">
                            <h3>Treat Time Box </h3>
                            <h5> <span> $5.59</span> $4.00 </h5>
                            <ul class="sidebar">
                                    <li><a href="#">Contain 9 pies in a box</a></li>
                                    <li><a href="#">Free ship from 3 boxes </a></li>
                                    <li><a href="#">Sugar </a> </li>
                                </ul>
                            <div class="incre">
                                <h4>Select quantity</h4>
                                 <div class="incea_button">
                                    <div class="span2">
                                        <form>
                                          <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                                          <input type="number" id="number" value="1" />
                                          <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                                        </form>
                                    </div>

                                    <div class="span1">
                                        <p> 150 products are available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="available">
                                <div class="btn_form buynow">
                                    <form>
                                        <input type="submit" value="buy now" title="" formaction="checkout.html" />
                                    </form>
                                </div>
                                <div class="btn_form tocart">
                                    <form>
                                        <input type="submit" class="art" value="Add to cart" title="" formaction="checkout.html" />
                                    </form>
                                </div>
                                <div class="toart">
                                    <img src="img/art.png" alt="">
                                </div>
                                
                                <div class="clear"></div>
                                
                                <span><a href="#">login to save in wishlist </a></span>
                                
                            </div>
                            <div class="share-desc">
                                <div class="share">
                                    <h4>Share Product :</h4>
                                    <ul class="share_nav"">
                                        <li><a href="#"><img src="img/facebook.png" title="facebook"></a></li>
                                        <li><a href="#"><img src="img/twitter.png" title="Twiiter"></a></li>
                                        <li><a href="#"><img src="img/rss.png" title="Rss"></a></li>
                                        <li><a href="#"><img src="img/gpluse.png" title="Google+"></a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- start left content_bottom -->
                    <div class="left_content_btm">
                        <p class="para">This Treat Time Box features our best selling Mini Bakes, including: 3x Curly Whirly corks, 2x Raspberry Chocolate Velvet corks, 2x Sticky Toffee Corks, 2x Red Velvet corks.</p>
                            <br>
                        <p class="para">Available for delivery in London.</p>
                        <br>
                        <p class="para">Our cupcakes are freshly baked to order from scratch at each of our bakeries using quality ingredients, and we pride ourselves in not using preservatives. </p>
                        <!-- start tabs -->
                        <section class="tabs">
                            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
                            <label for="tab-1" class="tab-label-1">Nutrition</label>
                            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
                            <label for="tab-2" class="tab-label-2">Commend</label>
                            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
                            <label for="tab-3" class="tab-label-3">Ingredients</label>
                            <div class="clear-shadow"></div>
                            <div class="content">
                                <div class="content-1 ">
                                    <h3 style="font-size: 2em; text-align: center;">Calorie Information</h3>
                                   <table >
                                      <tr>
                                        <td>Calories </td>
                                        <td>249</td>
                                      </tr>
                                      <tr>
                                        <td>Total Fat</td>
                                        <td>12.8g</td>
                                      </tr>
                                      <tr>
                                        <td>Cholesterol</td>
                                        <td>14.1mg</td>
                                      </tr>
                                      <tr>
                                        <td>Sodium </td>
                                        <td>172.8mg </td>
                                      </tr>
                                      <tr>
                                        <td>Carbohydrates  </td>
                                        <td>33.8g </td>
                                      </tr>
                                      <tr>
                                        <td>Sugar   </td>
                                        <td>25.6g </td>
                                      </tr>
                                      <tr>
                                        <td>Protein    </td>
                                        <td>2.2g </td>
                                      </tr>
                                    </table>
                                    <div class="clear "></div>
                                </div>
                                <div class="content-2 special">
                                    <p class="para ">1, <a href="#">@Smiths</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam illo consectetur numquam facilis architecto quis magni velit amet id harum sapiente unde aspernatur porro quam repudiandae tempora beatae, sit optio nulla tenetur! Earum pariatur, at quos assumenda magni voluptas corrupti repellat veniam tempora alias voluptate porro vero soluta iste. Quam!
                                    <p class="time"> 4 days ago</p></p>

                                    <br>
                                    <p class="para ">2, <a href="#">@Smiths</a> I recommend you to try it. It's a good cake with special taste. You will not regret about it. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio beatae culpa, eaque cum quisquam voluptates, ut dicta illum laboriosam, minus ea aut maxime quaerat saepe. Culpa adipisci a ipsam asperiores sint voluptatem eius illum id dicta vel, magni perspiciatis labore, quasi aperiam laudantium quod, dolor autem fuga ut vitae velit!
                                    <p class="time"> 4 days ago</p></p>
                                    <br>

                                    <p class="para ">3, <a href="#">@Smiths</a> I recommend you to try it. It's a good cake with special taste. You will not regret about it. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquid odit voluptate, ab illo itaque totam voluptas numquam sequi voluptates!<p class="time"> 3 days ago</p></p>
                                    
                                    <br>
                                </div>
                                <div class="content-3">
                                    <ul>
                                        <li>Curly Whirly Mini Bake <br>Dark Chocolate,  Flour, Salted Butter, Soft Brown Icing Sugar, Eggs, Baking Powder, Bicarbonate of Soda, Milk, Cocoa Powder, Cream Cheese, Vanilla Extract, Cream, Glucose, Food Colour.</li>
                                        <li>Red Velvet Mini Bake <br>Icing Sugar, Caster Sugar, Cream Cheese,  Mascarpone, Milk, Flour, Eggs, Cocoa Powder,  Baking Powder, Glucose, Vanilla  Extract, Sunflower  Oil, Salt, Buttermilk, Red Wine Vinegar, Red Food Colouring.</li>
                                        <li>Chocolate Raspberry Velvet Flour, Cocoa Powder, Baking Powder, Bicarbonate of Soda, Salt, Caster Sugar, Soy Milk, Sunflower Oil, Raspberry Jam, Vanilla Extract, Golden Syrup, Dark Chocolate, Raspberries, Lemon</li>
                                        
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </section>
                        <!-- end tabs -->
                    </div>
                    <!-- end left content_bottom -->
                </div>
                <!-- start left_sidebar -->
                <div class="left_sidebar">
                    <ul class="det_nav">
                        <li><a href="#"> Bakery </a></li>
                        <li><a href="#"> Sugar </a></li>
                        <li><a href="#"> Sweets</a></li>
                        <li><a href="#"> Cracker</a></li>
                        <li><a href="#">New products</a></li>
                    </ul>
                    <h4>recent products</h4>
                    <div class="left_products">
                        <div class="left_img">
                            <img src="img/baked-cookies.jpg" alt="" />
                        </div>
                        <div class="left_text">
                            <p><a href="#">Baked Cookies</a></p>
                            <span class="line">$12.00</span>
                            <span>$10.00</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="left_products">
                        <div class="left_img">
                            <img src="img/0001-1.jpg" alt="" />
                        </div>
                        <div class="left_text">
                            <p><a href="#">Prada Cake</a></p>
                            <span class="line">$15.00</span>
                            <span>$13.00</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="left_products">
                        <div class="left_img">
                            <img src="img/det_pic1.jpg" alt="" />
                        </div>
                        <div class="left_text">
                            <p><a href="#">Prada Cake</a></p>
                            <span class="line">$9.99</span>
                            <span>$8.00</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end content -->
        </div>
    </div>
</div>

@endsection