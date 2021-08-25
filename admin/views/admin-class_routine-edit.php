<?php

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $classRoutineSelectSQL = "SELECT * FROM `class_routine` WHERE id = $retID";
        $c_routines = $crud->select($classRoutineSelectSQL);
        $routine = mysqli_fetch_assoc($c_routines);
    }
}



if(isset($_POST['update_class_routine'])){
    extract($_POST);
    $updateClassRoutine =  "UPDATE `class_routine` SET `day`='$day',`10:00-11:00`='$a',`11:00-12:00`='$b',`12:00-01:00`='$c',`02:00-03:00`='$d',`03:00-04:00`='$e',`04:00-05:00`='$f' WHERE id = $u_id";
    $returnSMS = $crud->update($updateClassRoutine);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Class Routine Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Class Routine Update Error, Please Try Again!!</h2>";
    }
}

?>
<!--== Seminar Details ==-->
<h1>Class Routine Edit</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Class Routine</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" >
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Day</label>
                                <input type="text" value="<?php echo $routine['day']; ?>" class="validate" required name="day">
                            </div>
                        </div>
                        <input type="hidden" name="u_id" value="<?php echo $routine['id']; ?>">
                        <div class="row">
                            <div class=" col s6">
                                <label class="">10:00-11:00</label>
                                <input type="text" value="<?php echo $routine['10:00-11:00']; ?>" class="validate" required name="a">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">11:00-12:00</label>
                                <input type="text" value="<?php echo $routine['11:00-12:00']; ?>" class="validate" required name="b">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">12:00-01:00</label>
                                <input type="text" value="<?php echo $routine['12:00-01:00']; ?>" class="validate" required name="c">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">01:00-02:00</label>
                                <input type="text" value="<?php echo $routine['02:00-03:00']; ?>" class="validate" required name="d">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">02:00-03:00</label>
                                <input type="text" value="<?php echo $routine['03:00-04:00']; ?>" class="validate" required name="e">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">03:00-02:00</label>
                                <input type="text" value="<?php echo $routine['04:00-05:00']; ?>" class="validate" required name="f">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_class_routine"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
