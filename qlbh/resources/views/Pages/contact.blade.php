@extends('master')
@section('content')

<!------------------------------------------------- Bắt đầu vùng contact ----------------------------------------->
    <!-- start top_bg -->
    <div class="top_bg">
        <div class="wrap">
            <div class="main_top">
                <h2 class="style">Contact</h2>
            </div>
        </div>
    </div>
    <!-------------------------------------------------   Bắt đầu Main      ----------------------------------------->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <div class="contact">
                    <div class="contact_left">
                        <div class="contact_info">
                            <h3>Find Us Here</h3>
                            <div class="map">
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.200363624709!2d152.00504361503988!3d-26.674073683230944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b95b247ce4550cd%3A0x979e12280eb70004!2s39+Goode+St%2C+Nanango+QLD+4615%2C+%C3%9Ac!5e0!3m2!1svi!2s!4v1537413481514" width="600" height="450" frameborder="0"></iframe>
                                <br><small><a href="https://goo.gl/maps/u8ibPm6xhYK2" style="color:#242424;font-size:12px;padding: 5px;">View Larger Map</a></small>
                            </div>
                        </div>
                        <div class="company_address">
                            <h3>Bakery Info:</h3>
                            <p>39 Goode Street, London</p>
                            <p>W1T 2PX</p>
                            <p>UK</p>
                            <p>Phone:(84) 94 398 1565</p>
                            <p>Fax: (023) 791 22 67 5</p>
                            <p>Email: <a href="mailto:nguyenanh201293@gmail.com">SweetAndBakery@gmail.com</a></p>
                            <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                        </div>
                    </div>
                    <div class="contact_right">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            <form method="post" action="#">
                                <div>
                                    <label>NAME</label>
                                    <input name="userName" type="text" required>
                                </div>
                                <div>
                                    <label>E-MAIL</label></span>
                                    <input name="userEmail" type="email" required>
                                </div>
                                <div>
                                    <label>MOBILE</label></span>
                                    <input name="userPhone" type="text" required>
                                </div>

                                <div>
                                    <label>SUBJECT</label>
                                    <textarea name="userMsg"> </textarea>
                                </div>
                                <div>
                                    <input type="submit" value="submit us">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

@endsection