<?php 
session_start();
if(!isset($_SESSION['adminuser'])){
echo "<script>window.location.href = 'index.php';</script>";	
}
include("header.php");
$type=$_GET['type'];
$dept_id=$_GET['id'];

if($type == 'N')
{
	$title="Department";
}
elseif($type == 'E')
{
	$title="Events";
}
elseif($type == 'Ex')
{
	$title="Excursion";
}
?>

	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?php echo $title;?> <small>Page Contents</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index-2.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#"><?php echo $title;?></a>
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
								<i class="fa fa-gift"></i><?php echo $title;?>
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
						<?php
  
   include './dbConnect.php';
  $query = "SELECT * FROM department WHERE Dept_ID LIKE '$dept_id';";
   $results = $db->query($query);
   $results = $results->fetch();
 
?>

						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="newsedit2.php?id=<?php echo $results['Dept_ID']?>&type=<?php echo $type;?>"  class="form-horizontal"  method="POST" enctype="multipart/form-data"  >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">                               
                            	<div class="form-group">
										<label class="control-label col-md-3"> <?php echo $title;?> Name<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="text" id="Header" name="header" required data-required="1" class="form-control" value="<?php echo $results['Dept_Name'];?>">
										</div>
									</div>
									
                                    <div class="form-group">
										<label class="control-label col-md-3">Overview <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="5"  cols="80" name="Overview" class="jqte-test"  style="width:100%" value=""  required><?php echo $results['Dept_OverView'];?></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Description <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="5"  cols="80" name="Description" class="jqte-test"  style="width:100%" value=""  required><?php echo $results['Dept_Description'];?></textarea>
										</div>
									</div>
									
                        </div>
								
                                </div>
                            <div class="form-actions" style="background: #fff;">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Update</button>
											<button type="button" class="btn default">Cancel</button>
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
<?php include("footer.php");?>