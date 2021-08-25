<?php
$teachersSQL = "SELECT * FROM `teachers`";
$teachers = $crud->select($teachersSQL);


if(isset($_POST['add_class'])){
    extract($_POST);
    $addclassSQL = "CALL add_class('$class_name', '$class_name_numeric', $teacher_id);";

    $returnSMS = $crud->insert($addclassSQL);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Class Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Class Added Error, Please Try Again!!</h2>";
    }
}

?>

<!--== Seminar Details ==-->
<h1>Add Class</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Class</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Class name</label>
                                <input type="text" value="" class="validate" required name="class_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Class name Numeric</label>
                                <input type="text" value="" class="validate" required name="class_name_numeric">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Teachers ID</label>
                                <select id="inputState" class="form-control" name="teacher_id"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Teachers---</option>
                                    <?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>
                                        <option value="<?php echo $teacher['teachers_id']; ?>"><?php echo $teacher['teachers_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_class"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>