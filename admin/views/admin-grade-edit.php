
<?php
if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $showGrade = "SELECT * FROM `grade` WHERE grade_id= $retID";
        $grades = $crud->select($showGrade);
        $grade = mysqli_fetch_assoc($grades);
    }
}



if(isset($_POST['update_grade'])){
    extract($_POST);
    $updateGrade =  "UPDATE `grade` SET `name`='$up_g_name',`grade_point`='$up_j_point',`mark_from`='$up_g_marks_from',`mark_upto`='$up_g_marks_upto',`comment`='$up_g_comment' WHERE grade_id = $up_id ";
    $returnSMS = $crud->update($updateGrade);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Grade Update Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Grade Update Error, Please Try Again!!</h2>";
    }
}

?>
<!--== User Details ==-->
<h1>Grade Update</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4> Grade edit</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Grade Name</label>
                                <input type="text" value="<?php echo $grade['name']; ?>" class="validate" required name="up_g_name">
                            </div>
                        </div>
                        <input type="hidden" name="up_id" value="<?php echo $grade['grade_id']; ?>">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Grade Point</label>
                                <input type="text" value="<?php echo $grade['grade_point']; ?>" class="validate" required name="up_j_point">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks From</label>
                                <input type="number" value="<?php echo $grade['mark_from']; ?>" class="validate" required name="up_g_marks_from"> 
                            </div>
                        </div>
                        <div class="row">
                           <div class=" col s6">
                               <label class="">Marks Upto</label>
                                <input type="number" value="<?php echo $grade['mark_upto']; ?>" class="validate" name="up_g_marks_upto">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Comments</label>
                                <input type="text" value="<?php echo $grade['comment']; ?>" class="validate" required name="up_g_comment">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="update_grade"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>