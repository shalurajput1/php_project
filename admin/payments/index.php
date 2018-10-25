 <?php
 $name = "Payments";
$roll = "admin";
$path = "../../";
$active = 6;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    $date = $_POST['date'];
$result = mysqli_query($con , "INSERT INTO admin_payments (username, amount, status, date ) VALUES ('".$username."','".$amount."','".$status."','".$date."')");
}


 ?>
 <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h1 > Payments </h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Payments by Admin</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" id="block-validate" method="post">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Username</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="required2" name="username" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Amount</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="required2" name="amount" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class="col-lg-4">
                                                <input type="date" id="date2" name="date" class="form-control" />
                                            </div>
                                        </div>

                                         <div class="form-group">
                        <label class="control-label col-lg-4">Radio</label>

                        <div class="col-lg-8">
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="status" value="Initiated" checked="checked" />Initiated
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="status" value="Paid" /> Paid
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input class="uniform" type="radio" name="status" value="Rejected" /> Rejected
                                </label>
                            </div>
                        </div>
                    </div> 
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-lg " />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>        

        </div>
          <!--END PAGE CONTENT -->
<?php include '../../resources/template/footer.php'; ?>