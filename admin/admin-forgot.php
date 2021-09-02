<?php 
include_once("includes/head.php"); 
        include("libraries/database_crud.php");
        $crud = new Database();

    if(isset($_POST['forget'])){
        extract($_POST);
         $takeid = "SELECT * FROM `admin_info` WHERE ad_email = '$f_email'";
        $datas = $crud->select($takeid);
        $data = mysqli_fetch_assoc($datas);
        $idd = $data['id']; 

        @$row = mysqli_num_rows($datas);
        if($row > 0){
            header("Location: admin-reset_password.php?status=updatepass&&id=$idd");
        }else{
            echo "<script>alert('Email Not Matching')</script>";
        }

    }



?>

<body>

   <section>
		<div class="ad-log-main">
			<div class="ad-log-in">
				<div class="ad-log-in-logo">
					<a href="index-2.html"><img src="../assets/images/logo.png" alt=""></a>
				</div>
				<div class="ad-log-in-con">
			<div class="log-in-pop-right">
                    <h4>Forgot Password</h4>
                    <form class="s12" action="" method="POST">

                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate" name="f_email">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <i class="waves-effect waves-light log-in-btn waves-input-wrapper" ><input type="submit" value="Submit" class="waves-button-input" name="forget"></i> </div>
                        </div>
                    </form>
                    <div>
                        <div class="input-field s12"> <a href="index.php">Admin login</a> | <a  href="#">Create a new account</a> 
                        </div>
                    </div>
                </div>
				</div>
			</div>
		</div>
   </section>

 Import jQuery before materialize.js
 <?php include("includes/script.php") ;?>
</body>


</html>

<?php
// $to_email = "kolifarhana84@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: sender\'s email";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

?>