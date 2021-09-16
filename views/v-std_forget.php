<?php
  if(isset($_POST['forget'])){
    // $e = $_POST['f_email'];
    // echo $e;
    extract($_POST);
    $takeid = "SELECT * FROM `seminar_registration` WHERE email = '$f_email'";
    $datas = $crud->select($takeid);
    $data = mysqli_fetch_assoc($datas);
    $idd = $data['std_reg_id']; 

    @$row = mysqli_num_rows($datas);
    if($row > 0){
        header("Location: std-reset_password.php?status=updatepass&&id=$idd");
    }else{
        echo "<script>alert('Email Not Matching')</script>";
    }
}
?>
<section>
    <!-- FORGOT SECTION -->
    <div class="row">
        <div class="col-md-12">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? <a href="std_signup.php">Create your account</a>. It's take less then a
                        minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? <a href="std_signup.php" class="text-info">Create your account</a>. It's
                        take less then a minutes</p>
                    <form class="s12" action="" method="post">
                        <div>
                            <div class="input-field s12">
                                <input type="email" data-ng-model="name3" name="f_email" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" name="forget" class="waves-effect waves-light log-in-btn">
                            </div>
                        </div>
                    </form>
                    <div>
                        <div class="input-field s12"> <a href="std-login.php">Are you a already member ? Login</a> | <a
                                href="std_signup.php">Create a new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>