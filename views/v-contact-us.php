<?php
 
 if(isset($_POST['Send_message'])){
     extract($_POST);
     $addMeassage = "INSERT INTO `get_in_touch`(`name`, `phone`, `email`, `topics`, `address`, `message`) VALUES ('$g_name','$g_phone','$g_email','$g_topics','$g_address','$g_message')";
     $result = $crud->insert($addMeassage);
 }



?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laudantium eius numquam dolore deserunt minus deleniti in mollitia sequi accusantium?</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>Islam <span>Education</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients In Worlds.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>Room No 401, Monjuri Bhaban, 8-DIT Avem
                                <br>Landmark : Motijhel, Dhaka</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://+8801825682260" class="contact-icon">Phone: +8801825682260</a>
                                <br> <a href="tel://+8801646761758" class="contact-icon">Mobile: +8801646761758</a>
                                <br> <a href="mailto:yearulislamonem@gmail.com" class="contact-icon">Email: yearulislamonem@gmail.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> 
                                <a href="http://islamyearul.unaux.com/" target="_blank">Website: hislamyearul.unaux.com</a>
                                <a href="http://islamyearul.epizy.com/" target="_blank">Website: islamyearul.epizy.com</a>
                                <br> <a href="https://www.facebook.com/yearulislamonem">Facebook: islam yearul</a>
                              
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5163.49230868923!2d90.37780274561045!3d23.778013298910373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74c29ceeafb%3A0xe72ef11d9cf0aeef!2sIslamic%20Development%20Bank-Bangladesh%20Islamic%20Solidarity%20and%20Educational%20Wakf%20(IsDB-BISEW)!5e0!3m2!1sen!2sbd!4v1629214973555!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                        <h3 class="text-center"><?php if(isset($result)){ echo "<span class='footer-ser-re'>$result</span>";} ?></h3>
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="" method="post"> 
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="g_name" placeholder="Name" required=""> 
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="g_phone" placeholder="Phone" required=""> 
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="g_email" placeholder="Email" required=""> 
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="g_topics" placeholder="Topics" required=""> 
                            </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="g_address" placeholder="Address" required=""> 
                            </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="g_message" required="" placeholder="Enter Your Massage"></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT" name="Send_message"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

