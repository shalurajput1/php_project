<?php 
$name = "members";
$roll = "admin";
$path = "../../";
$active = 3;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$result = mysqli_query($con , "SELECT * FROM team");
    if(isset($_POST['edit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        mysqli_query($con , "UPDATE team SET name='".$name."', designation='".$designation."' WHERE id='".$id."' ");
        echo("<meta http-equiv='refresh' content='1'>"); 
    }
?>  
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Manage Faculty Members </h2>
                    </div>
                </div>
                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Faculty Members
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Member ID</th>
                                            <th>Name</th>
                                            <th>Designation</th>
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
                                            <td><?php echo $show['name']; ?></td>
                                            <td class="center"><?php echo $show['designation']; ?></td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Member</button>
                                                 <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Delete</button>
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
                                            <label>Member ID</label>
                                            <input type="text" name="id" value="<?php echo $show['id']; ?>" class="form-control" readonly />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?php echo $show['name']; ?>" class="form-control" />
                                            
                                        </div>
                                       <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="designation" value="<?php echo $show['designation']; ?>" class="form-control" />
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