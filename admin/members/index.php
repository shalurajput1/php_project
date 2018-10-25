<?php
$name = "members";
$roll = "admin";
$path = "../../";
$active = 7;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$fb_url = $_POST['fb_url'];
	$twitter_url = $_POST['twitter_url'];
	$result = mysqli_query($con , "INSERT INTO team (name, designation, fb_url, twitter_url)
							 VALUES ('".$name."','".$designation."','".$fb_url."','".$twitter_url."')");
	$member_id = mysqli_query($con , "SELECT * FROM team ORDER BY id DESC LIMIT 1");
	$show = mysqli_fetch_assoc($member_id);
	$id = $show['id'];
	$upload = "images/";
	$location = $upload.md5($id).".jpg";
	$tempname = $_FILES['file']['tmp_name'];
    move_uploaded_file($tempname,$location);
}
?>
  <!--PAGE CONTENT -->
 <div id="content">          
    <div class="inner">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Team Member</h1>
                </div>
            </div>
            <div class="row">
		<div class="col-lg-12">
		<div class="box dark">
		    <header>
		        <div class="icons"><i class="icon-edit"></i></div>
		        <h5>Add Member</h5>
		        
		    </header>
		    <div id="div-1" class="accordion-body collapse in body">
		        <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

		        	<div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Name</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="name" placeholder="Enter Name" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Designation</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="designation" placeholder="Enter Designation" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Facebook URL</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="fb_url" placeholder="Add Facebook URL" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
                     	<label class="control-label col-lg-4">Twitter URL</label>

                            <div class="col-lg-8">
		                    <input type="text" id="text1" name="twitter_url" placeholder="Add Twitter URL" class="form-control" />
		                </div>
                    </div>


		            <div class="form-group">
                                            <label class="control-label col-lg-4">Profile Photo (245*245)</label>
                                            <div class="col-lg-8">
                                            	<input name="file" type="file" />
                                            </div>
                    </div>

		            
		            <div class="form-group">
		                <label for="text4" class="control-label col-lg-4"></label>
		                <div class="col-lg-8">
		                    <button class="btn text-muted text-center btn-danger" name="submit" type="submit">Add Article</button>
		                </div>
		            </div>

		        </form>
		    </div>
		</div>
	</div>
</div>
<?php include '../../resources/template/footer.php'; ?>