<?php
 @$sid = $_SESSION['StdsessionID'];
 @$snm = $_SESSION['StdsessionNAME'];
//  echo $sid . $snm;

 $stdSQL = "SELECT * FROM `student_registration` WHERE student_id =  $sid";
 $stds = $crud->select($stdSQL);
 $std = mysqli_fetch_assoc($stds);

?>


<div class="col-md-3">
    <div class="pro-user">
        <img src="admin/upload/<?php echo $std['image']; ?>" alt="user">
    </div>
    <div class="pro-user-bio py-3">
        <ul>
            <li>
                <h4><?php echo $std['fullname']; ?></h4>
            </li>
            <li>Student Id: <?php echo $sid ?></li>
            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
    
        </ul>
    </div>
</div>