<?php

$con = mysqli_connect("localhost","root","","school_management_system_2021");

if(isset($_POST['submit']))
{
    $class = $_POST['session_id'];
    $name = $_POST['session_name'];
    

    $query = "INSERT INTO session (session_id, name ) VALUES ('$class','$name')";
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
                    <h4>Add Session</h4>
                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and password and
                        more</p>
                </div>
                <div class="tab-inn">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                        <div class="">
                            <label>Session ID</label>
                                <input type="text" value="" name="session_id" class="validate">

                            <div class="form-group ">
                                
                            </div>

                        </div>
                        <div class="row">
                            <div class="col s6">
                                <label class="">Name</label>
                                <input type="text" value="" name="session_name" class="validate" required>
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