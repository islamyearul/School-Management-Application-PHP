<?php
$showSeminar = "SELECT * FROM `seminar`";
$seminars = $crud->select($showSeminar);


?>


<?php if($seminars){ ?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>School <span> Seminars</span></h2>
                            <p class="">Asian Ideal School And College</p>
                            <marquee behavior="" direction="" style="font-size: 20px;">Lorem ipsum dolor sit, amet
                                consectetur adipisicing elit. Quod, fugiat quo. Facere magni adipisci modi molestiae
                                dolores, necessitatibus animi quae eveniet ipsa ex cumque corporis error, minus
                                laboriosam quidem laudantium vitae qui culpa eligendi vel porro dolorum. Ducimus quidem,
                                dolore, dolores nemo culpa iure, quos expedita est eos maxime laudantium repellat omnis.
                                Illo dignissimos, sed eius nobis ea deleniti exercitationem natus, adipisci, qui
                                doloribus dolore accusamus explicabo rem at eaque consectetur architecto facilis quis
                                mollitia labore magnam. Cum quis doloremque molestiae cupiditate numquam odio eos
                                aliquam libero unde ipsa dolores, iste architecto laborum neque natus facere quaerat
                                alias nesciunt? Illo.</marquee>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    <?php while($seminar = mysqli_fetch_assoc($seminars)){ 
    
                                            ?>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date">
                                            <span><?php echo $formating->GET_DATE($seminar['seminar_date']); ?></span><span><?php echo $formating->GET_MONTH_YEAR($seminar['seminar_date']); ?></span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="event-register.html">
                                                <h4><?php echo $seminar['seminar_name']; ?></h4>
                                            </a>
                                             <p><?php
                                               echo $formating->contentLimit($seminar['seminar_description'], 100); ?></p>

                                            <span><?php echo $formating->GET_TIME($seminar['seminar_time']); ?> –
                                                <?php echo $formating->GET_TIME($seminar['seminar_end_time']); ?></span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="seminar-register.php?status=seminar-registration&&id=<?php echo $seminar['seminar_id']; ?>">Register</a>
                                            <a href="seminar-details.php?status=view-seminar&&id=<?php echo $seminar['seminar_id']; ?>">Read
                                                more</a>
                                        </div>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                        <!-- Pagination -->
                            <!-- <div class="pg-pagina">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a></li>
                                </ul>

                            </div> -->
                        <!-- Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



<?php }else { header("Location: 404.php"); } ?>