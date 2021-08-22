<?php
  if(isset($_POST['add_user'])){
   $Res =  $objfun->addUser($_POST);      
 
  }

 if(isset($Res)){
     echo $Res;
 }

?>

 


<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New User</h4>
                    <p>Here you can Add New User And select The user Role</p>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" value="" class="validate" required name="user_name">
                                <label class="">User name</label>
                            </div>
                            <div class="input-field col s6">
                                <input type="email" value="" class="validate" required name="user_eamil"> 
                                <label class="">User Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="password" value="" class="validate" required name="user_password">
                                <label class="">Phone Password</label>
                            </div>

                        </div>
                        <div>
                            <label for="">User Role</label>
                              <select class="form-control form-control-lg" name="user_role">
                                    <option value="" selected disabled>--Select Role--</option>
                                    <option value="admin">admin</option>
                                    <option value="editor">editor</option>
                                    <option value="developer">developer</option>
                                    <option value="viewer">viewer</option>
                               </select>
                        </div>

                        <div class="row">
                            <div class="col s12">
                            <label for="">User Image</label>
                            <input type="file" name="user_image">
     
         
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper">
                                    <input type="submit" class="waves-button-input" name="add_user">
                                </i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>