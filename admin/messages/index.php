<?php 
$name = "msgs";
$roll = "admin";
$path = "../../";
$active = 3;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$result = mysqli_query($con , "SELECT * FROM messages");
?>  
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Messsages </h2>
                    </div>
                </div>
                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Panel Messages
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Message ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
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
                                            <td><?php echo $show['name']; ?></td>
                                            <td class="center"><?php echo $show['email']; ?></td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">View Messages</button>
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
                                            <h4 class="modal-title" id="H4"><?php echo $show['name']. " Wrote:" ?></h4>
                                        </div>
                                        <div class="modal-body">
                                        <?php 
                                            echo $show['msg'];
                                        ?>
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