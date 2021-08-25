
<?php
if(isset($_POST['add_grade'])){
    extract($_POST);

    $addgrade = "CALL add_grade('$g_name','$j_point','$g_marks_from','$g_marks_upto','$g_comment');";

    $returnSMS = $crud->insert($addgrade);
}
if(isset($returnSMS)){
    echo "<h2 class='text-success'>Grade Add Success</h2>";
}else{
    echo "<h2 class='text-danger'>Grade Added Error, Please Try Again!!</h2>";
}

?>
<!--== User Details ==-->
<h1>Grade Add</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>New Grade Add</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Grade Name</label>
                                <input type="text" value="" class="validate" required name="g_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Grade Point</label>
                                <input type="text" value="" class="validate" required name="j_point">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Marks From</label>
                                <input type="number" value="" class="validate" required name="g_marks_from"> 
                            </div>
                        </div>
                        <div class="row">
                           <div class=" col s6">
                               <label class="">Marks Upto</label>
                                <input type="number" value="" class="validate" name="g_marks_upto">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Comments</label>
                                <input type="text" value="" class="validate" required name="g_comment">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_grade"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>