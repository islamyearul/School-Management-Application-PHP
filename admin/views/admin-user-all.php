
<?php

 $adDataquery = "SELECT * FROM admin_info ";
 $userDatas = $crud->select($adDataquery);

    if(isset($_GET['status'])){
        if($_GET['status'] == 'delete'){

            $id = $_GET['id'];
            $deleteUserQuery = "DELETE FROM `admin_info` WHERE id= $id";
             $result = $crud->delete($deleteUserQuery);
             if(isset($result)){
                //header("Location: ad-user-all.php");
                 echo $result;
             }

        }
    }
 




?>



<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Users Information</h4>

                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Password</th>
                                    <th>Action Role</th>
                                    <th>User Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($userData = mysqli_fetch_assoc($userDatas)){ 

                                
                                ?>
                                <tr>
                                    <td><?php echo $userData['id'] ?></td>
                                    <td><?php echo $userData['ad_name'] ?></td>
                                    <td><?php echo $userData['ad_email'] ?></td>
                                    <td><?php echo $userData['ad_pass'] ?></td>
                                    <td><?php echo $userData['action_role'] ?></td>
                                    <td><span class="list-img"><img src="upload/<?php echo $userData['user_image'] ?>" alt=""></span></td>
                                    <td>
                                        <a href="ad-user-edit.php?status=edit&&id=<?php echo $userData['id'] ?>" class="btn btn-success text-white" style="padding: 10px;">Edit</a>
                                        <a onclick="return confirm('Are you Sure??')" href="?status=delete&&id=<?php echo $userData['id'] ?>" class="btn btn-danger text-white" style="padding: 10px;">Delete</a>
                                    </td>
                                    <!-- <td><a href="admin-student-details.html" class="ad-st-view">View</a></td> -->
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