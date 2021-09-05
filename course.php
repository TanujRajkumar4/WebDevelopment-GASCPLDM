<?php
include('header.php');
require('dbConnect.php');
require('course_db.php');
if(isset($_GET["Course_ID"])){
    $Course_ID = $_GET["Course_ID"];
}
 ?>

 <div class="pagehding-sec">
 <div class="images-overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="page-heading">
            <h1>
                <?php 
                        $course_name=getCourseName($Course_ID); 
                        echo $course_name;
                        $course_Details=getCourseDetails($Course_ID);
                ?>
            </h1>
 </div>
 <div class="breadcrumb-list">
  <ul>
 <li><a href="index.php">Home </a></li>
 <li><a href="#">Course Details </a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>


 <div class="course-details-page pt-100 pb-70">
 <div class="container">
 <div class="row">
 <div class="col-md-3">
 <div class="course-tab">
 <ul class="service-tab">
 <li class="active"><a data-toggle="tab" href="#overview" aria-expanded="true">Course Overview </a></li>
 <li class=""><a data-toggle="tab" href="#curriculum" aria-expanded="false">Course Curriculum </a></li>
 </ul>
 </div>
 </div>
 <div class="col-md-6">
 <div class="tab-content">

 <div id="overview" class="tab-pane active">
 <div class="row">
 <div class="col-md-12">
 <div class="course-details">
 <img src="img/slide1.jpg" alt="" />
 <h2><a href="#"> <?php echo $course_name;?> </a></h2>

 <p><?php echo $course_Details['CourseOverview'];?></p>
 
 <p><?php echo $course_Details['CourseDescription'];?></p>
 </div>
 </div>
 </div>
 </div>


 <div id="curriculum" class="tab-pane">
 <div class="row">
 <div class="col-md-12">
 <div class="faq-sec">
 <div class="panel-group" id="accordion" role="tablist">
 <div class="panel">
 <div class="panel-heading" role="tab" id="titleOne">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <?php echo $course_name;?>     
</a>
 </h4>
 </div>
 <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="titleOne">
 <div class="panel-content">
 <p><?php echo $course_Details['CourseOverview'];?> </p>
 <div class="coruse-lesson">
 <div class="coruse-left-text">
     <span><a href="<?php echo $course_Details['CourseCurriculumURL'];?>">
 <span class="coruse-left-icon">
 <i class="fa fa-file-pdf-o"></i>
 </span>
 <span class="coruse-left-title">
 <?php echo $course_name;?>
 </span>
 </div>
 <div class="coruse-center-text">
     Course Curriculum
    </span>
</div>
</a>
 <!-- <div class="coruse-right-text">
 <span class="coruse-right-icon">
 <i class="fa fa-clock-o"></i>
 </span>
 <span class="coruse-right-time">
35 Minite
 </span>
 </div> -->
 </div>
 <!-- <div class="coruse-lesson">
 <div class="coruse-left-text">
 <span class="coruse-left-icon">
 <i class="fa fa-file-text"></i>
 </span>
 <span class="coruse-left-title">
Lecture 1.2
 </span>
 </div>
 <div class="coruse-center-text">
 <span>
Lesson With File text
 </span>
 </div>
 <div class="coruse-right-text">
 <span class="coruse-right-icon">
 <i class="fa fa-clock-o"></i>
 </span>
 <span class="coruse-right-time">
45 Minite
 </span>
 </div>
 </div> -->
 <!-- <div class="coruse-lesson">
 <div class="coruse-left-text">
 <span class="coruse-left-icon">
 <i class="fa fa-play-circle"></i>
 </span>
 <span class="coruse-left-title">
Lecture 1.3
 </span>
 </div>
 <div class="coruse-center-text">
 <span>
Lesson With Vedio File
 </span>
 </div>
 <div class="coruse-right-text">
 <span class="coruse-right-icon">
 <i class="fa fa-clock-o"></i>
 </span>
 <span class="coruse-right-time">
45 Minite
 </span>
 </div>
 </div> -->
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="col-md-3">
 <div class="event-details-info">
 <h2>Register Now </h2>
 <ul>
 <li>Name: <span><input type="text" name="std_name"> </span></li>
 <li>Phone Number: <span><input type="text" name="std_phone"> </span></li>
 <li>Preferred Course: <span><input type="text" name="course"> </span></li>
 <li>Qualification: <span><input type="text" name="qualification"> </span></li>
 <li>Location: <span><input type="text" name="std_loc"></span></li>
 </ul>
 <div class="single-input-fieldsbtn">
 <input type="submit" value="Register"/>
 </div>
 </div>
 </div>

 </div>
 </div>
 </div>
<script src="js/jquery-2.2.4.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/owl.animate.js"></script>
 <script src="js/jquery.scrollUp.min.js"></script>
 <script src="js/jquery.counterup.min.js"></script>
 <script src="js/modernizr.min.js"></script>
 <script src="js/waypoints.min.js"></script>
 <script src="js/jquery.meanmenu.min.js"></script>
 <script src="js/imagesloaded.pkgd.min.js"></script>
 <script src="js/custom.js"></script>
 <?php
 include('footer.php');
 ?>