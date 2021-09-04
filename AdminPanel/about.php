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
			About us <small>Page Content</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index-2.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">About</a>
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
								<i class="fa fa-gift"></i>About
							</div>
							
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form class="form-horizontal"  enctype="multipart/form-data"  >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">   
<?php    
    include 'db.php';
	$result=mysqli_query($con, "SELECT * FROM pages WHERE page_id = '1'");
	while($row=mysqli_fetch_array($result)){
?> 								
   <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
							<thead>
							
							<tr role="row">
                           <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Browser
									: activate to sort column ascending" >
									 Page Contents
								</th>
								</tr>
								</thead>
								<tbody>
								<tr role="row" class="odd">
								 <td>
									<?php echo $row['page_content'];?>
								</td>
								</tr>
								<tr role="row" class="odd">
                                <td>
								<b>	Action</b>
								</td>
								<td><b><a href="aboutedit.php?id=<?php echo $row['page_id']; ?>">Edit</a></b></br></td>
								</tr>
								<?php } ?>                            
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
