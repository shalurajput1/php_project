<?php
$name = "heading";
$roll = "admin";
$path = "../../";
$active = 7;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
if(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$result = mysqli_query($con , "INSERT INTO rulehead (title) VALUES ('".$title."')");
}
?>
  <!--PAGE CONTENT -->
 <div id="content">          
    <div class="inner">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Rule Heading</h1>
                </div>
            </div>
            <div class="row">
		<div class="col-lg-12">
		<div class="box dark">
		    <header>
		        <div class="icons"><i class="icon-edit"></i></div>
		        <h5>Add Heading</h5>
		        
		    </header>
		    <div id="div-1" class="accordion-body collapse in body">
		        <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

		        	<div class="form-group">
		                <label for="text1" class="control-label col-lg-4">Rule Heading</label>

		                <div class="col-lg-8">
		                    <input type="text" id="text1" name="title" placeholder="Enter Rule Heading" class="form-control" />
		                </div>
		            </div>

		            <div class="form-group">
		                <label for="text4" class="control-label col-lg-4"></label>
		                <div class="col-lg-8">
		                    <button class="btn text-muted text-center btn-danger" name="submit" type="submit">Add Rule Heading</button>
		                </div>
		            </div>

		        </form>
		    </div>
		</div>
	</div>
</div>
<?php include '../../resources/template/footer.php'; ?>