<?php 
$roll = "admin";
$name = "Users";
$path = "../../";
$active = 3;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$result = mysqli_query($con , "SELECT * FROM users");
if(isset($_POST['block']))
{
    $id = $_POST['id'];
    $status = $_POST['status'];
    mysqli_query($con , "UPDATE users SET status='".$status."' WHERE ID='".$id."'");
    echo("<meta http-equiv='refresh' content='1'>"); 
}
?>  
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Registered Users </h2>
                    </div>
                </div>
                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registered Users
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>Earnings</th>
                                            <th>E-mail</th>
                                            <th>Action</th>
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
                                            <td>90$</td>
                                            <td class="center"><?php echo $show['email']; ?></td>
                                            <td class="center">
                                            <?php if($show['status']=='Active'){ ?>
                                                <button class="btn text-muted text-center btn-info"  data-toggle="modal" data-target="#buttonedModal<?php echo $lines; ?>">Block</button>
                                            <?php } else { ?>
                                                <button class="btn text-muted text-center btn-info"  data-toggle="modal" data-target="#buttonedModal<?php echo $lines; ?>">Unblock</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                        <!--Block usre -->
                        <div class="row">
                        <div class="col-lg-12">
                        <div class="modal fade" id="buttonedModal<?php echo $lines; ?>" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Warning!</h4>
                                        </div>
                                        <?php if($show['status']=='Active'){ ?>
                                        <div class="modal-body">
                                            Are you sure You want to Block this user?
                                        </div>
                                        <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $show['id']; ?>">
                                        <input type="hidden" name="status" value="Inactive">
                                        <div class="modal-footer">
                                        <button type="submit" name="block" class="btn btn-primary">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </div>
                                        </form>
                                        <?php } else { ?>
                                        <div class="modal-body">
                                            Are you sure You want to UnBlock this user?
                                        </div>
                                        <form role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $show['id']; ?>">
                                        <input type="hidden" name="status" value="Active">
                                        <div class="modal-footer">
                                        <button type="submit" name="block" class="btn btn-primary">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </div>
                                        </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                                        <!-- End Block User -->

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