
<?php
if(isset($_POST['add_job'])){
    extract($_POST);
    $addJob = "INSERT INTO `job_anounce`( `job_post_name`, `job_description`, `job_empty_post`, `job_start_date`, `job_application_fee`, `job_location`, `job_application_deadline`, `Status`) VALUES ('$job_post','$job_description','$job_empty_post','$job_start_date','$application_fee','$job_location','$end_date','$job_status')";

    $returnSMS = $crud->insert($addJob);
}

if(isset($returnSMS)){
    echo $returnSMS;
}










?>



<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>New Job Opening</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" value="" class="validate" required name="job_post">
                                <label class="">Job Post Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="job_description" id="" cols="30" rows="5"></textarea>
                                <label class="">Job Descriptions</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="number" value="" class="validate" required name="job_empty_post"> 
                                <label class="">Empty Post</label>
                            </div>
                        </div>
                        <div class="row">
                           <div class="input-field col s6">
                                <input type="text" value="" class="validate" name="job_location">
                                <label class="">Location</label>
                            </div>

                            <div class="input-field col s6">
                                <input type="number" class="validate" value="" required name="application_fee">
                                <label class="">Application Fee</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Start Date</label>
                                <input type="date" value="" class="validate" required name="job_start_date">
                                
                            </div>
                            <div class=" col s6">
                                <label class="">Application End Deadline</label>
                                <input type="date" value="" class="validate" name="end_date">
                                
                            </div>
                        </div>
                        <div class="">
                                 
                                 <div class="form-group ">
                                 <label for="inputState">Job Status</label>
                                 <select id="inputState" class="form-control" name="job_status" style="font-size: 18px;">
                                     <option selected disabled>Choose...</option>
                                     <option value="Active">Active</option>
                                     <option value="Inactive">Inactive</option>
                                 </select>
                                 </div>
                             
                         </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_job"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>