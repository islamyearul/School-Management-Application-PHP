
<?php

session_start();
$sid = $_SESSION['StdsessionID'];
$snm = $_SESSION['StdsessionNAME'];

$stdSQL = "SELECT * FROM `student_registration` WHERE std_reg_id =   $sid";
$stds = $crud->select($stdSQL);
$std = mysqli_fetch_assoc($stds);
?>
<!--SECTION START-->
<section>
<?php include("includes/std-menu.php") ?>
    <div class="stu-db">
        <div class="container pg-inn">
            <?php include("includes/std-pro.php") ?>
            <div class="col-md-9">
                <div class="udb">

                    <div class="udb-sec udb-prof">
                        <h4><img src="images/icon/db1.png" alt="" /> My Profile</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed
                            to using 'Content here, content here', making it look like readable English.</p>
                        <div class="sdb-tabl-com sdb-pro-table">
                            <table class="responsive-table bordered">
                                <tbody>
                                    <tr>
                                        <td>Student Name</td>
                                        <td>:</td>
                                        <td>Sam Anderson</td>
                                    </tr>
                                    <tr>
                                        <td>Student Id</td>
                                        <td>:</td>
                                        <td>ST17241</td>
                                    </tr>
                                    <tr>
                                        <td>Eamil</td>
                                        <td>:</td>
                                        <td>sam_anderson@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td>+01 4561 3214</td>
                                    </tr>
                                    <tr>
                                        <td>Date of birth</td>
                                        <td>:</td>
                                        <td>03 Jun 1990</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>:</td>
                                        <td><span class="db-done">Active</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="sdb-bot-edit">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters</p>
                                <a href="#" class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit"><i
                                        class="fa fa-pencil"></i> Edit my profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->


