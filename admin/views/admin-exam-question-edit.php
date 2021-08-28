<?php
$classSQL = "SELECT * FROM `class`";
$classes = $crud->select($classSQL);

$teachersSQL = "SELECT * FROM `teachers`";
$teachers = $crud->select($teachersSQL);

$sessionSQL = "SELECT * FROM `session`";
$sessions = $crud->select($sessionSQL);

$examSQL = "SELECT * FROM `exam_all`";
$exams = $crud->select($examSQL);

$subjectSQL = "SELECT * FROM `subject`";
$subjects = $crud->select($subjectSQL);

if(isset($_GET['status'])){
    if($_GET['status'] == 'edit'){
        $retID = $_GET['id'];
        $examqsSQL = "SELECT * FROM `examquestion` WHERE examquestion_id = $retID";
        $examqs = $crud->select($examqsSQL);
        $examq = mysqli_fetch_assoc($examqs);
    }
}


if(isset($_POST['update_exam_question'])){
    $errors= array();
    extract($_POST);
    $imgname = $_FILES['q_file']['name'];
    $tmpName = $_FILES['q_file']['tmp_name'];
    $file_size = $_FILES['q_file']['size'];
    $type = $_FILES['q_file']['type'];
    
    $arr = explode('.',$imgname);
    $file_ext = strtolower(end($arr));
    
    $extensions= array("pdf","doc","docx");
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a pdf or doc or docx file.";
     }
     
     if($file_size > 900000){
        $errors[]='File size must be 900 KB';
     }
     
     if(empty($errors)==true){
        $addexamQSQL = "INSERT INTO `examquestion`( `subject`, `exam`, `class`, `teachers`, `session`, `title`, `description`, `file_name`, `file_type`, `timestamp`, `status`) VALUES ('$','$','$','$','$','$','$','$','$', now(),'$')";
        $addexamQSQL = "UPDATE `examquestion` SET `subject`='$subjext',`exam`='$exam',`class`='$class',`teachers`='$teacher',`session`='$session',`title`='$q_title',`description`='$q_des',`file_name`='$imgname',`file_type`='$type',`timestamp`= now(),`status`='$q_status' WHERE examquestion_id = $up_id";
        $returnSMS = $crud->insert($addexamQSQL);
        if(isset($returnSMS)){
            move_uploaded_file($tmpName,"upload/".$imgname);
            echo "<h2 class='text-success'>Exam Question Update Success</h2>";
        }
        else
        {
            foreach ($errors as $item) {
                echo "<h2 class='text-danger'> $item </h2>";
                
                
             }
        }
     }
 

}

?>

<!--== Seminar Details ==-->
<h1>Update Exam Question</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Update Exam Question</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="up_id" value="<?php echo $examq['examquestion_id']; ?>">
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Subject</label>
                                <select id="inputState" class="form-control" name="subjext" style="font-size: 15px;">
                                    <option selected disabled>---Choose Subject---</option>
                                    <?php while($subject = mysqli_fetch_assoc($subjects)){ ?>
                                    <option value="<?php echo $subject['subject_id']; ?>"
                                    <?php if($subject['subject_id']==$examq['subject']){ echo "selected";} ?>
                                    ><?php echo $subject['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Exam name</label>
                                <select id="inputState" class="form-control" name="exam" style="font-size: 15px;">
                                    <option selected disabled>---Choose Exam---</option>
                                    <?php while($exam = mysqli_fetch_assoc($exams)){ ?>
                                    <option value="<?php echo $exam['exam_id']; ?>" 
                                    <?php if($exam['exam_id']==$examq['exam']){ echo "selected";} ?>
                                    ><?php echo $exam['exam_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Class</label>
                                <select id="inputState" class="form-control" name="class" style="font-size: 15px;">
                                    <option selected disabled>---Choose Class---</option>
                                    <?php while($classe = mysqli_fetch_assoc($classes)){ ?>
                                    <option value="<?php echo $classe['class_id']; ?>" 
                                    <?php if($classe['class_id']==$examq['class']){ echo "selected";} ?>
                                    ><?php echo $classe['name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Teachers ID</label>
                                <select id="inputState" class="form-control" name="teacher"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Teachers---</option>
                                    <?php while($teacher = mysqli_fetch_assoc($teachers)){ ?>
                                        <option value="<?php echo $teacher['teachers_id']; ?>" 
                                        <?php if($teacher['teachers_id']==$examq['teachers']){ echo "selected";} ?>
                                        ><?php echo $teacher['teachers_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Session</label>
                                <select id="inputState" class="form-control" name="session"
                                    style="font-size: 15px;">
                                    <option selected disabled>---Choose Session---</option>
                                    <?php while($session = mysqli_fetch_assoc($sessions)){ ?>
                                        <option value="<?php echo $session['session_id']; ?>" 
                                        <?php if($session['session_id']==$examq['session']){ echo "selected";} ?>
                                        ><?php echo $session['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Title</label>
                                <input type="text" value="<?php echo $examq['title']; ?>" class="validate" required name="q_title">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Description</label>
                                <input type="text" value="<?php echo $examq['description']; ?>" class="validate" required name="q_des">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group ">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="q_status">
                                    <option selected disabled>Choose...</option>
                                    <option value="Approved" <?php if($examq['status']=='Approved'){ echo "selected";} ?>>Approved</option>
                                    <option value="Inapprove" <?php if($examq['status']=='Inapprove'){ echo "selected";} ?>>Inapprove</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field col s12">
                                <div class="btn admin-upload-btn">
                                    <span>question File</span>
                                    <input type="file" name="q_file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Question File">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="update_exam_question"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>