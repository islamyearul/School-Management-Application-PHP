<?php
 if(isset($_GET['status'])){
     if($_GET['status'] == 'edit'){
         $id = $_GET['id'];
         $showteachers = "SELECT * FROM `teachers` WHERE teachers_id = $id";
         $teachers = $crud->select($showteachers);
         $teacher = mysqli_fetch_assoc($teachers);
     }
 }

 if(isset($_POST['update_teacher'])){
     $ImgName = $_FILES['up_t_image']['name'];
     $TmpName = $_FILES['up_t_image']['tmp_name'];

     extract($_POST);
     $up_t_password = md5($up_t_password);
     $updateTeacher = "UPDATE `teachers` SET `teachers_name`='$up_t_name',`teachers_email`='$up_t_email',`teachers_mobile`='$up_t_phone',`teachers_gender`='$up_t_gender',`teachers_joining_date`='$up_t_joining_date',`teachers_subject`='$up_t_subject',`teachers_password`='$up_t_password',`teachers_image`='$ImgName',`teachers_status`='$up_t_status' WHERE 	teachers_id = $u_t_id";
     $teachers = $crud->update($updateTeacher);
     if($teachers){
         move_uploaded_file($TmpName, "upload/".$ImgName);
         echo $teachers;
     }


 }


?>

<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Teachers Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col s6">
                                <label class="">Teachers name</label>
                                <input type="text" value="<?php echo $teacher['teachers_name']; ?>" class="validate" name="up_t_name" required>
                               
                            </div>
                            <div class=" col s6">
                                <label class="">Teacherse Email</label>
                                <input type="text" value="<?php echo $teacher['teachers_email']; ?>" class="validate" required name="up_t_email">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <label class="">Teacherse Phone number</label>
                                <input type="number" value="<?php echo $teacher['teachers_mobile']; ?>" class="validate" required name="up_t_phone"> 
                                
                            </div>

                        </div>
                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline " >
                                <input class="form-check-input" type="radio" name="up_t_gender" id="inlineRadio1" value="male" <?php if($teacher['teachers_gender'] == 'male'){ echo "checked";} ?>>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="up_t_gender" id="inlineRadio2" value="female" <?php if($teacher['teachers_gender'] == 'female'){ echo "checked";} ?> >
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                
                                <label class="">Joining Date</label>
                                <input type="date" value="<?php echo $teacher['teachers_joining_date']; ?>" class="form-control" name="up_t_joining_date">
                            </div>
                            

                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Password</label>
                                <input type="password" value="<?php echo $teacher['teachers_password']; ?>" class="validate" name="up_t_password">
                                
                            </div>
                            <div class=" col s6">
                                <label class="">Subjest</label>
                                <input type="text" value="<?php echo $teacher['teachers_subject']; ?>" class="validate" name="up_t_subject">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label>Image</label>
                                <input type="file" name="up_t_image">
                            </div>
                        </div>

                        <div class="mb-4" style="font-size: 18px;">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Teachers Status</label>
                            <select class="custom-select" id="inlineFormCustomSelect" style="font-size: 18px;" name="up_t_status">
                                <option value="" selected disabled>--Select Role--</option>
                                <option value="Active" <?php if($teacher['teachers_status'] == 'Active'){ echo "selected";} ?>>Active</option>
                                <option value="Inactive" <?php if($teacher['teachers_status'] == 'Inactive'){ echo "selected";} ?>>Inactive</option>
                            </select>
                        </div>

                        <input type="hidden" name="u_t_id" value="<?php echo $teacher['teachers_id']; ?>">


                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_teacher"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

