<?php
if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showSeminar = "SELECT * FROM `seminar` WHERE seminar_id = $retID";
        $seminars = $crud->select($showSeminar);
        $seminar = mysqli_fetch_assoc($seminars);
    }
}



if(isset($_POST['update_seminar'])){
    $ImgName = $_FILES['up_sm_image']['name'];
    $TmpName = $_FILES['up_sm_image']['tmp_name'];
    extract($_POST);
    $updateSeminar =  "UPDATE `seminar` SET `seminar_name`='$up_sm_name',`seminar_maintainer`='$up_sm_maintainer',`seminar_description`='$up_sm_description',`seminar_location`='$up_sm_location',`seminar_date`='$up_sm_date',`seminar_time`='$up_sm_time', `seminar_end_time`='$up_sm_end_time', `seminar_image`='$ImgName' WHERE seminar_id = $up_id";
    $returnSMS = $crud->update($updateSeminar);
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
                    <h4>Edit Seminar</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data"> 
                    <label class="">Seminar name</label>
                        <div class="row">
                            
                            <div class=" col s6">
                                <input type="text" value="<?php echo $seminar['seminar_name']; ?>" class="validate" required name="up_sm_name">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                            <label class="">Seminar Descriptions</label>
                                <textarea name="up_sm_description" id="" cols="30" rows="5"><?php echo $seminar['seminar_description']; ?></textarea>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                            <label class="">Location</label>
                                <input type="text" value="<?php echo $seminar['seminar_location']; ?>" class="validate" name="up_sm_location">
                               
                            </div>
                            <div class=" col s6">
                            <label class="">Seminar Maintainer</label>
                                <input type="text" value="<?php echo $seminar['seminar_maintainer']; ?>" class="validate" name="up_sm_maintainer">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">Date</label>
                                <input type="date" value="<?php echo $seminar['seminar_date']; ?>" class="validate" required name="up_sm_date">
                                
                            </div>
                            <div class=" col s6">
                            <label class="">Time</label>
                                <input type="time" class="validate" value="<?php echo $seminar['seminar_time']; ?>" required name="up_sm_time">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                            <label class="">End Time</label>
                                <input type="time" class="validate" value="" required name="up_sm_end_time">
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>Banner</span>
                                    <input type="file" name="up_sm_image"> 
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Event image">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $seminar['seminar_id']; ?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_seminar"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>