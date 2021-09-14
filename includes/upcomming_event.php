<?php

 $showJobannounce = "SELECT * FROM `job_anounce` ORDER BY job_announce_id  DESC LIMIT 5";
 $jobs = $crud->select($showJobannounce);

 $showeventannounce = "SELECT * FROM `add_event` ORDER BY date  DESC LIMIT 5";
 $events = $crud->select($showeventannounce);

 $awardSQL = "SELECT * FROM awards ORDER BY date  DESC LIMIT 5";
$awards = $crud->select($awardSQL);


?>
<section>
    <div class="container com-sp pad-bot-0">
        <div class="row">
            <div class="con-title col-md-12">
                <h2>Upcoming <span>Event</span></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, quibusdam.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- <div class="ho-ex-title">
                    <h4>Upcoming Event</h4>
                </div> -->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Upcoming Event</h4>
                        <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>

                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <?php while($event = mysqli_fetch_assoc($events)){ ?>
                        <li>
                            <div class="ho-ev-date">
                                <span><?php echo $formating->GET_DATE($event['date']); ?></span><span><?php echo $formating->GET_MONTH_YEAR($event['date']); ?></span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4><?php echo $event['name']; ?></h4>
                                </a>
                                <p><?php echo $event['descriptions']; ?></p>
                                <span><?php echo $event['time']; ?></span>
                            </div>
                        </li>
                        <?php } ?>
                        <li>
                            <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Latinoo College Expo 2018</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-2">
                    <div class="ho-lat-ev">
                        <h4>Job Vacants</h4>
                        <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>

                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <?php while($job = mysqli_fetch_assoc($jobs)){ ?>
                        <li>
                            <div class="ho-ev-date">
                                <span><?php echo $formating->GET_DATE($job['job_start_date']); ?></span><span><?php echo $formating->GET_MONTH_YEAR($job['job_start_date']); ?></span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4><?php echo $job['job_post_name']; ?></h4>
                                </a>
                                <p><?php echo $job['job_description']; ?></p>
                                <span>Location: <?php echo $job['job_location']; ?></span>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <!-- <div class="ho-ex-title">
                    <h4>Upcoming Event</h4>
                </div> -->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Alumni</h4>
                        <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>

                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <?php while($award = mysqli_fetch_assoc($awards)){ ?>
                        <li>
                            <div class="ho-ev-date">
                                <span><?php echo $formating->GET_DATE($award['date']); ?></span><span><?php echo $formating->GET_MONTH_YEAR($award['date']); ?></span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="awards.php">
                                    <h4><?php echo $award['name']; ?></h4>
                                </a>
                                <p><?php echo $award['description']; ?></p>
                                <span><?php echo $award['time']; ?></span>
                            </div>
                        </li>
                        <?php } ?>



                        <!-- <li>
                            <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Latinoo College Expo 2018</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </div>
            <!-- <div class="col-md-4">

                <div class="ho-ev-latest ho-ev-latest-bg-3">
                    <div class="ho-lat-ev">
                        <h4>Register & Login</h4>
                        <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-st-login">
                    <ul class="tabs tabs-hom-reg">
                        <li class="tab col s6"><a href="#hom-vijay">Register</a>
                        </li>
                        <li class="tab col s6"><a href="#hom_log">Login</a>
                        </li>
                    </ul>
                    <div id="hom-vijay" class="col s12">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>User name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Email id</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" class="validate">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" class="validate">
                                    <label>Confirm password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="hom_log" class="col s12">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Student user name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>