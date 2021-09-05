<?php 
session_start();
if(!isset($_SESSION['adminuser'])){
echo "<script>window.location.href = 'index.php';</script>";	
}
include("header.php");

?>
<?php    
    include './dbConnect.php';
	$page_ID=$_GET['id'];
	$query = "SELECT * FROM page WHERE Page_ID = '$page_ID' ;";
	$results = $db->query($query);
	$results=$results->fetch();
	?>
<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo $results['page_name']?> <small>Page Content</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"><?php echo $results['page_name']?></a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet box purple" >
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $results['page_name']?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse" data-original-title="" title="">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
								</a>
								<a href="javascript:;" class="reload" data-original-title="" title="">
								</a>
								<a href="javascript:;" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						

						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="pageedit2.php?id=<?php echo $page_ID?>"  class="form-horizontal"  method="POST" enctype="multipart/form-data"  >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">                               
                            	
									<div class="form-group">
										<label class="control-label col-md-3">Content <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="5"  cols="80" name="content"  style="width:100%" value=""  required><?php echo $results['page_content']?></textarea>
										</div>
									</div>
							   </div>
								
                                </div>
                            <div class="form-actions" style="background: #fff;">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Update</button>
											<button type="button" class="btn default" onclick="window.location.href='./page.php'">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- End: life time stats -->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php
include("footer.php");
?>