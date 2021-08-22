<?php include_once("includes/head.php"); 
        include("libraries/database_crud.php");
        $crud = new Database();

    if(isset($_GET['status'])){
        if($_GET['status']=='updatepass'){
            $id = $_GET['id'];
            if(isset($_POST['updatepass'])){
                $pass = md5($_POST['up_pass']);

                $upquery = "UPDATE `admin_info` SET ad_pass ='$pass' WHERE id = $id";
                if($crud->update($upquery)){
                    header("Location: index.php");
                }else{
                    echo "<script>alert('Please Try Again')</script>";
                }
            }
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
                                <i class="waves-effect waves-light log-in-btn waves-input-wrapper" ><input type="submit" value="Submit" class="waves-button-input" name="updatepass"></i> </div>
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

 <!--Import jQuery before materialize.js-->
 <?php include("includes/script.php") ;?>
</body>


</html>