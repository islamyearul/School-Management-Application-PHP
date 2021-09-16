<?php 
    if(isset($_GET['status'])){
        if($_GET['status']=='updatepass'){
            $id = $_GET['id'];
            if(isset($_POST['updatepass'])){
                $pass = $_POST['up_pass'];

                $upquery = "UPDATE `seminar_registration` SET pass ='$pass', confirm_password = '$pass' WHERE std_reg_id = $id";
                if($crud->update($upquery)){
                    header("Location: std_login.php");
                }else{
                    echo "<script>alert('Please Try Again')</script>";
                }
            }
        }
    }
?>
<section>
    <div class="ad-log-in">
        <div class="ad-log-in-logo">
        </div>
        <div class="ad-log-in-con">
            <div class="" style="font-size: 15px;">
                <h2 class="text-danger" style="font-size: 30px;">Reset Password</h2>
                <!-- <p>Don't have an account? Create your account. It's take less then a minutes</p> -->
                <form class="s12" action="" method="post">
                    <div>
                        <div class="input-field s12">
                            <input type="text" class="validate" name="up_pass">
                            <label>Type New Password</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <i class="waves-effect waves-light log-in-btn waves-input-wrapper"><input type="submit" value="Submit" class="waves-button-input" name="updatepass"></i>
                        </div>
                    </div>
                </form>
                <div>
                    <div class="input-field s12"> <a href="std-login.php">Admin login</a> | <a
                            href="std_signup.php">Create a new
                            account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>