<?php

$showeventsql = "SELECT * FROM `add_event` ORDER BY `date`  DESC LIMIT 3";
$events = $crud->select($showeventsql);

$gallerysql = "SELECT * FROM `image_gallery` ";
$gallery = $crud->select($gallerysql);
$images = array();
while($img = mysqli_fetch_assoc($gallery)){
    if(in_array($img['file'], $images) == false ){
        $images[] = $img['file'];
    }
    if(in_array($img['user_image'], $images) == false ){
        $images[] = $img['user_image'];
    }
    if(in_array($img['seminar_image'], $images) == false ){
        $images[] = $img['seminar_image'];
    }
    if(in_array($img['Photo'], $images) == false ){
        $images[] = $img['Photo'];
    }    
    
}
shuffle($images);
// echo "<pre>";
// print_r($images);
$i = 0;




?>
<section>
    <div class="container com-sp">
        <div class="row">
            <div class="con-title col-md-12">
                <h2>News and <span>Events</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bot-gal h-gal ho-event-mob-bot-sp">
                    <h4>Photo Gallery</h4>
                    <ul>
                        <?php foreach ($images as $item) {   $i++; ?>
                            
                            <li><img class="materialboxed img-thumbnail" data-caption="Education master image captions"
                                src="admin/upload/<?php echo $item ?>" alt="<?php echo $item ?> Not Found" >
                            </li>
                          
                            
                            <?php if($i == 6){ break;}  } ?>

                        <!-- <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/9.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/10.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/11.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/1.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/2.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/3.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/4.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/5.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/6.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/7.jpg" alt="">
                        </li>
                        <li><img class="materialboxed" data-caption="Education master image captions"
                                src="images/ami/8.jpg" alt="">
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot-gal h-vid ho-event-mob-bot-sp">
                    <h4>Video Gallery</h4>
                    <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0"
                        allowfullscreen></iframe>
                    <h5>Maecenas sollicitudin lacinia</h5>
                    <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim
                        leo leo, nec posuere purus finibus vitae.</p>
                    <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum
                        non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot-gal h-blog ho-event">
                    <h4>News & Event</h4>
                    <div class="ho-event">
                        <ul>
                            <?php while($event = mysqli_fetch_assoc($events)){ ?>
                            <li>
                            <div class="ho-ev-date"><span><?php echo $formating->GET_DATE($event['date']); ?></span><span><?php echo $formating->GET_MONTH_YEAR($event['date']); ?></span>
                            </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4><?php echo $event['name']; ?></h4>
                                    </a>
                                    <p><?php echo $event['descriptions']; ?></p>
                                    <span><?php echo $event['time']; ?></span><br>
                                    <span>Location: <?php echo $event['location']; ?></span>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>