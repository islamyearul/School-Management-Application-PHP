
<?php
if(isset($_POST['add_stuff'])){
    $ImgName = $_FILES['stuff_image']['name'];
    $TmpName = $_FILES['stuff_image']['tmp_name'];
    extract($_POST);
    $addStuff = "INSERT INTO `stuff`(`stuff_name`, `stuff_father`, `stuff_mother`, `stuff_email`, `stuff_post`, `stuff_mobile`, `stuff_salary`, `stuff_address`, `stuff_gender`, `stuff_join_date`, `stuff_password`, `stuff_image`) VALUES ('$stuff_name','$stuff_fname','$stuff_mname','$stuff_email','$stuff_postname','$stuff_mobile','$stuff_salary','$stuff_address','$stuff_gender','$stuff_joining_date','$stuff_password','$ImgName')";
    $insertSMS = $crud->insert($addStuff);
    if(isset($insertSMS)){
        echo $insertSMS;
    }

}

?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New Stuff Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="stuff_name">
                                <label class="">Stuff name</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="stuff_fname">
                                <label class="">Father Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="stuff_mname">
                                <label class="">Mother Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="email" class="validate" value="" required name="stuff_email"> 
                                <label class="">Email is</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="" class="validate" name="stuff_postname">
                                <label>Post Name</label>
                            </div>

                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" name="stuff_mobile">
                                <label class="">Mobile No</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" value="" class="validate" name="stuff_salary">
                                <label>Salary</label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <textarea id="" cols="30" rows="5" name="stuff_address" class="validate" ></textarea>
                                <!-- <input type="text" value="" class="validate" > -->
                                <label class="">Address</label>
                            </div>

                        </div>
                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="stuff_gender" id="inlineRadio1" value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="stuff_gender" id="inlineRadio2" value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">Joining Date</label>
                                <input type="date" value="" class="validate" required name="stuff_joining_date">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="password" value="" class="validate" name="stuff_password">
                                <label class="">Password</label>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Stuff Image</span>
                                    <input type="file" name="stuff_image">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Profileimage">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_stuff"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
