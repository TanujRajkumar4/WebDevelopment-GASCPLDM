<?php 
include("header.php");

?>

	<!-- END SIDEBAR -->
<!-- BEGIN CONTAINER -->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Edit Page Contents 
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Pages</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			
            <div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple" >
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Edit Page Contents
							</div>
							
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form class="form-horizontal"  enctype="multipart/form-data"  >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">   
								<?php    
    include './dbConnect.php';
	$query = "SELECT * FROM page;";
	$results = $db->query($query);
	
	?>  								
   <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
	   <thead>
		   
		   <tr role="row">
			   <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
			   Browser
			   : activate to sort column ascending" style="width: 150px;" >
			   Page Name
			</th>
			<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
			Browser
			: activate to sort column ascending" >
			Page Contents
		</th>
		<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
		Browser
		: activate to sort column ascending" style="width: 40px;">
		Action
	</th>
</tr>
</thead>
<tbody>
									<?php foreach($results as $page):?>
								<tr role="row" class="odd">
								 <td>
									<?php echo $page['page_name'];?>
								</td>
								<td>
									<textarea readonly disabled rows="5" cols="100"> <?php echo $page['page_content'];?> </textarea>
								</td>
                                
								<td><b><a href="pageedit.php?id=<?php echo $page['Page_ID']; ?>">Edit</a></b></br></td>
								
							</tr>							
							<?php endforeach; ?>                            
                            </tbody>
						</table>	                             
                            
								</div>
								
                                </div>
                          </form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				
                </div>
			</div>
            
            
            
            <!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
		
	</div>
	<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->

<?php include("footer.php");
?>
