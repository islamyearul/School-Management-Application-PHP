<?php 
$courseReq = "SELECT * FROM `courses`";
$courses =  $crud->select($courseReq);

?>


<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title col-md-12">
                <h2>All <span>Courses</span></h2>
                <p class="text-center">Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec
                    pharetra augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <!--POPULAR COURSES-->
                    <?php while($course = mysqli_fetch_assoc($courses)){ ?>
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-4 py-5"> <img class="img-fluid shadow" src="admin/upload/<?php echo $course['course_image'] ?>" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-8 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3 class=""><?php echo $course['course_name'] ?></h3>
                            </a>
                            <h4 class=""><?php echo $course['course_cat'] ?></h4>
                            <p><?php echo $course['course_description'] ?></p>
                            <span class="home-top-cour-rat">4.2</span>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $course['course_id'] ?>"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                                            Book Now</a>
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $course['course_id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i>10
                                            Aavailable</a> 
                                    </li>
                                    <li><a href="course-details.php?status=view-course&&id=<?php echo $course['course_id'] ?>"><i class="fa fa-share-alt" aria-hidden="true"></i>
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