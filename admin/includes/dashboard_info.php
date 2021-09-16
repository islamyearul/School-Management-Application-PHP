<?php 
 $course = "SELECT * FROM `courses`";
 $datas = $crud->select($course);
 $rows = mysqli_num_rows($datas);

 $students = "SELECT * FROM `students`";
 $stds = $crud->select($students);
 $std = mysqli_num_rows($datas);

 $teachers = "SELECT * FROM `teachers`";
 $tcrs = $crud->select($teachers);
 $tcr = mysqli_num_rows($tcrs);

 $seminars = "SELECT * FROM `seminar`";
 $smnrs = $crud->select($seminars);
 $smn = mysqli_num_rows($smnrs);

 $stuffs = "SELECT * FROM `stuff`";
 $stfs = $crud->select($stuffs);
 $stf = mysqli_num_rows($stfs);

 $jobs = "SELECT * FROM `job_anounce`";
 $jbs = $crud->select($jobs);
 $jb = mysqli_num_rows($jbs);

 
 $events = "SELECT * FROM `add_event`";
 $evns = $crud->select($events);
 $evn = mysqli_num_rows($evns);


 $admissionsql = "SELECT * FROM `admission_request`";
 $admss = $crud->select($admissionsql);
 $adm = mysqli_num_rows($admss);

?>


<div class="sb2-2-1">
    <h2>Admin Dashboard</h2>
    <div class="db-2">
        <ul>
            <li>
                <div class="dash-book dash-b-1">
                    <h5>All Courses</h5>
                    <h4><?php echo @$rows; ?></h4>
                    <a href="ad-all-course.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-2">
                    <h5>Admission</h5>
                    <h4><?php echo @$adm; ?></h4>
                    <a href="#">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-3">
                    <h5>Students</h5>
                    <h4><?php echo @$std; ?></h4>
                    <a href="ad-student-all.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-4">
                    <h5>Teschers</h5>
                    <h4><?php echo @$tcr; ?></h4>
                    <a href="ad-teacher-all.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-4">
                    <h5>Stuffs</h5>
                    <h4><?php echo @$stf; ?></h4>
                    <a href="ad-stuff-all.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-3">
                    <h5>Seminars</h5>
                    <h4><?php echo @$smn; ?></h4>
                    <a href="ad-seminar-all.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-2">
                    <h5>Jobs</h5>
                    <h4><?php echo @$jb; ?></h4>
                    <a href="ad-job-all.php">View more</a>
                </div>
            </li>
            <li>
                <div class="dash-book dash-b-1">
                    <h5>Events</h5>
                    <h4><?php echo @$evn; ?></h4>
                    <a href="ad-event-all.php">View more</a>
                </div>
            </li>
        </ul>
    </div>
</div>