<?php
    if(isset($_GET['status'])){
        if($_GET['status']=='seminar-registration'){
            $id = $_GET['id'];
            $singleseminar = "SELECT * FROM `seminar` WHERE seminar_id = $id";
            $seminars = $crud->select($singleseminar);
            $seminar =  mysqli_fetch_assoc($seminars);

        }
    }
    if(isset($_POST['apply_seminar'])){
        extract($_POST);
        $registrationSeminar = "INSERT INTO `seminar_registration`(`sm_reg_name`, `sm_reg_phone`, `sm_reg_email`, `sm_reg_address`, `seminar_id`) VALUES ('$sm_reg_name','$sm_reg_phone','$sm_reg_email','$sm_reg_address','$sm_reg_id')";
        $addSMS = $crud->insert($registrationSeminar);
        if($addSMS){
            echo '<script>  alert("Registration Success");   </script>';
        }
    }




?>

<!--SECTION START-->
<section class="c-all p-semi p-event">
    <div class="semi-inn">
        <div class="semi-com semi-left">
            <div class="all-title quote-title qu-new semi-text eve-reg-text">
                <h2><?php echo $seminar['seminar_name']; ?></h2>
                <p><?php echo $seminar['seminar_description']; ?></p>
                <div class="semi-deta eve-deta">
                    <ul>
                        <li>DATE:<span><?php echo $seminar['seminar_date']; ?></span></li>
                        <li>Time:<span><?php echo $formating->GET_TIME($seminar['seminar_time']); ?> </span></li>
                        <!-- <li>Topic:<span>Feature Technology</span></li> -->
                        <li>Location:<span><?php echo $seminar['seminar_location']; ?></span></li>
                    </ul>
                </div>
                <p class="help-line">Join this for free!</p>
            </div>
        </div>
        <div class="semi-com semi-right">
            <div class="n-form-com semi-form">
                <div class="col s12">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Name" required name="sm_reg_name"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="number" class="form-control" placeholder="Phone number" required name="sm_reg_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email id" required name="sm_reg_email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea  class="form-control" placeholder="Address" name="sm_reg_address" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="sm_reg_id" value="<?php echo $seminar['seminar_id']; ?>">
                        <div class="form-group mar-bot-0">
                            <div class="col-md-12">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper">
                                <input type="submit" value="APPLY NOW" class="waves-button-input" name="apply_seminar"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->