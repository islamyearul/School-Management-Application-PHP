<?php
 $courseCat = "SELECT * FROM `course_category`";
 $cats = $crud->select($courseCat);

if(isset($_GET['status'])){
    if($_GET['status']=='edit-course'){
        $id = $_GET['id'];
        $showCourse = "SELECT * FROM `courses` WHERE course_id = $id";
        $courses = $crud->select($showCourse);
        $course = mysqli_fetch_assoc($courses);
    }
}



if(isset($_POST['update_course'])){

    $UImgName = $_FILES['u_course_image']['name'];
    $UTmpName = $_FILES['u_course_image']['tmp_name'];

    extract($_POST);

    // $updateCourse = "UPDATE courses SET course_name='$u_course_name',course_description='$u_course_description',course_status='$u_course_status',course_cat='$u_course_cat',course_seat='$u_course_seat',course_start_date='$u_course_start_date',course_contact_person_name='$u_course_contactP_name',course_contact_person_phone='$u_course_contactP_phone',course_contact_email='$u_course_contactP_email',course_image='$UImgName' WHERE course_id = $up_id";

    $updateCourse = "UPDATE courses SET course_name='$u_course_name', course_description='$u_des',course_status='$u_course_status',course_cat='$u_course_cat',course_seat='$u_course_seat',course_start_date='$u_course_start_date',course_contact_person_name='$u_course_contactP_name',course_contact_person_phone='$u_course_contactP_phone',course_contact_email='$u_course_contactP_email',course_image='$UImgName' WHERE course_id = $up_id";
    $returnSMS = $crud->update($updateCourse);
    if($returnSMS){
        move_uploaded_file($UTmpName, "upload/".$UImgName);
        echo "<h3 class='text-success'>Course Update Success</h3>";
    }
}

?>
<!--== User Details ==-->

<h3>Update Course </h3>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Update Course</h2>
                    <div class="tab-content">
                        <div id="home" class="">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Course Information</h4>
                                </div>
                                <div class="bor">
                                    <form accept="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col s12">
                                                <label for="list-title" class="">Course Name</label>
                                                <input id="list-title" type="text" class="validate" name="u_course_name"
                                                    value="<?php echo $course['course_name'] ?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="up_id" value="<?php echo $course['course_id'] ?>">
                                        <div>
                                            <label>Course Descriptionss:</label><br>
                                            <textarea name="u_des" id="" cols="10" rows="5"><?php echo $course['course_description'] ?></textarea>
                                        </div>

                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Status</label>
                                                <select id="inputState" class="form-control" name="u_course_status"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <option value="Active"
                                                        <?php if($course['course_status'] =='Active'){ echo "selected";} ?>>
                                                        Active
                                                    </option>
                                                    <option value="Inactive"
                                                        <?php if($course['course_status'] =='Inactive'){ echo "selected";} ?>>
                                                        Inactive
                                                    </option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Category</label>
                                                <select id="inputState" class="form-control" name="u_course_cat"
                                                    style="font-size: 15px;">
                                                    <option selected disabled>Choose...</option>
                                                    <?php while($cat = mysqli_fetch_assoc($cats)){ ?>
                                                      <option value="<?php echo $cat['cat_name']; ?>" <?php if($cat['cat_name'] == $course['course_cat'] ){ echo "selected";} ?>><?php echo $cat['cat_name']; ?></option>
                                                     <?php } ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Seats</label>
                                                <input id="t5-n1" type="number" class="validate"
                                                    name="u_course_seat" value="<?php echo $course['course_seat'] ?>">
                                            </div>

                                        </div>
                                        <div class="">
                                            <div class="form-group ">
                                                <label for="inputState">Course Start Date</label>
                                                <input id="t5-n1" type="date" class="validate"
                                                    name="u_course_start_date" value="<?php echo $course['course_start_date'] ?>">
                                            </div>

                                        </div>
                                        <h4 class="pt-3">Contact Person Details</h4>
                                        <hr>
                                        <div class="row">
                                            <div class=" col s6">
                                                <label for="t5-n1">Contact Name</label>
                                                <input id="t5-n1" type="text" class="validate"
                                                    name="u_course_contactP_name"
                                                    value="<?php echo $course['course_contact_person_name'] ?>">
                                            </div>
                                            <div class=" col s6">
                                                <label for="t5-n3">Phone</label>
                                                <input id="t5-n3" type="number" class="validate"
                                                    name="u_course_contactP_phone"
                                                    value="<?php echo $course['course_contact_person_phone'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col s12">
                                                <label for="t5-n5">Email</label>
                                                <input id="t5-n5" type="email" class="validate"
                                                    name="u_course_contactP_email"
                                                    value="<?php echo $course['course_contact_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="file-field input-field">
                                            <div class="btn admin-upload-btn">
                                                <span>Course Banner</span>
                                                <input type="file" multiple="" name="u_course_image">
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
                                                        name="update_course"></i>
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