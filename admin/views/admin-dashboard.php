<!--== DASHBOARD INFO ==-->
<?php include("includes/dashboard_info.php"); ?>

<!--== Student Details ==-->
<?php include("admin-student-all.php") ;?>

<!--== Course Details ==-->
<?php //include("admin-all-courses.php") ;?>


<div class="sb2-2-3">
    <div class="row">
        <!--== Job Openings ==-->
        <?php include("admin-job-all.php") ;?>

    </div>
    <div class="row">

        <!--== Event Details ==-->
        <?php //include("admin-seminar-all.php") ;?>

    </div>
</div>

<div class="sb2-2-3">
    <div class="row">
        <!--== Exam Time Tables  Listing Enquiry ==-->
        <?php include("includes/exam_time_table.php") ;?>

    </div>
</div>

<!--== Latest Activity ==-->
<div class="sb2-2-3">
    <div class="row">
        <!--== Latest Activity ==-->
        <?php include("includes/latest_activity.php") ;?>


        <!--== Social Media ==-->
        <?php include("includes/social_media.php") ;?>

    </div>
</div>
<!--== Google Map ==-->
<?php include("includes/google_map.php") ;?>