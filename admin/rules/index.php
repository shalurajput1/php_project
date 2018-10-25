<?php
$name = "rules";
$roll = "admin";
$path = "../../";
$active = 10;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$queryhead = mysqli_query($con , "SELECT * FROM rulehead");

if(isset($_POST['submit']))
{

	$heading_id = $_POST['heading_id'];
	$content = htmlspecialchars(mysqli_real_escape_string($con , $_POST['content']));
	mysqli_query($con , "INSERT INTO rules(heading_id, content) VALUES('".$heading_id."','".$content."')");
}

?>
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Add Faculty Rules </h2>
                    </div>
                </div>

                <hr />

                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Editor</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <div id="div-1" class="body collapse in">
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                                    <div class="form-group">
		                				<label>Select Rule</label>
                                    <select class="form-control" name="heading_id">
                                    <?php
                                    while($showhead = mysqli_fetch_assoc($queryhead)){
                                    ?>
                                    	<option value="<?php echo $showhead['id']; ?>">
                                    		<?php echo $showhead['title']; ?>
                                    	</option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                        <textarea id="wysihtml5" name="content" class="form-control" rows="10"></textarea>


                                        <div class="form-actions">
                                            <br />
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                   
                    </div>


            </div>




        </div>
         <!--END PAGE CONTENT -->
<?php include '../../resources/template/footer.php'; ?>