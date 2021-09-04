<?php
 include('header.php');
 require('dbConnect.php');
 require('department_db.php');
 if(isset($_GET["dept_ID"])){
     $dept_ID = $_GET["dept_ID"];
 }
 ?>

 <div class="pagehding-sec">
 <div class="images-overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="page-heading">
 <h1><?php echo getDeptName($dept_ID);?> </h1>
 </div>
 <div class="breadcrumb-list">
  <ul>
 <li><a href="index.php">Home </a></li>
 <li><a href="department.php?dept_ID=1">Department Details </a></li>
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
 <li class="active"><a data-toggle="tab" href="#overview" aria-expanded="true">Department Overview </a></li>
 <li class=""><a data-toggle="tab" href="#courses" aria-expanded="false">Courses Offered </a></li>
 <li class=""><a data-toggle="tab" href="#faculty" aria-expanded="false">Faculty Members </a></li> 
</ul>
 </div>
 </div>
 <div class="col-md-6">
 <div class="tab-content">
<?php $deptDetails = getDeptDetails($dept_ID);?>

 <!-- Department Overview Pane -->
 <div id="overview" class="tab-pane active">
 <div class="row">
 <div class="col-md-12">
 <div class="course-details">
 <!-- <img src="img/slide1.jpg" alt="" /> -->
 <h2><a href="#"><?php echo $deptDetails["Dept_OverView"]; ?></a></h2> 
 <p><?php echo $deptDetails["Dept_Description"];?></p>
 </div>
 </div>
 </div>
 </div>

 <!-- Courses Offered Pane --> 
 <div id="courses" class="tab-pane">
 <div class="row">
 <div class="col-md-12">
 <div class="course-details">     
 <!-- <img src="img/slide1.jpg" alt="" /> --> 
 <?php 
    $courseInfo = getCourseList($dept_ID);
    foreach($courseInfo as $course): 
 ?>

<div class="col col-md-6"> 
<div class="course-inner">
 <div class="course-thumb">
 <img src="img/chemistry.jpg" alt="" />
 <div class="readmore-button">
   <?php $course_link = "./course.php?Course_ID=".$course["CourseID"]?>
 <a href="<?php echo $course_link;?>">Read More </a>
 </div>
 </div>
 <div class="course-desc">
 <h2><a href="<?php echo $course_link;?>"><?php echo $course["CourseName"];?></a></h2>
 <p><?php echo $course["CourseName"];?></p>
 </div>
 <div class="course-info">
 <ul>
 <li><a href="<?php echo $course_link;?>"><i class="fa fa-user"></i>Full Time </a></li>
 <li><a href="<?php echo $course_link;?>"><i class="fa fa-clock-o"></i>3 Years</a></li>
 </ul>
 </div>
 </div>
 </div>
     
   

<?php endforeach; ?>


 </div>
 </div>
 </div>
 </div>


 <!-- Faculty Members Pane --> 
 <div id="faculty" class="tab-pane">
 <div class="row">
 <div class="col-md-12">
 <div class="course-details">     
 <!-- <img src="img/slide1.jpg" alt="" /> --> 
 <?php $facultyInfo = getFacultyList($dept_ID);$count=1;?>
 <table class="table table-hover table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Qualification</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach($facultyInfo as $faculty): ?>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $faculty["FacultyName"];?></td>
      <td><?php echo $faculty["FacultyDesignation"];?></td>
      <td><?php echo $faculty["FacultyQualification"];?></td>
    </tr>
    <?php $count++;?>
            <?php endforeach;?>

  </tbody>
</table>

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