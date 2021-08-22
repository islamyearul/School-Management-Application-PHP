
<?php
$showStuff= "SELECT * FROM `stuff`";
$stuffs = $crud->select($showStuff);
$stuf = mysqli_fetch_assoc($stuffs);



if(isset($_POST['update_stuff'])){
    $ImgName = $_FILES['up_stuff_image']['name'];
    $TmpName = $_FILES['up_stuff_image']['tmp_name'];
    extract($_POST);

    $updateData = "UPDATE `stuff` SET `stuff_name`='$up_stuff_name',`stuff_father`='$up_stuff_fname',`stuff_mother`='$up_stuff_mname',`stuff_email`='$up_stuff_email',`stuff_post`='$up_stuff_postname',`stuff_mobile`='$up_stuff_mobile',`stuff_salary`='$up_stuff_salary',`stuff_address`='$up_stuff_address',`stuff_gender`='$up_stuff_gender',`stuff_join_date`='$up_stuff_joining_date',`stuff_password`='$up_stuff_password',`stuff_image`='$ImgName' WHERE stuff_id = $up_id";

    $updSMS = $crud->update($updateData);

     if($updSMS){
         //echo "<script>alert('Data Updated')</script>";
         echo $updSMS;
     }
    

}

?>

<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Stuff Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col s6">
                                <label class="">Stuff name</label>
                                <input type="text" value="<?php echo $stuf['stuff_name']; ?>" class="validate" required name="up_stuff_name">
                            </div>
                            <div class=" col s6">
                                <label class="">Father Name</label>
                                <input type="text" value="<?php echo $stuf['stuff_father']; ?>" class="validate" required name="up_stuff_fname">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Mother Name</label>
                                <input type="text" value="<?php echo $stuf['stuff_mother']; ?>" class="validate" required name="up_stuff_mname">
                            </div>
                            <div class="col s6">
                                <label class="">Email is</label>
                                <input type="email" class="validate" value="<?php echo $stuf['stuff_email']; ?>" required name="up_stuff_email"> 
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $stuf['stuff_id']; ?>" name="up_id">
                        <div class="row">
                            <div class="col s12">
                                <label>Post Name</label>
                                <input type="text" value="<?php echo $stuf['stuff_post']; ?>" class="validate" name="up_stuff_postname">
                            </div>

                            <div class=" col s6">
                                <label class="">Mobile No</label>
                                <input type="number" value="<?php echo $stuf['stuff_mobile']; ?>" class="validate" name="up_stuff_mobile">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class=" col s12">
                                <label>Salary</label>
                                <input type="number" value="<?php echo $stuf['stuff_salary']; ?>" class="validate" name="up_stuff_salary">
                            </div>

                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Address</label>
                                <textarea id="" cols="30" rows="5" name="up_stuff_address" class="validate" ><?php echo $stuf['stuff_address']; ?></textarea>
                                <!-- <input type="text" value="" class="validate" > -->
                            </div>

                        </div>
                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="up_stuff_gender" id="inlineRadio1" value="male" <?php if($stuf['stuff_gender']=='male'){ echo "checked";} ?>>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="up_stuff_gender" id="inlineRadio2" value="female" <?php if($stuf['stuff_gender']=='female'){ echo "checked";} ?>>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">Joining Date</label>
                                <input type="date" value="<?php echo $stuf['stuff_join_date']; ?>" class="validate" required name="up_stuff_joining_date">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Password</label>
                                <input type="password" value="<?php echo $stuf['stuff_password']; ?>" class="validate" name="up_stuff_password">
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Stuff Image</span>
                                    <input type="file" name="up_stuff_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Profileimage">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_stuff"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
