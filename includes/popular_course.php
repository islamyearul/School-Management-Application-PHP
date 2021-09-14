<?php
// 1st collum popular course
 $topCourse  = "SELECT * FROM `popular_course_view` WHERE first_term_fee > 20000 LIMIT 3";
 $topPopulars = $crud->select($topCourse);

// 2nd collum popular course
 $MiddleCourse  = "SELECT * FROM `popular_course_view` WHERE first_term_fee BETWEEN 10000 AND 20000 LIMIT 3";
 $MiddlePopulars = $crud->select($MiddleCourse);
?>



<section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title text-center col-md-12">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Mostly World Class Ranked Course, You Please Check All and Chose Your Goal</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <?php while($topPopular = mysqli_fetch_assoc($topPopulars)){ ?>
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="admin/upload/<?php echo $topPopular['course_image']; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="all-course.php">
                                    <h3><?php echo $topPopular['course_name']; ?></h3>
                                </a>
                                <h4><?php echo $topPopular['course_cat']; ?></h4>
                                <p>Classes started from coming 
                                    <?php echo $formating->GET_DAY_FULL($topPopular['course_start_date']) ; ?>
                                    (<?php echo $formating->BD_Date_Style($topPopular['course_start_date']) ; ?>),total seats 
                                    <?php echo $topPopular['course_seat']; ?> 
                                    and available seats 10
                               </p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $topPopular['course_id'] ?>"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                            Book Now</a>
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $topPopular['course_id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i>10
                                            Aavailable</a> 
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $topPopular['course_id'] ?>"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                            570</a> 
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <?php while($MiddlePopular = mysqli_fetch_assoc($MiddlePopulars)){ ?>
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="admin/upload/<?php echo $MiddlePopular['course_image']; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                <h3><?php echo $MiddlePopular['course_name']; ?></h3>
                                </a>
                                <h4><?php echo $MiddlePopular['course_cat']; ?></h4>
                                <p>Classes started from coming 
                                    <?php echo $formating->GET_DAY_FULL($MiddlePopular['course_start_date']) ; ?>
                                    (<?php echo $formating->BD_Date_Style($MiddlePopular['course_start_date']) ; ?>),total seats 
                                    <?php echo $MiddlePopular['course_seat']; ?> 
                                    and available seats 10
                               </p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $MiddlePopular['course_id']; ?>"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                            Book Now</a>
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $MiddlePopular['course_id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>10
                                            Aavailable</a> 
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $MiddlePopular['course_id']; ?>"><i class="fa fa-share-alt" aria-hidden="true"></i>
                                            570</a> 
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>