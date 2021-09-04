if(isset($_FILES['imggal']['name']) and ($_FILES['imggal']['name'] != ""))
		{
			$i="logo";
			$i=preg_replace('/[^A-Za-z0-9\-]/', '', $i);
			$ext = explode('.',$_FILES['imggal']['name']);
			$ext = end($ext);
			$check=strtolower($ext);

			$logo = "assets/images/news/".uniqid(""). '.' .$ext;
			if($check=="png" || $check=="jpeg" || $check=="jpg" || $check=="pdf" || $check=="ppt" || $check=="pptx")
			{
			if(!move_uploaded_file($_FILES['imggal']['tmp_name'], $logo)) 
			 {
			 
				echo "<script>alert('Image upload error');</script>";
				echo "<script>window.location.href = 'news.php?typ=add';</script>";
			 }
			}else{
				echo "<script>alert('Upload only jpg and png images');</script>";
				echo "<script>window.location.href = 'news.php?typ=add';</script>";
				exit;
			}
		}
