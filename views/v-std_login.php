<?php 
if(isset($_POST['login'])){
    $sms = $studentLogin->Stdlogin($_POST);    
  }
  session_start();
  @$sid = $_SESSION['StdsessionID'];
  @$snm = $_SESSION['StdsessionNAME'];
//   echo $sid . $snm;
?>

<section>
    <div class="row">
        <div class="col-md-12">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
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
                <h4>Login</h4>
                <p>Don't have an account? <a href="std_signup.php" class="text-info">Create your account</a>. It's take
                    less then a minutes</p>
                <form class="s12" action="" method="post">
                    <div>
                        <div class=" s12">
                            <label>User name</label>
                            <input type="text"  class="validate" name="user">
                        </div>
                    </div>
                    <div>
                        <div class=" s12">
                            <label>Password</label>
                            <input type="password" class="validate" name="pass">
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" name="remember">
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" name="login" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                </form>
                <div>
                    <div class="input-field s12"> <a href="std_forget.php">Forgot password</a> | <a
                            href="std_signup.php">Create a new account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>