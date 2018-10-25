<?php 
$name = "rules";
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
                        <h2> Manage Rules </h2>
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
                                            <th>Rule ID</th>
                                            <th>Rule</th>
                                            <th>Change Content</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $lines = 0;
                                         while ($show = mysqli_fetch_assoc($result)){
                                            $lines++;
                                    ?>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Transit Facility</td>
                                            <td class="center">
                                                <a href="index.php?id=1">
                                                <button class="btn text-muted text-center btn-info">Edit Content</button></a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>2</td>
                                            <td>Boarding and lodging facility</td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Content</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>3</td>
                                            <td>Lodging charges</td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Content</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>4</td>
                                            <td>Boarding charges</td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Content</button>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>5</td>
                                            <td>Lounge &amp; Dining hall</td>
                                            <td class="center">
                                                <button class="btn text-muted text-center btn-info" data-toggle="modal"  data-target="#newReg<?php echo $lines; ?>">Edit Content</button>
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