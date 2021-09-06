<!-- Lognin And Logout -->
<?php   
   include("libraries/database_crud.php");
   $crud = new Database();
   include("libraries/admin_login.php");
   $obj = new Admin(); 
   include("libraries/crud_yearul.php");
   $objfun = new AdminYearul();
   

    
    session_start();
    $id = $_SESSION['sessionID'];
    if($id == null){
        header("location:index.php");
    }   
    if(isset($_GET['adminLogout'])){
        if($_GET['adminLogout']=='logout'){ 
          $obj->adminLogout();
        }
    }
    ?>

<?php include_once("includes/head.php"); ?>
<body>
    <!--== Nav CONTRAINER ==-->
    <?php include_once("includes/nav.php"); ?>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!-- left menu -->
                <?php include_once("includes/left_menu.php"); ?>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">

                <!--== breadcrumbs ==-->
                <?php include("includes/breadcrumbs.php"); ?>

                <?php
                    if(isset($view)){
                        if($view == "dashboard"){
                            include("views/admin-dashboard.php");
                        } 
                        elseif($view == "ad-setting"){
                            include("views/admin-setting.php");
                        }
                        elseif($view == "all-course"){
                            include("views/admin-all-courses.php");
                        }
                        elseif($view == "add-course"){
                            include("views/admin-add-courses.php");
                        }
                        elseif($view == "edit-course"){
                            include("views/admin-edit-courses.php");
                        }
                        elseif($view == "edit-course-fees"){
                            include("views/admin-edit-courses_fees.php");
                        }
                        elseif($view == "edit-course-time"){
                            include("views/admin-edit-courses_time.php");
                        }
                        elseif($view == "user-all"){
                            include("views/admin-user-all.php");
                        }
                        elseif($view == "user-add"){
                            include("views/admin-user-add.php");
                        }
                        elseif($view == "user-edit"){
                            include("views/admin-user-edit.php");
                        }
                        elseif($view == "add-teacher"){
                            include("views/admin-teacher-add.php");
                        }
                        elseif($view == "edit-teacher"){
                            include("views/admin-teacher-edit.php");
                        }
                        elseif($view == "all-teacher"){
                            include("views/admin-teacher-all.php");
                        }
                        elseif($view == "all-stuff"){
                            include("views/admin-stuff-all.php");
                        }
                        elseif($view == "add-stuff"){
                            include("views/admin-stuff-add.php");
                        }
                        elseif($view == "edit-stuff"){
                            include("views/admin-stuff-edit.php");
                        }
                        elseif($view == "add-event"){
                            include("views/admin-event-add.php");
                        }
                        elseif($view == "edit-event"){
                            include("views/admin-event-edit.php");
                        }
                        elseif($view == "all-event"){
                            include("views/admin-event-all.php");
                        }
                        elseif($view == "all-seminar"){
                            include("views/admin-seminar-all.php");
                        }
                        elseif($view == "add-seminar"){
                            include("views/admin-seminar-add.php");
                        }
                        elseif($view == "edit-seminar"){
                            include("views/admin-seminar-edit.php");
                        }
                        elseif($view == "all-job"){
                            include("views/admin-job-all.php");
                        }
                        elseif($view == "add-job"){
                            include("views/admin-job-add.php");
                        }
                        elseif($view == "edit-job"){
                            include("views/admin-job-edit.php");
                        }
                        elseif($view == "all-exam"){
                            include("views/admin-exam-all.php");
                        }
                        elseif($view == "add-exam"){
                            include("views/admin-exam-add.php");
                        }
                        elseif($view == "edit-exam"){
                            include("views/admin-exam-edit.php");
                        }
                        elseif($view == "trash-exam"){
                            include("views/admin-exam-trash.php");
                        }
                        elseif($view == "all-exam-group"){
                            include("views/admin-exam-group-all.php");
                        }
                        elseif($view == "add-exam-group"){
                            include("views/admin-exam-group-add.php");
                        }
                        elseif($view == "exam-marks-edit"){
                            include("views/admin-exam-marks-edit.php");
                        }
                        elseif($view == "exam-marks-all"){
                            include("views/admin-exam-marks-all.php");
                        }
                        elseif($view == "exam-marks-add"){
                            include("views/admin-exam-marks-add.php");
                        }
                        elseif($view == "student-result"){
                            include("views/admin-student-result.php");
                        }
                        elseif($view == "all-student"){
                            include("views/admin-student-all.php");
                        }
                        elseif($view == "add-student"){
                            include("views/admin-student-add.php");
                        }
                        elseif($view == "edit-student"){
                            include("views/admin-student-edit.php");
                        }
                        elseif($view == "export-data"){
                            include("views/admin-export-data.php");
                        }
                        elseif($view == "import-data"){
                            include("views/admin-import-data.php");
                        }
                        elseif($view == "add-attendance"){
                            include("views/admin-attendence-add.php");
                        }
                        elseif($view == "all-attendance"){
                            include("views/admin-attendence-all.php");
                        }
                        elseif($view == "edit-attendance"){
                            include("views/admin-attendence-edit.php");
                        }
                        elseif($view == "add-grade"){
                            include("views/admin-grade-add.php");
                        }
                        elseif($view == "all-grade"){
                            include("views/admin-grade-all.php");
                        }
                        elseif($view == "edit-grade"){
                            include("views/admin-grade-edit.php");
                        }
                        elseif($view == "edit-holydays"){
                            include("views/admin-holiday-edit.php");
                        }
                        elseif($view == "all-holydays"){
                            include("views/admin-holiday-all.php");
                        }
                        elseif($view == "add-holydays"){
                            include("views/admin-holiday-add.php");
                        }
                        elseif($view == "edit-notice"){
                            include("views/admin-notice-edit.php");
                        }
                        elseif($view == "all-notice"){
                            include("views/admin-notice-all.php");
                        }
                        elseif($view == "add-notice"){
                            include("views/admin-notice-add.php");
                        }
                        elseif($view == "edit-session"){
                            include("views/admin-session-edit.php");
                        }
                        elseif($view == "all-session"){
                            include("views/admin-session-all.php");
                        }
                        elseif($view == "add-session"){
                            include("views/admin-session-add.php");
                        }
                        elseif($view == "edit-question"){
                            include("views/admin-exam-question-edit.php");
                        }
                        elseif($view == "all-question"){
                            include("views/admin-exam-question-all.php");
                        }
                        elseif($view == "add-question"){
                            include("views/admin-exam-question-add.php");
                        }
                        elseif($view == "edit-subject"){
                            include("views/admin-subjects-edit.php");
                        }
                        elseif($view == "all-subject"){
                            include("views/admin-subjects-all.php");
                        }
                        elseif($view == "add-subject"){
                            include("views/admin-subjects-add.php");
                        }
                        elseif($view == "edit-classroutine"){
                            include("views/admin-class_routine-edit.php");
                        }
                        elseif($view == "all-classroutine"){
                            include("views/admin-class_routine-all.php");
                        }
                        elseif($view == "add-classroutine"){
                            include("views/admin-class_routine-add.php");
                        }
                        elseif($view == "edit-class"){
                            include("views/admin-class-edit.php");
                        }
                        elseif($view == "all-class"){
                            include("views/admin-class-all.php");
                        }
                        elseif($view == "add-class"){
                            include("views/admin-class-add.php");
                        }    
                        elseif($view == "add-fees"){
                            include("views/admin-student-fees-add.php");
                        }
                        elseif($view == "all-fees"){
                            include("views/admin-student-fees-all.php");
                        }
                        elseif($view == "edit-fees"){
                            include("views/admin-student-fees-edit.php");
                        }
                        elseif($view == "edit-feescat"){
                            include("views/admin-fees-cat-edit.php");
                        }
                        elseif($view == "all-feescat"){
                            include("views/admin-fees-cat-all.php");
                        }
                        elseif($view == "add-feescat"){
                            include("views/admin-fees-cat-add.php");
                        }
                        elseif($view == "student-fees-check"){
                            include("views/admin-student-fees-check.php");
                        }

                        
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }
                        elseif($view == ""){
                            include("views/");
                        }




                    }
                   
                
                
                
                ?>



            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <?php include("includes/script.php") ;?>

</body>


</html>