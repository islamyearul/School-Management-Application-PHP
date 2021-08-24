<?php
$showJob = "SELECT * FROM `job_anounce`";
$jobs = $crud->select($showJob);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $id = $_GET['id'];
        $deleteJob = "DELETE FROM `job_anounce` WHERE job_announce_id = $id";
        $delSMS = $crud->delete($deleteJob);
    }
    if(isset($delSMS)){
        echo $delSMS;
    }
}


?>




<!--== User Details ==-->
<h1>All Jobs</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Jobs</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post Name</th>
                                    <th>Description</th>
                                    <th>No of Vacants</th>
                                    <th>Fees</th>
                                    <th>Location</th>
                                    <th>Start Date</th>
                                    <th>End Deadline</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($job = mysqli_fetch_assoc($jobs)){ ?>
                                <tr>
                                    <td><?php echo $job['job_announce_id']; ?></td>
                                    <td><?php echo $job['job_post_name']; ?></td>
                                    <td ><?php echo $job['job_description']; ?></td>
                                    <td><?php echo $job['job_empty_post']; ?></td>
                                    <td><?php echo $job['job_application_fee']; ?></td>
                                    <td><?php echo $job['job_location']; ?></td>
                                    <td><?php echo $job['job_start_date']; ?></td>
                                    <td><?php echo $job['job_application_deadline']; ?></td>
                                    <td>
                                        <?php if($job['Status'] == 'Active'){?>
                                           <span class="label label-success">Active</span>
                                        <?php }else{?>
                                            <span class="label label-danger">Inactive</span>

                                        <?php } ?>
                                    </td>
                                    <td>
                                        
                                        <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $job['job_announce_id']; ?>" class="ad-st-view bg-danger" >Delete</a>
                                        <a href="ad-job-edit.php?status=edit&&id=<?php echo $job['job_announce_id']; ?>" class="ad-st-view bg-info">Edit</a>
                                    </td>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>