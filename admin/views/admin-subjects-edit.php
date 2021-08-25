<?php
$teachersSQL = "SELECT * FROM `teachers`";
$teachers = $crud->select($teachersSQL);

$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $subjectSelectSQL = "SELECT * FROM `subject` WHERE subject_id =  $retID";
        $subjects = $crud->select($subjectSelectSQL);
        $subject = mysqli_fetch_assoc($subjects);

    }
}




if(isset($_POST['update_Subject'])){

        extract($_POST);

        $subjectupdateSQL = "UPDATE `subject` SET `name`='$subject_name',`class_id`='$class_id',`teacher_id`='$teacher_id' WHERE subject_id = $up_id";
        $returnSMS = $crud->select($subjectupdateSQL);
        if(isset($returnSMS)){
            echo "<h2 class='text-success'>Subject Update Success</h2>";
        }else{
            echo "<h2 class='text-danger'>Subject Update Error, Please Try Again!!</h2>";
        }
}

?>
<!--== User Details ==-->
<h2>Subject Update</h2>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Subject Update</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Subject Name</label>
                                <input type="text" value="<?php echo $subject['name']; ?>" class="validate" required name="subject_name">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $subject['subject_id']; ?>">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class ID</label>
                                <select id="inputState" class="form-control" name="class_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($class = mysqli_fetch_assoc($classes)){ ?>
                                        <option value="<?php echo $class['class_id']; ?>" <?php if($class['class_id']==$subject['class_id']){echo "selected";} ?>><?php echo $class['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Teachers ID</label>
                                <select id="inputState" class="form-control" name="teacher_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Teachers---</option>
                                    <?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>

                                        <option value="<?php echo $teacher['teachers_id']; ?>"
                                         <?php if($teacher['teachers_id'] == $subject['class_id']){echo "selected";} ?>>
                                         <?php echo $teacher['teachers_name']; ?>
                                       </option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_Subject"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>