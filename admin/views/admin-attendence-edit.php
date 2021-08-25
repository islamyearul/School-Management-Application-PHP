<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];

        $selectattendenceSelectSQL = "SELECT * FROM at_add_attendance WHERE ID = $retID";
        $attendences = $crud->select($selectattendenceSelectSQL);
        $attendence = mysqli_fetch_assoc($attendences);
    }
}

if(isset($_POST['update_attendence'])){
    extract($_POST);
    $updateAt =  "UPDATE `at_add_attendance` SET `Class`='$at_class',`Student_Name`='$at_std_name',`Attendance`='$at_std_id',`Teachers_Comnt`='$at_teacher_note',`Student_Id`='$at_std_id' WHERE ID = $up_id";
    $returnSMS = $crud->update($updateAt);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Attendance Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Attendance Update Error, Please Try Again!!</h2>";
    }
}
?>
<!--== User Details ==-->
<h2>Update Attendance</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Student Attendance</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class </label>
                                <select id="inputState" class="form-control" name="at_class"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($class = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $class['class_id']; ?>" <?php if($class['class_id']==$attendence['Class']){echo "selected";} ?>><?php echo $class['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $attendence['ID']; ?>">
                        <div class="row">
                            <div class="col s6">
                                <label class="">Student Name</label>
                                <input type="text" value="<?php echo $attendence['Student_Name']; ?>" name="at_std_name" class="validate" required>
                            </div>
                        </div>
                        <div class="">

                            <div class="form-group ">
                                <label for="inputState">Attendence</label>
                                <select id="inputState" class="form-control" name="at_Std_Status"
                                    style="font-size: 15px;">
                                    <option value="" disabled selected>Attendance</option>
                                    <option value="Present" <?php if($attendence['Attendance']== 'Present'){ echo "selected";} ?>>Present</option>
                                    <option value="Absent" <?php if($attendence['Attendance']== 'Absent'){ echo "selected";} ?>>Absent</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class=" col s6">
                                <label class="">Teacher's Note</label>
                                <input type="text" value="<?php echo $attendence['Teachers_Comnt']; ?>" name="at_teacher_note" class="validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col s12">
                                <label>Student id</label>
                                <input type="text" value="<?php echo $attendence['Student_Id']; ?>" name="at_std_id" class="validate">
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        name="update_attendence" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>