<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showFees = "SELECT * FROM `all_class_fees_table` WHERE all_class_fees_id = $retID";
        $feeses = $crud->select($showFees);
        $fees = mysqli_fetch_assoc($feeses);
    }
}

if(isset($_POST['update_feesCat'])){
    extract($_POST);
    $updateGrade =  "UPDATE `all_class_fees_table` SET `class`='$class',`year`='$year',`admission_fees`='$admission_fee',`session_fees`='$session_fee',`seminar_fee`='$seminar_fee',`event_fee`='$event_fee',`january_salary`='$january_fee',`february_salary`='$february_fee',`march_salary`='$march_fee',`afril_salary`='$april_fee',`first_terminal_exam_fees`='$firstexam_fee',`may_salary`='$may_fee',`june_salary`='$june_fee',`july_salary`='$july_fee',`august_salary`='$august_fee',`mid_terminal_exam_fees`='$midexam_fee',`september_salary`='$september_fee',`october_salary`='$october_fee',`november_salary`='$november_fee',`december_salary`='$december_fee',`final_exam_fees`='$finalexam_fee' WHERE all_class_fees_id = $up_id";
    $returnSMS = $crud->update($updateGrade);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Fees Category Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Fees Category Update Error, Please Try Again!!</h2>";
    }
}

?>
<!--== User Details ==-->
<h2>Update Fees Category</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Fees Category</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="">
                            <div class="form-group ">
                                <label for="clasnamee">Class</label>
                                <select class="form-control" name="class" style="font-size: 15px;" id="clasnamee">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>" 
                                    <?php if(  $classe['name']  == $fees['class']){ echo "selected" ;} ?>
                                    ><?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Year</label>
                                <input type="number" value="<?php echo $fees['year']; ?>" class="validate" required name="year">
                            </div>

                            <div class=" col s6">
                                <label class="">Admission Fees</label>
                                <input type="number" value="<?php echo $fees['admission_fees']; ?>" class="validate" required name="admission_fee">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $fees['all_class_fees_id']; ?>" name="up_id">
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Session Fees</label>
                                <input type="number" value="<?php echo $fees['session_fees']; ?>" class="validate" required name="session_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">Seminar Fees</label>
                                <input type="number" value="<?php echo $fees['seminar_fee']; ?>" class="validate" required name="seminar_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Event Fees</label>
                                <input type="number" value="<?php echo $fees['event_fee']; ?>" class="validate" required name="event_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">January Fees</label>
                                <input type="number" value="<?php echo $fees['january_salary']; ?>" class="validate" required name="january_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">february Fees</label>
                                <input type="number" value="<?php echo $fees['february_salary']; ?>" class="validate" required name="february_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">march Fees</label>
                                <input type="number" value="<?php echo $fees['march_salary']; ?>" class="validate" required name="march_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">april Fees</label>
                                <input type="number" value="<?php echo $fees['afril_salary']; ?>" class="validate" required name="april_fee">
                            </div>
                            <div class=" col s6">
                                <label class="">1st Terminal Exam Fees</label>
                                <input type="number" value="<?php echo $fees['first_terminal_exam_fees']; ?>" class="validate" required name="firstexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">may Fees</label>
                                <input type="number" value="<?php echo $fees['may_salary']; ?>" class="validate" required name="may_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">june Fees</label>
                                <input type="number" value="<?php echo $fees['june_salary']; ?>" class="validate" required name="june_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">july Fees</label>
                                <input type="number" value="<?php echo $fees['july_salary']; ?>" class="validate" required name="july_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">august Fees</label>
                                <input type="number" value="<?php echo $fees['august_salary']; ?>" class="validate" required name="august_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">Mid Exam Fees</label>
                                <input type="number" value="<?php echo $fees['mid_terminal_exam_fees']; ?>" class="validate" required name="midexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">september Fees</label>
                                <input type="number" value="<?php echo $fees['september_salary']; ?>" class="validate" required name="september_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">october Fees</label>
                                <input type="number" value="<?php echo $fees['october_salary']; ?>" class="validate" required name="october_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">november Fees</label>
                                <input type="number" value="<?php echo $fees['november_salary']; ?>" class="validate" required name="november_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">december Fees</label>
                                <input type="number" value="<?php echo $fees['december_salary']; ?>" class="validate" required name="december_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Final Exam Fees</label>
                                <input type="number" value="<?php echo $fees['final_exam_fees']; ?>" class="validate" required name="finalexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_feesCat"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>