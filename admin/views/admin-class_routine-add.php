
<?php
if(isset($_POST['add_class_routine'])){
    extract($_POST);
    $addclassroutineSQL = "INSERT INTO `class_routine`( `day`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `02:00-03:00`, `03:00-04:00`, `04:00-05:00`) VALUES ('$day','$a','$b','$c','$d','$e','$f')";

    $returnSMS = $crud->insert($addclassroutineSQL);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Class Routine Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Class Routine Added Error, Please Try Again!!</h2>";
    }
}

?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Add New Class Routine</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post" >
                        <div class="row">
                            <div class=" col s6">
                                <label class="">Day</label>
                                <input type="text" value="" class="validate" required name="day">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">10:00-11:00</label>
                                <input type="text" value="" class="validate" required name="a">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">11:00-12:00</label>
                                <input type="text" value="" class="validate" required name="b">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">12:00-01:00</label>
                                <input type="text" value="" class="validate" required name="c">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">01:00-02:00</label>
                                <input type="text" value="" class="validate" required name="d">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">02:00-03:00</label>
                                <input type="text" value="" class="validate" required name="e">
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col s6">
                                <label class="">03:00-02:00</label>
                                <input type="text" value="" class="validate" required name="f">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit" class="waves-button-input" name="add_class_routine"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
