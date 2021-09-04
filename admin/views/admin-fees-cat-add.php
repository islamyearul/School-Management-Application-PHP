<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

if(isset($_POST['add_feesCat'])){
    extract($_POST);
    $addfeescat = "INSERT INTO `all_class_fees_table`( `class`, `year`, `admission_fees`, `session_fees`, `seminar_fee`, `event_fee`, `january_salary`, `february_salary`, `march_salary`, `afril_salary`, `first_terminal_exam_fees`, `may_salary`, `june_salary`, `july_salary`, `august_salary`, `mid_terminal_exam_fees`, `september_salary`, `october_salary`, `november_salary`, `december_salary`, `final_exam_fees`) VALUES ('$class','$year','$admission_fee','$session_fee','$seminar_fee','$event_fee','$january_fee','$february_fee','$march_fee','$april_fee','$firstexam_fee','$may_fee','$june_fee','$july_fee','$august_fee','$midexam_fee','$september_fee','$october_fee','$november_fee','$december_fee','$finalexam_fee')";
    $returnSMS = $crud->insert($addfeescat);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Fees Category Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Fees Category Added Error, Please Try Again!!</h2>";
    }
}
?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Subject Add</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="">
                            <div class="form-group ">
                                <label for="clasnamee">Class</label>
                                <select class="form-control" name="class" style="font-size: 15px;" id="clasnamee">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['name']; ?>"><?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Year</label>
                                <input type="number" value="" class="validate" required name="year">
                            </div>

                            <div class=" col s6">
                                <label class="">Admission Fees</label>
                                <input type="number" value="" class="validate" required name="admission_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Session Fees</label>
                                <input type="number" value="" class="validate" required name="session_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">Seminar Fees</label>
                                <input type="number" value="" class="validate" required name="seminar_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Event Fees</label>
                                <input type="number" value="" class="validate" required name="event_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">January Fees</label>
                                <input type="number" value="" class="validate" required name="january_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">february Fees</label>
                                <input type="number" value="" class="validate" required name="february_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">march Fees</label>
                                <input type="number" value="" class="validate" required name="march_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">april Fees</label>
                                <input type="number" value="" class="validate" required name="april_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">1st Terminal Exam Fees</label>
                                <input type="number" value="" class="validate" required name="firstexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">may Fees</label>
                                <input type="number" value="" class="validate" required name="may_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">june Fees</label>
                                <input type="number" value="" class="validate" required name="june_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">july Fees</label>
                                <input type="number" value="" class="validate" required name="july_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">august Fees</label>
                                <input type="number" value="" class="validate" required name="august_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">Mid Exam Fees</label>
                                <input type="number" value="" class="validate" required name="midexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">september Fees</label>
                                <input type="number" value="" class="validate" required name="september_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">october Fees</label>
                                <input type="number" value="" class="validate" required name="october_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">november Fees</label>
                                <input type="number" value="" class="validate" required name="november_fee">
                            </div>

                            <div class=" col s6">
                                <label class="">december Fees</label>
                                <input type="number" value="" class="validate" required name="december_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Final Exam Fees</label>
                                <input type="number" value="" class="validate" required name="finalexam_fee">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_feesCat"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>