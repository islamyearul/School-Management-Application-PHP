<?php 
$event = "SELECT * FROM `add_event`";
$events = $crud->select($event);

if(isset($_GET['status'])){
    if($_GET['status']=='delete'){
        $d_id = $_GET['id'];
        $delDataSQL = "DELETE FROM `add_event` WHERE id = $d_id";
        $delSMS = $crud->delete($delDataSQL);
        if(isset($delSMS)){
            echo $delSMS;
        }
    }
}


?>




<!--== User Details ==-->
<h1>All Events</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Events</h4>
                    <p>All about students like name, student id, phone, email, country, city and more</p>
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>Location</th>
                                    <th>Manage by</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php                                      
                            while($items = mysqli_fetch_assoc($events)){
                            ?>
                                <tr>
                                    <td><?php echo $items['id']; ?></td>
                                    <td><span class="list-img"><img src="upload/<?php echo $items['file']; ?>" alt=""></span></td>
                                    <td><?php echo $items['name']; ?></td>
                                    <td><?php   echo $items['date']; ?> </td>
                                    <td><?php echo $items['location'] ?></td>
                                    <td><?php echo $items['manage_by'] ?></td>
                                    <td>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>
                                        <a href="ad-event-edit.php?status=edit&&id=<?php echo $items['id'] ?>" class="ad-st-view bg-info">Edit</a>
                                        <a onclick="confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $items['id']; ?>" class="ad-st-view bg-danger">Delete</a>
                                   </td>
                                </tr>

                                <?php } ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>