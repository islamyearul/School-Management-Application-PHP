<?php
ob_start();
$showStuff= "SELECT * FROM `stuff`";
$stuffs = $crud->select($showStuff);
if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $id = $_GET['id'];
        $deleteStuff = "DELETE FROM `stuff` WHERE stuff_id =$id";
        $delSMS = $crud->delete($deleteStuff);
    }
    if(isset($delSMS)){
       // header('Location: ad-stuff-all.php');
        echo $delSMS;
    }
}




?>



<!--== User Details ==-->
<h1>All Stuffs</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>Stuff Details</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Email</th>
                                    <th>Post</th>
                                    <th>Phone</th>
                                    <th>Salary</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Join Date</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($stuf = mysqli_fetch_assoc($stuffs)){ ?>
                                <tr>
                                    <td><span class="list-img"><img src="upload/<?php echo $stuf['stuff_image']; ?>" alt=""></span></td>
                                    <td><?php echo $stuf['stuff_id']; ?></td>
                                    <td><?php echo $stuf['stuff_name']; ?></td>
                                    <td><?php echo $stuf['stuff_father']; ?></td>
                                    <td><?php echo $stuf['stuff_mother']; ?></td>
                                    <td><?php echo $stuf['stuff_email']; ?></td>
                                    <td><?php echo $stuf['stuff_post']; ?></td>
                                    <td><?php echo $stuf['stuff_mobile']; ?></td>
                                    <td><?php echo $stuf['stuff_salary']; ?></td>
                                    <td><?php echo $stuf['stuff_address']; ?></td>
                                    <td><?php echo $stuf['stuff_gender']; ?></td>
                                    <td><?php echo $stuf['stuff_join_date']; ?></td>
                                    <td><?php echo $stuf['stuff_password']; ?></td>
                                    <td>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="ad-stuff-edit.php?status=edit&&id=<?php echo $stuf['stuff_id']; ?>" class="ad-st-view bg-info">Edit</a>
                                        <a href="?status=delete&&id=<?php echo $stuf['stuff_id']; ?>" class="ad-st-view bd-danger" onclick="confirm('Are You Sure?')">Delete</a>
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