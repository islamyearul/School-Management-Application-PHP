<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$con = mysqli_connect("localhost","root","","school_management_system_2021");

if(isset($_POST['submit']))
{
    $class = $_POST['at_class'];
    $name = $_POST['at_std_name'];
    $status = $_POST['at_Std-Status'];
    $tnote = $_POST['at_teacher_note'];
    $stdID = $_POST['at_std_id'];

    $query = "INSERT INTO at_add_attendance (Class, Student_Name, Attendance, Teachers_Comnt, Student_Id ) VALUES ('$class','$name','$status','$tnote', '$stdID')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "Inserted Succesfully";
        
    }
    else
    {
        echo "Not Inserted";
        
    }
}
?>


<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add Student Attendance</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="at_class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['class_id']; ?>"><?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6">
                                <label class="">Student Name</label>
                                <input type="text" value="" name="at_std_name" class="validate" required>
                            </div>
                        </div>
                        <div class="">

                            <div class="form-group ">
                                <label for="inputState">Attendence</label>
                                <select id="inputState" class="form-control" name="at_Std-Status"
                                    style="font-size: 15px;">
                                    <option value="" disabled selected>Attendance</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class=" col s6">
                                <label class="">Teacher's Note</label>
                                <input type="text" value="" name="at_teacher_note" class="validate">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col s12">
                                <label>Student id</label>
                                <input type="text" value="" name="at_std_id" class="validate">
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        name="submit" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>