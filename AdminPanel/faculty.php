<?php 
// include("./header.php");
include("header.php");
include('./dbConnect.php');
session_start();
if(!isset($_SESSION['adminuser'])){
echo "<script>window.location.href = 'index.php';</script>";	
}
	$title="Faculty";
?>

	<!-- BEGIN CONTENT -->
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
						<a href="dashboard.php">Home</a>
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
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="Facultyadd.php?ID=4"  class="form-horizontal"  method="POST" enctype="multipart/form-data"  >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">                               
                            	<div class="form-group">
										<label class="control-label col-md-3"> <?php echo $title;?> Name<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="text" id="Header" name="Name" required data-required="1" class="form-control" >
										</div>
									</div>
									 
                                    <div class="form-group">
										<label class="control-label col-md-3">Overview <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="5"  cols="80" name="Overview" style="width:100%" value=""  required></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Designation <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="1"  cols="80" name="Designation" style="width:100%" value=""  required></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Qualification <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="1"  cols="80" name="Qualification" style="width:100%" value=""  required></textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> Department ID<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="number" id="Dept_ID" name="Dept_ID" required data-required="1" class="form-control" >
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Faculty Image<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="file" name="fileToUpload" id="fileToUpload" required class="form-control">
										</div>
									</div>

									
									 
                        </div>
								
                                </div>
                            <div class="form-actions" style="background: #fff;">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- End: life time stats -->
					
					 <div class="portlet box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php echo $title;?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="reload" data-original-title="" title="">
								</a>
								<a href="javascript:;" class="remove" data-original-title="" title="">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							
                                
                                
                                
                                <div class=""><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
							<thead>
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
									 Rendering engine
								: activate to sort column ascending" style="width: 100px;">
									
									Faculty ID
								</th>
									
							   <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 200px;">
									Faculty Name
								</th>

							      <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="
									 CSS grade
								: activate to sort column ascending" style="width: 300px;">
									 Faculty Overview
								</th>
								
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px;">
									 Faculty Designation
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px;">
									 Faculty Qualification
								</th>
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
									 Actions
								</th>

							</tr>
							</thead>
							<tbody>

<?php    
    include './dbConnect.php';
	$query = "SELECT * FROM faculty;";
	$results = $db->query($query);
	$count=0;
	foreach($results as $faculty){
?>                            
							<tr role="row" class="odd">
								<td class="sorting_1"><?php echo $faculty['FacultyID'];?></td>
								<td><?php echo $faculty['FacultyName'];?></td>
							   <td><?php echo $faculty['FacultyOverview'];?></td>
							   <td><?php echo $faculty['FacultyDesignation'];?></td>
							   <td><?php echo $faculty['FacultyQualification'];?></td>
                              <td><a href="Facultyedit.php?id=<?php echo $faculty['FacultyID'];?>">Edit</a>
								<a href="Facultydelete.php?id=<?php echo $faculty['FacultyID']; ?>" onclick="return myFunction()">Delete</a>
								</td>
							</tr>


<?php $count++; } $count++;?>                            
                            
                            </tbody>
							</table></div>
                            
                          
						</div>
					</div>
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

<!-- END BODY -->
</body>
</html>