<?php
$showSeminar = "SELECT * FROM `seminar`";
$seminars = $crud->select($showSeminar);

if(isset($_GET['status'])){
    if($_GET['status'] == 'delete'){
        $id = $_GET['id'];
        $deleteSeminar = "DELETE FROM `seminar` WHERE seminar_id = $id";
        $delSMS = $crud->delete($deleteSeminar);
    }
    if(isset($delSMS)){
        echo $delSMS;
    }
}

?>

<!--== Seminars Details ==-->
<h1>All Seminars</h1>
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    <h4>All Seminars</h4>

                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Maintainer</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>End Time</th>
                                    <th>Banner</th>
                                    <th hidden></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($seminar = mysqli_fetch_assoc($seminars)){ ?>
                                <tr>
                                    <td><?php echo $seminar['seminar_id']; ?></td>
                                    <td><?php echo $seminar['seminar_name']; ?></td>
                                    <td><?php echo $seminar['seminar_maintainer']; ?></td>
                                    <td><?php echo $seminar['seminar_description']; ?></td>
                                    <td><?php echo $seminar['seminar_location']; ?></td>
                                    <td><?php echo $seminar['seminar_date']; ?></td>
                                    <td><?php echo $seminar['seminar_time']; ?></td>
                                    <td><?php echo $seminar['seminar_end_time']; ?></td>
                                    <td>
                                        <img class="img-thumbnail" src="upload/<?php echo $seminar['seminar_image']; ?>" alt="">
                                    </td>
                                    <td><a href="ad-seminar-edit.php?status=edit&&id=<?php echo $seminar['seminar_id']; ?>" class="ad-st-view bg-success" style="padding: 5px;">Edit</a></td>
                                    <td>
                                    <a onclick="return confirm('Are You Sure??')" href="?status=delete&&id=<?php echo $seminar['seminar_id']; ?>" class="ad-st-view bg-danger" style="padding: 5px;">Delete</a>
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