<?php 
include("./header.php");
if(!isset($_SESSION['adminuser'])){
echo "<script>window.location.href = 'index.php';</script>";	
}
	$title="Events";
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
							<form action="eventsadd.php"  class="form-horizontal"  method="POST" enctype="multipart/form-data" >
								
                                <div class="col-md-12" style="background:#fff;">
                                <div class="form-body">                               
                            	<div class="form-group">
										<label class="control-label col-md-3"> <?php echo $title;?> Name<span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="text" id="eve_Name" name="eve_Name" required data-required="1" class="form-control" >
										</div>
									</div>
									 
                                    <div class="form-group">
										<label class="control-label col-md-3"><?php echo $title;?> Date <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="Date" id="eve_date" name="eve_date" required class="form-control" >
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> <?php echo $title;?> Description <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<textarea rows="5"  cols="80" name="Description" style="width:100%" value=""  required></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $title;?> Photos <span class="required" aria-required="true">
										* </span>
										</label>
										<div class="col-md-7">
											<input type="file" name="eve_phot" resquired>
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
									
									SNO								</th>
									
							   <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="
									 Platform(s)
								: activate to sort column ascending" style="width: 200px;">
									Event Title
								</th>

							      <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="
									 CSS grade
								: activate to sort column ascending" style="width: 300px;">
									 Event Date
								</th>
								
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px;">
									 Event Description
								</th>
                                
								
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px;">
									 Event Photo
								</th>


								
								<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px;">
									Action
								</th>
							</tr>
							</thead>
							<tbody>

<?php    
    include './dbConnect.php';
	$query = "SELECT * FROM events;";
    $results = $db->query($query);
    $i=1;
	foreach($results as $dept){
		$gal=$dept['events_photo'];
		$pro_img=explode('..',$gal);
?>
								
							<tr role="row" class="odd">
								<td class="sorting_1"><?php echo $i;?></td>
								<td><?php echo $dept['events_title'];?></td>
                               <td><?php $date_yy=date("d-m-Y",strtotime($dept['events_date'])); echo $date_yy;?></td>
							   <td><?php echo $dept['events_desc'];?></td>
                               <td><img src="<?php echo $pro_img[1];?>" height="150px" width="150px"></td>
                              <td><a href="eventsedit.php?id=<?php echo $dept['events_id'];?>">Edit</a>
								<a href="eventsdelete.php?id=<?php echo $dept['events_id']; ?>" onclick="return myFunction()">Delete</a>
								</td>
							</tr>

<?php 
$i++;
} ?>                            
                            
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
