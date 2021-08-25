<?php
$teachersSQL = "SELECT * FROM `teachers`";
$teachers = $crud->select($teachersSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showClass = "SELECT * FROM `class` WHERE class_id = $retID";
        $classes = $crud->select($showClass);
        $class = mysqli_fetch_assoc($classes);
    }
}



if(isset($_POST['update_class'])){
    extract($_POST);
    $updateClass =  "UPDATE `class` SET `name`='$up_class_name',`name_numeric`='$up_class_name_numeric',`teacher_id`='$up_teacher_id' WHERE class_id = $up_id";
    $returnSMS = $crud->update($updateClass);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Class Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Class Update Error, Please Try Again!!</h2>";
    }
}

?>
<!--== Seminar Details ==-->
<h1>Class Edit</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>edit Class</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Class name</label>
                                <input type="text" value="<?php echo $class['name']; ?>" class="validate" required name="up_class_name">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $class['class_id']; ?>">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Class name Numeric</label>
                                <input type="text" value="<?php echo $class['name_numeric']; ?>" class="validate" required name="up_class_name_numeric">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Teachers ID</label>
                                <select id="inputState" class="form-control" name="up_teacher_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Teachers---</option>
                                    <?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>
                                        <option value="<?php echo $teacher['teachers_id']; ?>" <?php if($teacher['teachers_id']==$class['teacher_id']){ echo "selected";} ?>><?php echo $teacher['teachers_name'];  ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_class"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>