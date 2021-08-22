
<?php
if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $id = $_GET['id'];
        $showJob = "SELECT * FROM `job_anounce` WHERE job_announce_id = $id ";
        $jobs = $crud->select($showJob);
        $job = mysqli_fetch_assoc($jobs);
    }
}

if(isset($_POST['update_job'])){
    extract($_POST);
    $updateJob = "UPDATE `job_anounce` SET `job_post_name`='$up_job_post',`job_description`='$up_job_description',`job_empty_post`='$up_job_empty_post',`job_start_date`='$up_job_start_date',`job_application_fee`='$up_application_fee',`job_location`='$up_job_location',`job_application_deadline`='$up_end_date',`Status`='up_job_status' WHERE job_announce_id = $up_job_id ";

    $updateSMS = $crud->update($updateJob);
}

if(isset($updateSMS)){
    echo $updateSMS;
}

?>



<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Job</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col s12">
                            <label class="">Job Post Name</label>
                                <input type="text" value="<?php echo $job['job_post_name']; ?>" class="validate" required name="up_job_post">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                            <label class="">Job Descriptions</label>
                                <textarea name="up_job_description" id="" cols="30" rows="5"><?php echo $job['job_description']; ?></textarea>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                            <label class="">Empty Post</label>
                                <input type="number" value="<?php echo $job['job_empty_post']; ?>" class="validate" required name="up_job_empty_post"> 
                                
                            </div>
                        </div>
                        <div class="row">
                           <div class=" col s6">
                           <label class="">Location</label>
                                <input type="text" value="<?php echo $job['job_location']; ?>" class="validate" name="up_job_location">
                               
                            </div>

                            <div class=" col s6">
                            <label class="">Application Fee</label>
                                <input type="number" class="validate" value="<?php echo $job['job_application_fee']; ?>" required name="up_application_fee">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Start Date</label>
                                <input type="date" value="<?php echo $job['job_start_date']; ?>" class="validate" required name="up_job_start_date">
                                
                            </div>
                            <div class=" col s6">
                                <label class="">Application End Deadline</label>
                                <input type="date" value="<?php echo $job['job_application_deadline']; ?>" class="validate" name="up_end_date">
                                
                            </div>
                        </div>
                        <div class="mb-4" style="font-size: 18px;">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Teachers Status</label>
                            <select class="custom-select" id="inlineFormCustomSelect" style="font-size: 18px;" name="up_job_status">
                                <option value="" selected disabled>--Select Role--</option>
                                <option value="Active" <?php if($job['Status'] == 'Active'){ echo "selected";} ?>>Active</option>
                                <option value="Inactive" <?php if($job['Status'] == 'Inactive'){ echo "selected";} ?>>Inactive</option>
                            </select>
                        </div>
                         <input type="hidden" name="up_job_id" value="<?php echo $job['job_announce_id']; ?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_job"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>