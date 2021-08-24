
<?php 
     if(isset($_GET['status'])){
        if($_GET['status'] == 'edit'){
            $id = $_GET['id'];
            $showstudents = "SELECT * FROM `students` WHERE std_id = $id";
            $students = $crud->select($showstudents);
            $student = mysqli_fetch_assoc($students);
        }
    }
    if(isset($_POST['update_student'])){
        $ImgName = $_FILES['up_std_image']['name'];
        $TmpName = $_FILES['up_std_image']['tmp_name'];
        extract($_POST);
        $updateStudent = "UPDATE `students` SET `FullName`='$up_std_name',`Gender`='$up_std_gender',`DOB`='$up_std_birthday',`Photo`='$ImgName',`RegNo`='$up_std_reg',`Class`='$up_std_class',`AcademicYear`='$up_std_academic_year',`TotalFees`='$up_std_total_fees',`AdvanceFees`='$up_std_advance_fees',`Balance`='$up_std_balance',`Parent`='$up_std_parent' WHERE std_id = $up_std_id";
        $upSMS = $crud->update($updateStudent);
        if($upSMS){
            move_uploaded_file($TmpName, "upload/".$ImgName);
            echo $upSMS;
        }
    }




 ?>

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Student Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Full name</label>
                                <input type="text" value="<?php echo $student['FullName'] ?>" class="validate" required name="up_std_name">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Registration No</label>
                                <input type="number" value="<?php echo $student['RegNo'] ?>" class="validate" required name="up_std_reg">
                            </div>
                            <div class=" col s6">
                                <label class="">Class</label>
                                <input type="number" class="validate" value="<?php echo $student['Class'] ?>" required name="up_std_class">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Academic Year</label>
                                <input type="number" value="<?php echo $student['AcademicYear'] ?>" class="validate" name="up_std_academic_year">
                            </div>
                            <div class=" col s6">
                                <label class="">Parent ID</label>
                                <input type="number" value="<?php echo $student['Parent'] ?>" class="validate" name="up_std_parent">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <label class="">Total Fees</label>
                                <input type="number" value="<?php echo $student['TotalFees'] ?>" class="validate" name="up_std_total_fees">
                            </div>
                            <div class=" col s6">
                                <label class="">Advance Fees</label>
                                <input type="number" value="<?php echo $student['AdvanceFees'] ?>" class="validate" name="up_std_advance_fees">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <label>Balance</label>
                                <input type="text" value="<?php echo $student['Balance'] ?>" class="validate" name="up_std_balance">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Date Of Birth</label>
                                <input type="date" value="<?php echo $student['DOB'] ?>" class="validate" required name="up_std_birthday">
                                
                           </div>
                        </div>

                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="up_std_gender" id="inlineRadio1" value="male" <?php if($student['Gender'] == 'male'){ echo "checked";} ?>> 
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="up_std_gender" id="inlineRadio2" value="female" <?php if($student['Gender'] == 'female'){ echo "checked";} ?>>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <input type="hidden" name="up_std_id" value="<?php echo $student['std_id'] ?>">
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Student Image</span>
                                    <input type="file" name="up_std_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Profile image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_student"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>