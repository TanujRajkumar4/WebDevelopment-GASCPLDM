<?php
 include('header.php');
 if(isset($_POST['submit']))
{
	if($_POST['Con_name'] != "" &&$_POST['Las_name'] != "" && $_POST['Con_email'] !="" && $_POST['Con_ph'] != "" && $_POST['Con_msg'] != "")
	{
	$fname=$_POST['Con_name'];
	$lname=$_POST['Las_name'];
	$email_id=$_POST['Con_email'];
	$amt=$_POST['Con_msg'];
	$phn=$_POST['Con_ph'];
	$to = "induvips@gmail.com";
	$subject = "Donation / Contribution Details";
	$message="<style type='text/css'>
	p,td{font-family:Verdana;font-size:12px;font-color:black;}
	strong{font-family:Verdana;font-size:12px;font-color:black; font-weight:bold}
	</style>";
	$message.="<strong>Dear Admin,</strong> <br>
	<p>Kindly find the below details for accessing the Contributor. <br/>	
	<p><b>PERSONAL DETAILS</b></p>
	<p><b>Fullname :</b> $name </p>
	<p><b>Email :</b> $email_id </p>
	<p><b>Phone Number: </b> $phn </p>
	<p><b>Amount :</b> $amt </p>
	<p><b>Address :</b> $add </p>
	<p><b>Comments :</b> $cmmts </p>
	";	
	$message.="<p><i>This email is  system generated; please do not reply to this email.</i></p>";
	$headers='From: www.gascpldm.ac.in'."\r\n".
	'Content-type: text/html; charset=iso-8859-1\r\n'.
	'Reply-To: webmaster@example.com'."\r\n".
	'X-Mailer: PHP/' . phpversion();
	if(mail($to,$subject,$message,$headers))
		{
			echo "<script>alert('Your Responses Recorded. Thank you');window.location.href='contact.php';</script>";
		}
	else
		{
			echo "<script>alert('Please Try after Sometimes!');window.location.href='contact.php';</script>";
		}				
	}
	else
	{
		echo "<script>alert('Please Fill all the fields!');window.location.href='contact.php';</script>";
	}
}
 ?>
<div class="pagehding-sec">
 <div class="images-overlay"></div>
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="page-heading">
 <h1>contact us </h1>
 </div>
 <div class="breadcrumb-list">
  <ul>
 <li><a href="index.php">Home </a></li>
 <li><a href="#">contact us </a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>


 <div class="contact-page-sec pt-100 pb-100">
 <div class="container">
 <div class="row">
 <div class="col-md-8">
 <div class="contact-page-map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.067089369646!2d77.2843894!3d10.9998004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x494fd243cf8dd43e!2sGOVERNMENT%20ARTS%20AND%20SCIENCE%20COLLEGE%2CPALLADAM.!5e0!3m2!1sen!2sin!4v1630838646588!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
 </div>
 </div>
 <div class="col-md-4">
 <div class="contact-info">
 <div class="contact-info-item">
 <div class="contact-info-icon">
 <i class="fa fa-map-marker"></i>
 </div>
 <div class="contact-info-text">
 <h2>address </h2>
 <span>Californiya , United State </span>
 </div>
 </div>
 </div>
 <div class="contact-info">
 <div class="contact-info-item">
 <div class="contact-info-icon">
 <i class="fa fa-envelope"></i>
 </div>
 <div class="contact-info-text">
 <h2>e-mail </h2>
 <span><a href="" class="__cf_email__">principalpalladam@gmail.com </a></span>
 </div>
 </div>
 </div>
 <div class="contact-info">
 <div class="contact-info-item">
 <div class="contact-info-icon">
 <i class="fa fa-clock-o"></i>
 </div>
 <div class="contact-info-text">
 <h2>office time </h2>
 <span>Mon - Thu 9:00 __ - 4.00 pm </span>
 <span>Thu - Mon 10.00 __ - 5.00 pm </span>
 <span>Mon Day Office Holiday </span>
 </div>
 </div>
 </div>
 </div>
 <div class="col-md-12">
 <div class="contact-page-form">
 <form method="POST" action="contact.php">
 <h2>Send your message </h2>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <div class="single-input-field">
 <input type="text" placeholder="First Name" name="Con_name"/>
 </div>
 </div>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <div class="single-input-field">
 <input type="text" placeholder="Last Name" name="Las_name"/>
 </div>
 </div>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <div class="single-input-field">
 <input type="text" placeholder="Phone Number" name="Con_ph"/>
 </div>
 </div>
 <div class="col-md-6 col-sm-6 col-xs-12">
 <div class="single-input-field">
 <input type="email" placeholder="E-mail" name="Con_email"/>
 </div>
 </div>
 <div class="col-md-12 message-input">
 <div class="single-input-field">
 <textarea placeholder="Write Your Message" name="Con_msg"></textarea>
 </div>
 </div>
 <div class="single-input-fieldsbtn">
 <input type="submit" name="submit" value="Send Now" />
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
</script><script src="js/jquery-2.2.4.min.js"></script>
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
