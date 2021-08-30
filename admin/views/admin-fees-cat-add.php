<?php
if(isset($_POST['add_feesCat'])){
    extract($_POST);
    $addfeescat = "CALL add_fees_cat('$feescat_name');";
    $returnSMS = $crud->insert($addfeescat);
    if(isset($returnSMS)){
        echo "<h2 class='text-success'>Fees Category Add Success</h2>";
    }else{
        echo "<h2 class='text-danger'>Fees Category Added Error, Please Try Again!!</h2>";
    }
}
?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp admin-form">
                <div class="inn-title">
                    <h4>Subject Add</h4>
                </div>
                <div class="tab-inn">
                    <form action="" method="post">
                        <div class="row">
                            <div class=" col s12">
                                <label class="">Fees Category Name</label>
                                <input type="text" value="" class="validate" required name="feescat_name">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="waves-effect waves-light btn-large waves-input-wrapper"><input type="submit"
                                        class="waves-button-input" name="add_feesCat"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>