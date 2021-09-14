<?php

if(isset($_GET['status'])){
    if($_GET['status']=='std-logout'){
        $studentLogin->stdLogout();
    }
}


  session_start();
  @$sid = $_SESSION['StdsessionID'];
  @$snm = $_SESSION['StdsessionNAME'];

  $stdSQL = "SELECT * FROM `student_registration` WHERE student_id =  $sid";
  $stds = $crud->select($stdSQL);
  $std = mysqli_fetch_assoc($stds);
  //echo $sid . $snm;

?>
<!--SECTION START-->
<section>
      <?php include("includes/std-menu.php") ?>
    <div class="stu-db row">
        <div class="container pg-inn">
            <?php include("includes/std-pro.php") ?>

            <div class="col-md-9">
                <div class="">
                    <?php 
                    
                        if(isset($_GET['std'])){

                            if($_GET['std'] == 'std-dash-view'){
                                include("v-db-dash.php");
                             }
                            if($_GET['std'] == 'std-result-view'){
                                include("v-db-result.php");
                             }
                            elseif($_GET['std'] == 'std-course-view'){
                                include("v-db-courses.php");
                             }
                            elseif($_GET['std'] == 'std-exam-view'){
                                include("v-db-exams.php");
                             }
                            elseif($_GET['std'] == 'std-profile-view'){
                                include("v-db-profile.php");
                             }
                            elseif($_GET['std'] == 'std-profile-view'){
                                include("v-db-profile.php");
                             }
                            elseif($_GET['std'] == 'std-fees-view'){
                                include("v-db-fees.php");
                             }




                          }  else{
                            include("v-db-dash.php");
                          }
                          
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->