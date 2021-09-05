<?php
include('header.php');
include('dbConnect.php');
if(isset($_GET['page_id']))
{
$Query = 'SELECT * FROM page where page_id="'.$_GET['page_id'].'"';
$result = $db->query($Query);
$result = $result->fetch();
$title=$result['page_name'];
$desc=$result['page_content'];	
}
else
{
	echo"<script>alert('Broken URL. Select Page from menu'); window.location.href='index.php';</script>";
}

?>

 <div class="pagehding-sec">
 <div class="images-overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="page-heading">
 <h1><?php echo $title;?> </h1>
 </div>
 <div class="breadcrumb-list">
 <ul>
 <li><a href="index.php">Home </a></li>
 <li><a href="#"><?php echo $title;?> </a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>


 <div class="about-us-sec pt-100 pb-100">
 <div class="container">
 <div class="row">
 <div class="col-md-6">
 <div class="about-desc">
 <h1><?php echo $title;?> </h1>
 <p><?php echo $desc;?></p>
 </div>
 </div>
 <div class="col-md-6">
 <div class="vedio-inner">
 <img src="img/about-us.png" alt="" />
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