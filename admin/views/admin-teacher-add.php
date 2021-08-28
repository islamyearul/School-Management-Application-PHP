<?php
if(isset($_POST['add_teacher'])){
    extract($_POST);
    $imgname = $_FILES['t_image']['name'];
    $tmpName = $_FILES['t_image']['tmp_name'];

    $addTeachers = "INSERT INTO `teachers`(`teachers_name`, `teachers_email`, `teachers_mobile`, `teachers_gender`, `teachers_joining_date`, `teachers_subject`, `teachers_password`, `teachers_image`, `teachers_status`) VALUES ('$t_name','$t_email','$t_phone','$t_gender','$t_joining_date','$t_subject','$t_password','$imgname','$t_status')";

   $resSMS =  $crud->insert($addTeachers);
}
 
if(isset($resSMS)){
    move_uploaded_file($tmpName, "upload/".$imgname);
    echo $resSMS;
}


?>

<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New Teachers Informations</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" name="t_name" required>
                                <label class="">Teachers name</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="t_email">
                                <label class="">Teacherse Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number" value="" class="validate" required name="t_phone">
                                <label class="">Teacherse Phone number</label>
                            </div>

                        </div>
                        <div class="form-group ">
                            <label>Gender</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="t_gender" id="inlineRadio1"
                                    value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_gender" id="inlineRadio2"
                                    value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>

                                <label class="">Joining Date</label>
                                <input type="date" value="" class="form-control" name="t_joining_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="password" value="" class="validate" name="t_password">
                                <label class="">Password</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" name="t_subject">
                                <label class="">Subjest</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label>Image</label>
                                <input type="file" name="t_image">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="t_status">
                                    <option selected disabled>Choose...</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_teacher"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>