<?php
include("../dbConnect.php");

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Designation=addslashes($_POST['Designation']);
$Dept_ID=addslashes($_POST['Dept_ID']);
$FacultyQualification=addslashes($_POST['Qualification']);
$Faculty_ID=$_GET['ID'];


?>










<!-- Faculty IMU Section -->
<?php
$target_dir = "../img/faculty_IM/";
$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
	  //echo "<script>alert('File is an image - " . $check["mime"] . ".')</script>";
	  $uploadOk = 1;
	} else {
		echo "<script>alert('File is not an image.')</script>";
		$uploadOk = 0;
		echo "<script>window.location.href='faculty.php'</script>";
	}
}

// Check if file already exists
if (file_exists($target_file)) {
	echo "<script>alert('Sorry, file already exists.')</script>";
	$uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "<script>alert('Sorry, your file is too large.')</script>";
	$uploadOk = 0;
	echo "<script>window.location.href='faculty.php'</script>";
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
	echo "<script>alert('Sorry, only JPG, JPEG & PNG files are allowed.')</script>";
	$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "<script>alert('Sorry, your file was not uploaded.')</script>";
	
	// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		echo "<script>window.location.href='faculty.php'</script>";
		//echo $target_file;

	} else {
		echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
		echo "<script>window.location.href='faculty.php'</script>";
	}
}
$target_file1=substr($target_file,1);
$query = "INSERT INTO Faculty (FacultyID,FacultyName,FacultyOverview,FacultyDesignation,Dept_ID,FacultyQualification,FacultyPhotoURL) VALUES ('$Faculty_ID','$Name','$Overview','$Designation','$Dept_ID','$FacultyQualification','$target_file1')";
$result = $db->exec($query);
echo $result;
 if($result){
				echo "<script>
						alert('Faculty Data Inserted Successfully');
						window.location.href = 'Faculty.php';
				</script>";
			}else{
				echo "<script>alert('Faculty Data NOT Inserted');window.location.href = 'Faculty.php';</script>";
			}
?>