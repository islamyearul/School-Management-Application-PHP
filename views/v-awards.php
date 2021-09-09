<?php
$awardSQL = "SELECT * FROM awards";
$awards = $crud->select($awardSQL);






?>




<!--SECTION START-->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="cor about-sp">

                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2>History and <span> Awards</span></h2>
                        <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus,
                            nec pharetra augue.</p>
                    </div>
                </div>
                <div class="s18-age-event l-info-pack-days">
                    <ul>

                        <?php while($award = mysqli_fetch_assoc($awards)){ ?>
                        <li>
                            <div class="age-eve-com age-eve-1">
                                <img src="images/icon/awa/2.png" alt="">
                            </div>
                            <div class="s17-eve-time">
                                <div class="s17-eve-time-tim">
                                    <span><?php echo $award['time']; ?></span>
                                </div>
                                <div class="s17-eve-time-msg">
                                    <h4><?php echo $award['name']; ?></h4>
                                    <p><?php echo $award['description']; ?></p>
                                    <?php if(!$award['toggle1_title'] == NULL && !$award['toggle1_des'] == NULL){ ?>

                                    <div class="time-hide time-hide-1">
                                        <h5><?php echo $award['toggle1_title']; ?></h5>
                                        <p><?php echo $award['toggle1_des']; ?></p>

                                    </div>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-1-btn">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-11-btn hb-com">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                        <?php if(!$award['toggle2_title'] == NULL && !$award['toggle2_des'] == NULL){ ?>

                                        <div class="time-hide time-hide-1">
                                            <h5><?php echo $award['toggle2_title']; ?></h5>
                                            <p><?php echo $award['toggle2_des']; ?></p>

                                        </div>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-1-btn">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <a href="#!" class="s17-sprit age-dwarr-btn time-hide-11-btn hb-com">
                                            <i class="fa fa-angle-up"></i>
                                        </a>

                                        <?php } ?>
                                    <?php } ?>

                                </div>
                            </div>
                        </li>
                        <?php } ?>



                    </ul>
                </div>
                <div class="ed-about-sec1">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->