<?php
  include("admin/libraries/database_crud.php");
  $crud = new Database();
  include("admin/libraries/admin_login.php");
  $obj = new Admin(); 
  include("admin/libraries/crud_yearul.php");
  $objfun = new AdminYearul();
  include("helpers/class_formate.php");
  $formating = new FORMAT();
  include("helpers/student_login_class.php");
  $studentLogin = new StudentLogin();




?>
<?php include_once("includes/head.php"); ?>

<body>
    <!--END HEADER SECTION-->
        <!-- MOBILE MENU -->
        <?php include_once("includes/mobile_menu.php"); ?>

        <!--HEADER SECTION-->
        <section>
            <!-- TOP BAR -->
            <?php include_once("includes/top_bar.php"); ?>

            <!-- LOGO AND MENU SECTION -->
            <?php include_once("includes/menu.php"); ?>
            <?php include_once("includes/search_top.php"); ?>

        </section>
    <!--END HEADER SECTION-->

        <?php
            if(isset($view)){
                if($view == 'index'){
                    include("views/v-index.php");
                }
                elseif($view == 'about'){
                    include("views/v-about.php");
                }
                elseif($view == 'dashboard'){
                    include("views/v-dashboard.php");
                }
                elseif($view == 'admission'){
                    include("views/v-admission.php");
                }
                elseif($view == 'all-course'){
                    include("views/v-all-courses.php");
                }
                elseif($view == 'course-details'){
                    include("views/v-course-details.php");
                }
                elseif($view == 'seminars'){
                    include("views/v-seminars.php");
                }
                elseif($view == 'contact-us'){
                    include("views/v-contact-us.php");
                }
                elseif($view == 'seminars-details'){
                    include("views/v-seminar-details.php");
                }
                elseif($view == 'seminars-registration'){
                    include("views/v-seminar-register.php");
                }
                elseif($view == 'awards'){
                    include("views/v-awards.php");
                }
                elseif($view == 'research'){
                    include("views/v-research.php");
                }
                elseif($view == 'db-time-line'){
                    include("views/v-db-time-line.php");
                }
                elseif($view == 'db-profile'){
                    include("views/v-db-profile.php");
                }
                elseif($view == 'db-exams'){
                    include("views/v-db-exams.php");
                }
                elseif($view == 'db-courses'){
                    include("views/v-db-courses.php");
                }


                elseif($view == 'student_login'){
                    include("views/v-std_login.php");
                }
                
                elseif($view == 'std-signup'){
                    include("views/v-std_signup.php");
                }
                elseif($view == 'std-forget'){
                    include("views/v-std_forget.php");
                }
                elseif($view == 'std-reset-pass'){
                    include("views/v-std-reset_password.php");
                }

            }     
        
        ?>

    <!-- Footer Section All  Start-->

        <!-- FOOTER COURSE BOOKING -->
        <?php include_once("includes/footer_course_booking.php"); ?>


        <!-- FOOTER -->
        <?php include_once("includes/footer.php"); ?>
        
        <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
        <?php include_once("includes/login_section.php"); ?>

        <!--Right Nav SOCIAL MEDIA SHARE -->
        <?php include_once("includes/social_media_share_right.php"); ?>

        <!--Right Nav SOCIAL MEDIA SHARE -->
        <?php include_once("includes/copy_right.php"); ?>
    

        <!--Import jQuery before materialize.js-->
        <?php include_once("includes/script.php"); ?>
    <!-- Footer Section All End -->
    
</body>

</html>