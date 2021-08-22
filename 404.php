<?php include_once("includes/head.php"); ?>

<body>
    <!--END HEADER SECTION-->
        <!-- MOBILE MENU -->
        <?php include_once("includes/mobile_menu.php"); ?>

        <!--HEADER SECTION-->
        <section>
            <!-- TOP BAR -->
            <?php include_once("includes/top_bar.php"); ?>

            <!-- LOGO AND MENU SECTION -->
            <?php include_once("includes/menu.php"); ?>
            <?php include_once("includes/search_top.php"); ?>

        </section>


			<div class="contentsection contemplete clear">
				<div class="maincontent clear">
					<div class="about">
						<div class="notfound">
							<p><span>404</span> Not Found</p>
						</div>
					</div>
				</div>
				<?php include_once("includes/sidebar.php") ?>
			</div>

    <!-- Footer Section All  Start-->

        <!-- FOOTER COURSE BOOKING -->
        <?php include_once("includes/footer_course_booking.php"); ?>


        <!-- FOOTER -->
        <?php include_once("includes/footer.php"); ?>
        
        <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
        <?php include_once("includes/login_section.php"); ?>

        <!--Right Nav SOCIAL MEDIA SHARE -->
        <?php include_once("includes/social_media_share_right.php"); ?>
    

        <!--Import jQuery before materialize.js-->
        <?php include_once("includes/script.php"); ?>
    <!-- Footer Section All End -->
</body>

</html>