<?php
ob_start();
if(isset($_GET['status'])){
   if($_GET['status']=='edit-times'){
        $id = $_GET['id'];
        $showtimes = "SELECT * FROM `course_time_table` WHERE course_time_id = $id";
        $times = $crud->select($showtimes);
        $time = mysqli_fetch_assoc($times);
    }
}

if(isset($_POST['update_schedule'])){
    extract($_POST);

    $UpaddSchedule = "UPDATE `course_time_table` SET `1st_sem_name`='$semister_a',`1st_sem_des`='$semister_a_des',`2nd_sem_name`='$semister_b',`2nd_sem_des`='$semister_b_des',`3rd_sem_name`='$semister_c',`3rd_sem_des`='$semister_c_des',`4th_sem_name`='$semister_d',`4th_sem_des`='$semister_d_des' WHERE course_time_id = $up_time_id ";
    $schedule = $crud->insert($UpaddSchedule);
    if($schedule){

        echo "<h2 class='text-success'>Course Schedule Update Success</h2>";
    }


}

?>
<!--== User Details ==-->

<h3>Course </h3>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Course Time Table</h2>
                    <div class="tab-content">
                        <div id="menu3" class="">
                            <div class="inn-title">
                                <h4>Time table Schedule</h4>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form action="" method="post">
                                    <h4>1st semester:</h4>
                                    <div class="row">
                                        <div class="col s12">
                                            <label>Title:</label>
                                            <input type="text" class="validate" required name="semister_a" value="<?php echo $time['1st_sem_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Descriptions:</label>
                                            <textarea class="materialize-textarea" name="semister_a_des"><?php echo $time['1st_sem_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <h4>2nd semester:</h4>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Title:</label>
                                            <input type="text" class="validate" required name="semister_b" value="<?php echo $time['2nd_sem_name'] ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="up_time_id" value="<?php echo $time['course_time_id'] ?>">
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Descriptions:</label>
                                            <textarea class="materialize-textarea" name="semister_b_des"><?php echo $time['2nd_sem_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <h4>3rd semester:</h4>
                                    <div class="row">
                                        <div class="col s12">
                                            <label>Title:</label>
                                            <input type="text" class="validate" required name="semister_c" value="<?php echo $time['3rd_sem_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Descriptions:</label>
                                            <textarea class="materialize-textarea"  name="semister_c_des"><?php echo $time['3rd_sem_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <h4>4th semester:</h4>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Title:</label>
                                            <input type="text" class="validate" required name="semister_d" value="<?php echo $time['4th_sem_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Descriptions:</label>
                                            <textarea class="materialize-textarea" name="semister_d_des"><?php echo $time['4th_sem_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Course ID</label>
                                            <input type="number" disabled name="course_id" class="validate" required value="<?php echo $time['course_id'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" value="Submit" name="update_schedule"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









<!-- <form id="regForm" action="">

<h1>Register:</h1> -->

<!-- One "tab" for each step in the form: -->
<!-- <div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
  
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div> -->

<!-- Circles which indicates the steps of the form: -->
<!-- <div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form> -->