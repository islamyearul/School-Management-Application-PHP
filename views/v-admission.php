<?php 
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

 $courseReq = "SELECT * FROM `courses`";
 $courses =  $crud->select($courseReq);

 if(isset($_POST['admission_request'])){
     extract($_POST);
     $courseRequestQuery = "INSERT INTO `admission_request`( `name`, `phone`, `email`, `city`, `education`, `course`) VALUES ('$req_admsn_name','$req_admsn_phone','$req_admsn_email','$req_admsn_city','$req_admsn_education','$req_admsn_course')";
     $rqSMS = $crud->insert($courseRequestQuery);
     if(isset($rqSMS)){

         echo "<script>alert('Application Send Success')</script>";
         

     }
    
 }
?>

<!--SECTION START-->
<section class="c-all h-quote">
    <div class="container">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="all-title quote-title qu-new">
                <h2>Request an Admission</h2>
                <p>Fusce purus mauris, blandit vitae purus eget, viverra volutpat nibh. Nam in elementum nisi, a
                    placerat nisi. Quisque ullamcorper magna in odio rhoncus semper.Sed nec ultricies velit. Aliquam non
                    massa id enim ultrices aliquet a ac
                    tortor.</p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p class="help-line">Help Line <span>+880 1825 682260</span> </p> <span class="help-arrow pulse"><i
                        class="fa fa-angle-right" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="n-form-com admiss-form">
                <div class="col s12">
                    <form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Full Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your name" required name="req_admsn_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Phone:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" placeholder="Enter your phone number"
                                    required name="req_admsn_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email Id:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="Enter email" required name="req_admsn_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Your City:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your city" name="req_admsn_city">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Education:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter your education" name="req_admsn_education">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Class:</label>
                            <div class="col-sm-9">
                                <select name="req_admsn_course">
                                    <option value="" selected disabled>-- Select Class --</option>
                                    <?php while($course = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $course['name']; ?>"><?php echo $course['name']; ?></option>
                                    <?php } ?>
                                    <!-- <option>Aerospace Engineering</option>
                                    <option>Agriculture Courses</option>
                                    <option>Fashion Technology</option>
                                    <option>Marine Engineering</option>
                                    <option>Building, Construction Management</option>
                                    <option>Web Development</option>
                                    <option>Accountant course</option>
                                    <option>Dot Net Development</option>
                                    <option>Java Development</option>
                                    <option>Chemical Engineering</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="form-group mar-bot-0">
                            <div class="col-sm-offset-3 col-sm-9">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper"><input type="submit" value="APPLY NOW" class="waves-button-input" name="admission_request"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->