        
  <?php
  
  // session_start();
   @$name = $_SESSION['sessionNAME'];
   @$role = $_SESSION['sessionRole'];
   @$image = $_SESSION['sessionImage'];

  
  
  ?>      
        
        
        <!--== USER INFO ==-->
         <div class="sb2-12">
             <ul>
                 <li><img src="upload/<?php echo $image; ?>" alt="">
                 </li>
                 <li>
                     <h5><?php echo $name; ?> <span> <?php echo $role; ?>  </span></h5>
                 </li>
                 <li></li>
             </ul>
         </div>
         <!--== LEFT MENU ==-->



         <div class="sb2-13">
             <ul class="collapsible" data-collapsible="accordion">
                 <li><a href="dashboard.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i>
                         Dashboard</a>
                 </li>
                 <!-- <li><a href="ad-setting.php"><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting</a>
                 </li> -->
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                             aria-hidden="true"></i>Courses</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-all-course.php">All Course</a>
                             </li>
                             <li><a href="ad-add-course.php">Add New Course</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                             aria-hidden="true"></i>Classes</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-class-all.php">All Class</a>
                             </li>
                             <li><a href="ad-class-add.php">Add New Class</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                             aria-hidden="true"></i>Class Routine</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-class-routine-all.php">All Class Routine</a>
                             </li>
                             <li><a href="ad-class-routine-add.php">Add New Class Routine</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book"
                             aria-hidden="true"></i>Subjects</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-subject-all.php">All Subjects</a>
                             </li>
                             <li><a href="ad-subject-add.php">Add New Subjects</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user"
                             aria-hidden="true"></i> Users</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-user-all.php">All Users</a>
                             </li>
                             <li><a href="ad-user-add.php">Add New user</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user"
                             aria-hidden="true"></i> Teachers </a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-teacher-all.php">All Teachers</a>
                             </li>
                             <li><a href="ad-teacher-add.php">Add Teachers</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user"
                             aria-hidden="true"></i> Stuff </a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-stuff-all.php">All Stuff</a>
                             </li>
                             <li><a href="ad-stuff-add.php">Add Stuff</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users"
                             aria-hidden="true"></i> Students</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-student-all.php">All Students</a>
                             </li>
                             <li><a href="ad-student-add.php">Add New Students</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users"
                             aria-hidden="true"></i> Students Fees</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-student-fees-check.php">Fees Check</a>
                             <li><a href="ad-student-fees-all.php">All Students Fees</a>
                             </li>
                             <li><a href="ad-student-fees-add.php">Add New Students Fees</a>
                             </li>
                             <li><a href="ad-fees-cat-all.php">ALL Fees Category </a>
                             </li>
                             <li><a href="ad-fees-cat-add.php">Add Fees Category </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users"
                             aria-hidden="true"></i> Students Attendance</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-attendence-all.php">All Attendance</a>
                             </li>
                             <li><a href="ad-attendence-add.php">Add New Attendance</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil"
                             aria-hidden="true"></i> Exam List & time table</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-exam-all.php">All Exams</a></li>
                             <li><a href="ad-exam-add.php">Add New Exam</a></li>
                             <li><a href="ad-exam-trash.php">Trash Exam</a></li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil"
                             aria-hidden="true"></i> Exam Question</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-exam-question-all.php">All Exams Question</a></li>
                             <li><a href="ad-exam-question-add.php">Add New Exam Question</a></li>
                             <!-- <li><a href="ad-exam-group-all.php">All Groups</a></li>
                                    <li><a href="ad-exam-group-add.php">Create New Groups</a></li> -->
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil"
                             aria-hidden="true"></i> Exam Marks</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-exam-marks-all.php">All Marks</a></li>
                             <li><a href="ad-exam-marks-add.php">Add Marks</a></li>

                             <!-- <li><a href="admin-exam-group-all.php">Final Exam</a></li>
                                    <li><a href="admin-exam-group-add.php">Create New Groups</a></li> -->
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil"
                             aria-hidden="true"></i>Result</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-student-result.php">Show Results</a></li>
                         </ul>
                     </div>
                 </li>

                 <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bookmark-o" aria-hidden="true"></i>All Pages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-page-all.html">Pages</a>
                                    </li>
                                    <li><a href="admin-page-add.html">Create New Page</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                 <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-main-menu.html">Main menu</a></li>
									<li><a href="admin-about-menu.html">About menu</a></li>
									<li><a href="admin-admission-menu.html">Admission menu</a></li>
									<li><a href="admin-all-menu.html">All page menu</a></li>
                                </ul>
                            </div>
                        </li> -->
                 <!-- <li><a href="admin-slider.html"><i class="fa fa-image" aria-hidden="true"></i> Slider</a>
                        </li> -->
                 <!-- <li><a href="admin-quick-link.html"><i class="fa fa-external-link-square" aria-hidden="true"></i> Slider quick link</a>
                        </li> -->
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar"
                             aria-hidden="true"></i> Session</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-session-all.php">All Session</a>
                             </li>
                             <li><a href="ad-session-add.php">Create New Session</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar"
                             aria-hidden="true"></i> Grades</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-grade-all.php">All Grades</a>
                             </li>
                             <li><a href="ad-grade-add.php">Create New Grades</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar"
                             aria-hidden="true"></i> Holidays</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-holidays-all.php">All Holidays</a>
                             </li>
                             <li><a href="ad-holidays-add.php">Create New Holidays</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar"
                             aria-hidden="true"></i> Notice</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-notice-all.php">All Notice</a>
                             </li>
                             <li><a href="ad-notice-add.php">Create New Notice</a>
                             </li>
                         </ul>
                     </div>
                 </li>






                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar"
                             aria-hidden="true"></i> Events</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-event-all.php">All Events</a>
                             </li>
                             <li><a href="ad-event-add.php">Create New Events</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bullhorn"
                             aria-hidden="true"></i> Seminar</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-seminar-all.php">All Seminar</a>
                             </li>
                             <li><a href="ad-seminar-add.php">Create New Seminar</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap"
                             aria-hidden="true"></i> Job Vacants</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-job-all.php">All Jobs</a>
                             </li>
                             <li><a href="ad-job-add.php">Create New Job</a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Enquiry</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-all-enquiry.php">All Enquiry</a></li>
									<li><a href="admin-course-enquiry.php">Course Enquiry</a></li>
									<li><a href="admin-admission-enquiry.php">Admission Enquiry</a></li>
									<li><a href="admin-seminar-enquiry.php">Seminar Enquiry</a></li>
									<li><a href="admin-event-enquiry.php">Event Enquiry</a></li>
									<li><a href="admin-common-enquiry.php">Common Enquiry</a></li>
                                </ul>
                            </div>
                        </li> -->
                 <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-cloud-download"
                             aria-hidden="true"></i> Import & Export</a>
                     <div class="collapsible-body left-sub-menu">
                         <ul>
                             <li><a href="ad-export-data.php">Export all datas</a>
                             </li>
                             <li><a href="ad-import-data.php">Import all datas</a>
                             </li>
                         </ul>
                     </div>
                 </li>
             </ul>
         </div>