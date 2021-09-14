<?php


$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);


 if(isset($_POST['register'])){
     $ImgName = $_FILES['image']['name'];
     $TmpName = $_FILES['image']['tmp_name'];
     $size = $_FILES['image']['size'];
     extract($_POST);
     $errors = array();
     $sms;
       $n = explode(".", $ImgName);
       $img_name = strtolower(end($n));
       $img_type = ['jpg', 'png', 'jpeg'];

       if(in_array($img_name, $img_type)==false){
        $errors[]= "Image Should Be JPG , PNG Or JPEG";
       } 
        if($size > 100000){
         $errors[] = "Image Size Should be under 100 KB";
       }
       if($pass !== $conf_pass){
        $errors[] = "Password Doesn't Match";
       }
      if(empty($errors)==true){
        $stdReg = "INSERT INTO `student_registration`( `fullname`, `username`, `email`, `phone`, `student_id`, `class`, `pass`, `confirm_password`, `image`) VALUES ('$fullname','$username','$email','$phone','$std_id','$class','$pass','$conf_pass','$ImgName')";


        $RegSTD = $crud->insert($stdReg);
        if(isset($RegSTD)){
            move_uploaded_file($TmpName, "admin/upload/".$ImgName);
            echo "<h3>Registration Success</h3>";
        }
       } else {
        foreach( $errors as $error){
            $sms .= $error . " and ";
            //echo "<h2>$error</h2>" . "<br>";
            // echo "<script>alert($error)</script>"; 
         }
       }
 }
?>
<section> 
        <!-- REGISTER SECTION -->
        <div class="row">
            <div class="col-md-12 pt-5">
            <h1 class="text-center text-danger"><?php if(isset($sms)){ echo '<script type="text/javascript">alert("'.$sms.'");</script>'; } ?></h1>
            <div class="log-in-pop">
           
                <div class="log-in-pop-left mt-5">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
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
                    <a href="#" class="pop-close"></a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12" action="" method="post" enctype="multipart/form-data">
                        <div>
                            <div class="input-field s12">
                                <input type="text" class="validate" name="fullname">
                                <label>Full name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate" name="username">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate" name="email">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="number" class="validate" name="phone">
                                <label>Phone</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="number" class="validate" name="std_id">
                                <label>Student ID</label>
                            </div>
                        </div>

                        <div class="">
                        <div class="form-group ">
                            <label for="">Class</label>
                            <select id="std-class" class="" name="class" style="font-size: 15px;">
                                <option selected disabled>---Choose Class---</option>
                                <?php $classSQL = "SELECT * FROM `class`";
                                        $classes = $crud->select($classSQL); 
                                         while($classe = mysqli_fetch_assoc($classes)){ ?>
                                <option value="<?php echo $classe['name']; ?>">
                                    <?php echo $classe['name']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate" name="pass">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate" name="conf_pass">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class=" s12">
                                <label>Image</label>
                                <input type="file" class="validate" name="image">
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" name="register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                    </form>
                    <div>
                        <div class="input-field s12"> 
                            <a href="std-login.php" >Are you a already member Login<a> 
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
</section>
