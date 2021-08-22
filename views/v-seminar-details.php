<?php
    if(isset($_GET['status'])){
        if($_GET['status']=='view-seminar'){
            $id = $_GET['id'];
            $singleseminar = "SELECT * FROM `seminar` WHERE seminar_id = $id";
            $seminars = $crud->select($singleseminar);
            $seminar =  mysqli_fetch_assoc($seminars);

        }
    }




?>





<!--SECTION-->
<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn">
            <img src="admin/upload/<?php echo $seminar['seminar_image']; ?>" class="img-fluid mx-auto" alt="Seminar Banner" style="max-width: 50%;">
                <h1><?php echo $seminar['seminar_name']; ?></h1>
                <p><?php echo $seminar['seminar_description']; ?></p>
                <div class="event-head-sub">
                    <ul>
                        <li>Date: <?php echo $seminar['seminar_date']; ?></li>
                        <li>Time: <?php echo $formating->GET_TIME($seminar['seminar_time']); ?> – <?php echo $formating->GET_TIME($seminar['seminar_end_time']); ?></li>
                        <li>Location: <?php echo $seminar['seminar_location']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION START-->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="cor about-sp">
                <div class="s18-age-event l-info-pack-days">
                    <ul>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/1.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>21 May 1966</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Welcome to Training at Team Fabio Clemente</h4>
                                    <p>Established in 1966 Donec quis turpis vitae sem lobortis sodales. Suspendisse
                                        blandit magna a purus porta feugiat. Sed nec auctor erat. Nam eu dui lectus.
                                        Etiam suscipit vel mauris eget bibendum.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/2.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>09:00AM - 10:30AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Academy Leadership</h4>
                                    <p>Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem
                                        quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.</p>
                                    <div class="time-hide time-hide-1">
                                        <h5>Leadership</h5>
                                        <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus,
                                            a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit
                                            amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                            sapien. Ut vulputate nec mi non blandit.</p>
                                        <h5>Leadership</h5>
                                        <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus,
                                            a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit
                                            amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                            sapien. Ut vulputate nec mi non blandit.</p>
                                        <h5>Leadership</h5>
                                        <p> Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus,
                                            a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit
                                            amet arcu in, hendrerit placerat libero. Morbi sit amet sodales
                                            sapien. Ut vulputate nec mi non blandit.</p>
                                    </div>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-1-btn">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-11-btn hb-com">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/3.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>09:00AM - 10:30AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>All Courses</h4>
                                    <p>Donec at ligula turpis. Sed viverra velit ac urna dictum, nec pellentesque est
                                        rhoncus. Nam sollicitudin molestie consequat. Praesent ullamcorper nulla tellus,
                                        venenatis rhoncus lacus elementum eget. </p>
                                    <div class="time-hide time-hide-2">
                                        <h5>Course Name 1</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 2</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 3</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 4</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 5</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 6</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                        <h5>Course Name 7</h5>
                                        <p>Quisque at pulvinar tellus, gravida elementum mauris. Aenean lacinia in nibh
                                            in pulvinar. Nunc volutpat risus vitae tempus semper. Pellentesque id orci
                                            quis diam pharetra faucibus.</p>
                                        <a href="course-details.html" class="aw-re-btn">Read more</a>
                                    </div>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/4.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>01:00PM - 02:30Pm</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Awards and Achievement</h4>
                                    <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque.
                                        Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex
                                        egestas, sed lobortis turpis facilisis.</p>
                                    <div class="time-hide time-hide-3">
                                        <h5>Best college award 2000</h5>
                                        <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque.
                                            Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex
                                            egestas, sed lobortis turpis facilisis. </p>
                                        <h5>Best college award 2018</h5>
                                        <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque.
                                            Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex
                                            egestas, sed lobortis turpis facilisis. </p>
                                    </div>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-3-btn">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-33-btn hb-com">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/5.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>02:45PM - 04:00Pm</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Facilities and Management</h4>
                                    <p>Qolor nibh dictum leo, ut accumsan dui purus eget turpis. Vestibulum molestie,
                                        tortor quis rutrum dapibus, tellus lorem volutpat tortor, ut efficitur justo
                                        nunc sed ante.</p>
                                    <div class="time-hide time-hide-4">
                                        <h5>Student Facilities</h5>
                                        <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin
                                            tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                        <h5>Management Facilities</h5>
                                        <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin
                                            tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                        <h5>Education Facilities</h5>
                                        <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin
                                            tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                        <h5>Transport Facilities</h5>
                                        <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin
                                            tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                        <h5>Alumini Facilities</h5>
                                        <p>Morbi dolor augue, pulvinar sed efficitur elementum, venenatis at sem. Proin
                                            tincidunt magna velit, vitae tincidunt nibh ultricies nec.</p>
                                    </div>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-4-btn">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-44-btn hb-com">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/6.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Departments</h4>
                                    <p>Sed nec egestas dui. Donec facilisis mauris sit amet auctor pellentesque.
                                        Suspendisse sagittis sagittis lobortis. Suspendisse rutrum eros vitae ex
                                        egestas, sed lobortis turpis facilisis.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/7.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Research</h4>
                                    <p>Donec at ligula turpis. Sed viverra velit ac urna dictum, nec pellentesque est
                                        rhoncus. Nam sollicitudin molestie consequat. Praesent ullamcorper nulla tellus.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/8.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Staff</h4>
                                    <p>Curabitur accumsan ante id iaculis auctor. In mollis nisl tincidunt elit
                                        hendrerit, a ultrices massa commodo. Ut suscipit urna ut dolor varius semper.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/9.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Admission</h4>
                                    <p>Proin sit amet metus nec augue vehicula congue ac sed risus. Ut quis enim in
                                        nulla facilisis venenatis cursus sed sapien. In convallis, est sit amet dictum
                                        placerat, erat velit consectetur dolor</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/10.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Media and Press Realese</h4>
                                    <p>A tristique est ante quis purus. Ut pretium leo enim, vel rhoncus dolor dictum
                                        vitae. Duis varius pellentesque vulputate. Vivamus pharetra</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/11.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span>10:30AM - 10:45AM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Health Care</h4>
                                    <p>Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus
                                        scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit
                                        amet massa. </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/12.png" alt="">
                            </div>
                            <div class="s17-eve-time s17-bor-bot-0">
                                <div class="s17-eve-time-tim">
                                    <span>04:00PM - 04:30PM</span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4>Nation award winning 2017</h4>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="ed-about-sec1">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->