<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");
$query= "SELECT * FROM session";
$result= mysqli_query($mysqli,$query);
?>
<?php 
if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $id= $_GET['id'];
        $deleteID= "delete from session where session_id='$id'";
        $delSMS= $crud->delete($deleteID);
    } 
    if(isset($delSMS)){
        echo $delSMS; 
    }
}
 ?>
<!--== User Details ==-->
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>ADD SESSION</h4>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Session ID</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                        while($row= mysqli_fetch_assoc($result)){
                            $ID=$row['session_id'];
                            $name=$row['name'];
                                  
                        ?>
                                <tr>
                                    <td><?php echo $ID ?></span> </td>
                                    <td><?php echo $name ?> 
                                    <td>
                                        <a class="ad-st-view bg-info" href="ad-attendence-edit.php?status=edit&&id=<?php echo $ID; ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a onclick="confirm('Are you sure?')" href="?status=delete&&id=<?php echo $ID; ?>" class="ad-st-view bg-danger">Delete</a>
                                    </td>
                                    
                                </tr>
                                <?php  }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>