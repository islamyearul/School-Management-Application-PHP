<?php

if(isset($_GET['status'])){

    if($_GET['status']=='edit-fees'){
        $id = $_GET['id'];
        $showFees = "SELECT * FROM `course_process_fees` WHERE course_fees_id = $id";
        $fees = $crud->select($showFees);
        $fee = mysqli_fetch_assoc($fees);
    
    }
}





   if(isset($_POST['update_fee'])){
    extract($_POST);
    $upcourseProcessFees = "INSERT INTO `course_process_fees`(`first_term_fee`, `second_term_fee`, `third_term_fee`, `forth_term_fee`, `fees_description`, `step_1_des`, `step_2_des`, `step_3_des`, `step_4_des`, `step_5_des`, course_id) VALUES ('','','','','','','','','','', '')";

    $upcourseProcessFees = "UPDATE `course_process_fees` SET `first_term_fee`='$fst_trm_fee',`second_term_fee`='$scnd_trm_fee',`third_term_fee`='$thrd_trm_fee',`forth_term_fee`='$foth_trm_fee',`fees_description`='$price_des',`step_1_des`='$A_step',`step_2_des`='$B_step',`step_3_des`='$C_step',`step_4_des`='$D_step',`step_5_des`='$E_step' WHERE course_fees_id = $up_fee_id";
    $fees = $crud->insert($upcourseProcessFees);
    if($fees){
        echo "<h3 class='text-success'>Course Fees & Process Update Success</h3>";
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
                    <h2>Course Fees</h2>
                    <div class="tab-content">

                        <div id="menu1" class="">
                            <div class="inn-title">
                                <h4>Requirements, feese and how to apply</h4>
                            </div>
                            <div class="bor ad-cou-deta-h4">
                                <form action="" method="post">
                                    <h4>Requirements:</h4>
                                    <h4>Feese:</h4>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>1'st terms feese</label>
                                            <input type="number" class="validate" required name="fst_trm_fee"
                                                value="<?php echo $fee['first_term_fee'] ?>">
                                        </div>
                                        <div class=" col s12">
                                            <label>2'nd terms feese</label>
                                            <input type="number" class="validate" required name="scnd_trm_fee"
                                                value="<?php echo $fee['second_term_fee'] ?>">
                                        </div>
                                        <div class=" col s12">
                                            <label>3'rd terms feese</label>
                                            <input type="number" class="validate" required name="thrd_trm_fee"
                                                value="<?php echo $fee['third_term_fee'] ?>">
                                        </div>
                                        <div class=" col s12">
                                            <label>4'th terms feese</label>
                                            <input type="number" class="validate" required name="foth_trm_fee"
                                                value="<?php echo $fee['forth_term_fee'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Price Descriptions:</label>
                                            <textarea class="materialize-textarea"
                                                name="price_des"><?php echo $fee['fees_description'] ?></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="up_fee_id" value="<?php echo $fee['course_fees_id'] ?>">
                                    <h4>How to apply this course:</h4>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Step 1 Descriptions:</label>
                                            <textarea name="A_step" id="" cols="30"
                                                rows="5"><?php echo $fee['step_1_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Step 2 Descriptions:</label>
                                            <textarea name="B_step" id="" cols="30"
                                                rows="5"><?php echo $fee['step_2_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Step 3 Descriptions:</label>
                                            <textarea name="C_step" id="" cols="30"
                                                rows="5"><?php echo $fee['step_3_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Step 4 Descriptions:</label>
                                            <textarea name="D_step" id="" cols="30"
                                                rows="5"><?php echo $fee['step_4_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Step 5 Descriptions:</label>
                                            <textarea name="E_step" id="" cols="30"
                                                rows="5"><?php echo $fee['step_5_des'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col s12">
                                            <label>Course ID</label>
                                            <input type="number" disabled name="course_id" class="validate" required
                                                value="<?php echo $fee['course_id'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"><input
                                                    type="submit" class="waves-button-input" value="Submit"
                                                    name="update_fee"></i>
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