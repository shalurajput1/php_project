<?php 
$name = "Payments";
$roll = "admin";
$path = "../../";
$active = 3;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$result = mysqli_query($con , "SELECT * FROM admin_payments");
    if(isset($_POST['edit']))
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $amount = $_POST['amount'];
        $status = $_POST['status'];
        mysqli_query($con , "UPDATE admin_payments SET amount='".$amount."', status='".$status."' WHERE id='".$id."' ");
        echo("<meta http-equiv='refresh' content='1'>"); 
    }
?>  
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Manage Payments </h2>
                    </div>
                </div>
                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Payments
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Payment ID</th>
                                            <th>Username</th>
                                            <th>Last Payment</th>
                                            <th>Status</th>
                                            <th>Edit Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $lines = 0;
                                         while ($show = mysqli_fetch_assoc($result)){
                                            $lines++;
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['id']; ?></td>
                                            <td><?php echo $show['username']; ?></td>
                                            <td class="center"><?php echo $show['amount']; ?></td>
                                            <td class="center"><?php echo $show['status']; ?></td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Payment</button>
                                            </td>
                                        </tr>
              <!-- Edit Status -->
                       <div class="row">
                       <div class="col-lg-12">
                        <div class="modal fade" id="newReg<?php echo $lines; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4">Edit Payment Details</h4>
                                        </div>
                                        <div class="modal-body">
                                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <label>Payment ID</label>
                                            <input type="text" name="id" value="<?php echo $show['id']; ?>" class="form-control" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" value="<?php echo $show['username']; ?>" class="form-control" readonly />
                                            
                                        </div>
                                       <div class="form-group">
                                            <label>Last Amount</label>
                                            <input type="text" name="amount" value="<?php echo $show['amount']; ?>" class="form-control" />
                                            <p class="help-block">Edit Last Amount</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" name="status" value="<?php echo $show['status']; ?>" class="form-control" />
                                            <p class="help-block">Edit Status</p>
                                        </div>

                                    <div class="modal-footer">
                                        <button type="Submit" name="edit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                    </form>
                                        </div>
                            
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                 <!-- End edit status -->
                                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
     
<?php include '../../resources/template/footer.php'; ?>