<?php 
$name = "Payments";
$roll = "admin";
$path = "../../";
$active = 3;
include "../../resources/template/header.php"; 
include "../../resources/template/sidebar.php";
$result = mysqli_query($con , "SELECT * FROM requested_payments");
?>  
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Requested Payments </h2>
                    </div>
                </div>
                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            All Requested Payments
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Amount</th>
                                            <th>Remarks</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while ($show = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['username']; ?></td>
                                            <td><?php echo $show['amount']; ?></td>
                                            <td class="center"><?php echo $show['remarks']; ?></td>
                                            <td>Requested</td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info">Edit Status</button>
                                            </td>
                                        </tr>
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