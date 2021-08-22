<?php

 $courseCat = "SELECT * FROM `course_category`";
 $cats = $crud->select($courseCat);


if(isset($_POST['add_course'])){

    $ImgName = $_FILES['course_image']['name'];
    $TmpName = $_FILES['course_image']['tmp_name'];

    extract($_POST);

    $addCourse = "INSERT INTO `courses`(`course_name`, `course_description`, `course_status`,`course_cat`, `course_seat`,`course_start_date`,`course_contact_person_name`, `course_contact_person_phone`, `course_contact_email`, `course_image`) VALUES ('$course_name','$course_description','$course_status','$course_cat','$course_seat','$course_start_date','$course_contactP_name','$course_contactP_phone','$course_contactP_email','$ImgName')";
    $returnSMS = $crud->insert($addCourse);
    if($returnSMS){
        move_uploaded_file($TmpName, "upload/".$ImgName);
        echo "<h3 class='text-success'>Course Add Success</h3>";
    }
}

if(isset($_POST['add_course_syllabus'])){
    extract($_POST);
    $addcourseProcessFees = "INSERT INTO `course_process_fees`(`first_term_fee`, `second_term_fee`, `third_term_fee`, `forth_term_fee`, `fees_description`, `step_1_des`, `step_2_des`, `step_3_des`, `step_4_des`, `step_5_des`, course_id) VALUES ('$fst_trm_fee','$scnd_trm_fee','$thrd_trm_fee','$foth_trm_fee','$price_des','$A_step','$B_step','$C_step','$D_step','$E_step', '$course_id')";
    $fees = $crud->insert($addcourseProcessFees);
    if($fees){
        echo "<h3 class='text-success'>Course Fees & Process Add Success</h3>";
    }
}
if(isset($_POST['add_schedule'])){
    extract($_POST);
    $addSchedule = "INSERT INTO `course_time_table`(`1st_sem_name`, `1st_sem_des`, `2nd_sem_name`, `2nd_sem_des`, `3rd_sem_name`, `3rd_sem_des`, `4th_sem_name`, `4th_sem_des`, course_id) VALUES ('$semister_a','$semister_a_des','$semister_b','$semister_b_des','$semister_c','$semister_c_des','$semister_d','$semister_d_des', '$course_id')";
    $schedule = $crud->insert($addSchedule);
    if($schedule){

        echo "<h2 class='text-success'>Course Schedule Add Success</h2>";
    }


}

?>
<!--== User Details ==-->

<h3>Add Course </h3>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New Course</h2>
                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Course Detail</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i class="fa fa-bed" aria-hidden="true"></i> <span>Course Process & Fees</span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Time table</span></a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Information</h4>
                                </div>
                                <div class="bor">
                                    <form accept="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="list-title" type="text" class="validate" name="course_name">
                                                <label for="list-title" class="">Course Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea class="materialize-textarea"
                                                    name="course_description"></textarea>
                                                <label>Course Descriptions:</label>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Status</label>
                                                <select id="inputState" class="form-control" name="course_status"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Category</label>
                                                <select id="inputState" class="form-control" name="course_cat"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <?php while($cat = mysqli_fetch_assoc($cats)){ ?>
                                                      <option value="<?php echo $cat['cat_name']; ?>"><?php echo $cat['cat_name']; ?></option>
                                                     <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Seats</label>
                                                <input id="t5-n1" type="number" class="validate"
                                                    name="course_seat">
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Start Date</label>
                                                <input id="t5-n1" type="date" class="validate"
                                                    name="course_start_date">
                                            </div>

                                        </div>
                                        <h4 class="pt-3">Contact Person Details</h4><hr>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="t5-n1" type="text" class="validate"
                                                    name="course_contactP_name">
                                                <label for="t5-n1">Contact Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="t5-n3" type="number" class="validate"
                                                    name="course_contactP_phone">
                                                <label for="t5-n3">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="t5-n5" type="email" class="validate"
                                                    name="course_contactP_email">
                                                <label for="t5-n5">Email</label>
                                            </div>
                                        </div>
                                        <div class="file-field input-field">
                                            <div class="btn admin-upload-btn">
                                                <span>Course Banner</span>
                                                <input type="file" multiple="" name="course_image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text"
                                                    placeholder="Upload course banner image">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                        type="submit" class="waves-button-input" value="Submit"
                                                        name="add_course"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Requirements, feese and how to apply</h4>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form action="" method="post">
                                    <h4>Requirements:</h4>
                                    <h4>Feese:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="number" class="validate" required name="fst_trm_fee">
                                            <label>1'st terms feese</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="number" class="validate" required name="scnd_trm_fee">
                                            <label>2'nd terms feese</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="number" class="validate" required name="thrd_trm_fee">
                                            <label>3'rd terms feese</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="number" class="validate" required name="foth_trm_fee">
                                            <label>4'th terms feese</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="price_des"></textarea>
                                            <label>Price Descriptions:</label>
                                        </div>
                                    </div>
                                    <h4>How to apply this course:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="A_step" id="" cols="30" rows="5"></textarea>
                                            <label>Step 1 Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="B_step" id="" cols="30" rows="5"></textarea>
                                            <label>Step 5 Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="D_step" id="" cols="30" rows="5"></textarea>
                                            <label>Step 4 Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="C_step" id="" cols="30" rows="5"></textarea>
                                            <label>Step 3 Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea name="E_step" id="" cols="30" rows="5"></textarea>
                                            <label>Step 4 Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="number" name="course_id" class="validate" required>
                                            <label>Course  ID</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"
                                                    name="add_course_syllabus"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Time table Schedule</h4>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form action="" method="post">
                                    <h4>1st semester:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" required name="semister_a">
                                            <label>Title:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="semister_a_des"></textarea>
                                            <label>Descriptions:</label>
                                        </div>
                                    </div>
                                    <h4>2nd semester:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" required name="semister_b">
                                            <label>Title:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="semister_b_des"></textarea>
                                            <label>Descriptions:</label>
                                        </div>
                                    </div>
                                    <h4>3rd semester:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" required name="semister_c">
                                            <label>Title:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="semister_c_des"></textarea>
                                            <label>Descriptions:</label>
                                        </div>
                                    </div>
                                    <h4>4th semester:</h4>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" class="validate" required name="semister_d">
                                            <label>Title:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea class="materialize-textarea" name="semister_d_des"></textarea>
                                            <label>Descriptions:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="number" name="course_id" class="validate" required>
                                            <label>Course  ID</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"
                                                    name="add_schedule"></i>
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