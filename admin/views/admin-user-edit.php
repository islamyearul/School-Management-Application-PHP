<?php
 if(isset($_GET['status'])){
     if($_GET['status']=='edit'){
         $id = $_GET['id'];
         $query = "SELECT * FROM admin_info WHERE id = $id"; 
         $Datas = $crud->select($query);
         $data =  mysqli_fetch_assoc($Datas);

     }
 }


 if(isset($_POST['update_user'])){

    $updateImgName = $_FILES['Up_user_image']['name'];
    $updateTmpName = $_FILES['Up_user_image']['tmp_name'];
 
    extract($_POST);
    $Up_user_password = md5($Up_user_password);
    $updateQuery = "UPDATE `admin_info` SET `ad_name`='$Up_user_name',`ad_email`='$Up_user_eamil',`ad_pass`='$Up_user_password',`action_role`='$Up_user_role',`user_image`='$updateImgName' WHERE id = $update_id";
    $returnSMS = $crud->update($updateQuery);
    
    if($returnSMS){
        move_uploaded_file($updateTmpName, "upload/".$updateImgName);
        echo $returnSMS;
     }


 }



?>

 


<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New User</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col s6">
                                <label class="">User name</label>
                                <input type="text" value="<?php echo $data['ad_name'] ?>" class="validate" required name="Up_user_name">
                               
                            </div>
                            <div class=" col s6">
                                <label class="">User Email</label>
                                <input type="email" value="<?php echo $data['ad_email'] ?>" class="validate" required name="Up_user_eamil"> 
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Phone Password</label>
                                <input type="password" value="<?php echo $data['ad_pass'] ?>" class="validate" required name="Up_user_password">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                    
                                    <select name="Up_user_role" id="" class="" required>
                                        <option value="" selected disabled>--Select Role--</option>
                                        <option value="admin" <?php if($data['action_role'] == 'admin'){ echo "selected";} ?>>admin</option>
                                        <option value="editor" <?php if($data['action_role'] == 'editor'){ echo "selected";} ?>>editor</option>
                                        <option value="developer" <?php if($data['action_role'] == 'developer'){ echo "selected";} ?>>developer</option>
                                        <option value="viewer" <?php if($data['action_role'] == 'viewer'){ echo "selected";} ?>>viewer</option>
                                    </select>
                                
                                </div>
                        </div>
                        <div class="mb-4" style="font-size: 15px;">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">User Role</label>
                            <select class="custom-select" id="inlineFormCustomSelect" style="font-size: 18px;">
                                <option value="" selected disabled>--Select Role--</option>
                                <option value="admin" <?php if($data['action_role'] == 'admin'){ echo "selected";} ?>>admin</option>
                                <option value="editor" <?php if($data['action_role'] == 'editor'){ echo "selected";} ?>>editor</option>
                                <option value="developer" <?php if($data['action_role'] == 'developer'){ echo "selected";} ?>>developer</option>
                                <option value="viewer" <?php if($data['action_role'] == 'viewer'){ echo "selected";} ?>>viewer</option>
                            </select>
                        </div>
            
                        <div class="row">
                            <div class="col s12">
                            <label for="">User Image</label>
                            <?php // $img  = $data['user_image'] ?>
                            <input type="file" name="Up_user_image" value="" >
                            
                            <!-- <img style="width:100px;height:auto;padding:10px;" src="upload/<?php // echo $data['user_image']?>"> -->
                        
     
         
                            </div>
                        </div>
                        <input type="hidden" name="update_id" value="<?php echo $data['id']?>">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper">
                             
                                    <input type="submit" class="waves-button-input" name="update_user">
                                </i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>