<?php
$name = "gallery";
$roll = "admin";
$path = "../../";
$active = 7;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
if(isset($_POST['submit']))
{
	$content = $_POST['content'];
	$sub_content = $_POST['sub_content'];
	$result = mysqli_query($con , "INSERT INTO gallery (content, sub_content) VALUES ('".$content."','".$sub_content."')");
	$gallery_id = mysqli_query($con , "SELECT * FROM gallery ORDER BY id DESC LIMIT 1");
	$show = mysqli_fetch_assoc($gallery_id);
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
                    <h1 class="page-header">Add Photos to Gallery</h1>
                </div>
            </div>
            <div class="row">
		<div class="col-lg-12">
		<div class="box dark">
		    <header>
		        <div class="icons"><i class="icon-edit"></i></div>
		        <h5>Add Images</h5>
		        
		    </header>
		    <div id="div-1" class="accordion-body collapse in body">
		        <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

		        	<div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Image Content</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="content" placeholder="Enter Content" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Image Sub Content</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="sub_content" placeholder="Enter Sub Content" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
                                            <label class="control-label col-lg-4">Photo (457*280)</label>
                                            <div class="col-lg-8">
                                            	<input name="file" type="file" />
                                            </div>
                    </div>

		            
		            <div class="form-group">
		                <label for="text4" class="control-label col-lg-4"></label>
		                <div class="col-lg-8">
		                    <button class="btn text-muted text-center btn-danger" name="submit" type="submit">Add Photo</button>
		                </div>
		            </div>

		        </form>
		    </div>
		</div>
	</div>
</div>
<?php include '../../resources/template/footer.php'; ?>