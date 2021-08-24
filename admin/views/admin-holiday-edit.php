
<?php 
    if(isset($_POST['add_student'])){
        $ImgName = $_FILES['std_image']['name'];
        $TmpName = $_FILES['std_image']['tmp_name'];
        extract($_POST);
        $addStudent = "INSERT INTO `students`(`FullName`, `Gender`, `DOB`, `Photo`, `RegNo`, `Class`, `AcademicYear`, `TotalFees`, `AdvanceFees`, `Balance`, `Parent`) VALUES ('$std_name','$std_gender','$std_birthday','$ImgName','$std_reg','$std_class','$std_academic_year','$std_total_fees','$std_advance_fees','$std_balance','$std_parent')";
        $addSMS = $crud->insert($addStudent);
        if($addSMS){
            move_uploaded_file($TmpName, "upload/".$ImgName);
            echo $addSMS;
        }
    }




 ?>

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New Student Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="std_name">
                                <label class="">Full name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" required name="std_reg">
                                <label class="">Registration No</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="number" class="validate" value="" required name="std_class">
                                <label class="">Class</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" name="std_academic_year">
                                <label class="">Academic Year</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" name="std_parent">
                                <label class="">Parent ID</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" name="std_total_fees">
                                <label class="">Total Fees</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" name="std_advance_fees">
                                <label class="">Advance Fees</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="" class="validate" name="std_balance">
                                <label>Balance</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Date Of Birth</label>
                                <input type="date" value="" class="validate" required name="std_birthday">
                                
                           </div>
                        </div>

                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="std_gender" id="inlineRadio1" value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="std_gender" id="inlineRadio2" value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Student Image</span>
                                    <input type="file" name="std_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Profile image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_student"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>