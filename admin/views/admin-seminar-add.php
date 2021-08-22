<?php
if(isset($_POST['add_seminar'])){
    $ImgName = $_FILES['sm_image']['name'];
    $TmpName = $_FILES['sm_image']['tmp_name'];
    extract($_POST);
    $addSeminar =  "INSERT INTO `seminar`(`seminar_name`, `seminar_maintainer`, `seminar_description`, `seminar_location`, `seminar_date`, `seminar_time`, `seminar_end_time`, `seminar_image`) VALUES ('$sm_name','$sm_maintainer','$sm_description','$sm_location','$sm_date','$sm_time', '$sm_end_time', '$ImgName')";
    $returnSMS = $crud->insert($addSeminar);
    if($returnSMS){
        move_uploaded_file($TmpName, "upload/".$ImgName);
        echo $returnSMS;
    }
}

?>
<!--== Seminar Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Seminar</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="" class="validate" required name="sm_name">
                                <label class="">Seminar name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="sm_description" id="" cols="30" rows="5"></textarea>
                                <label class="">Seminar Descriptions</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" name="sm_location">
                                <label class="">Location</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" name="sm_maintainer">
                                <label class="">Seminar Maintainer</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">Date</label>
                                <input type="date" value="" class="validate" required name="sm_date">
                                
                            </div>
                            <div class=" col s6">
                            <label class="">Time</label>
                                <input type="time" class="validate" value="" required name="sm_time">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">End Time</label>
                                <input type="time" class="validate" value="" required name="sm_end_time">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Banner</span>
                                    <input type="file" name="sm_image"> 
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Event image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_seminar"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>