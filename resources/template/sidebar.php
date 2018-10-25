<?php
if($roll=="admin"){
?>
<!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
               
                <br />
                <div class="media-body">
                    <h5 class="media-heading" style="text-align: center;"> Admin User </h5>
                    <ul class="list-unstyled user-info">
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel <?php if($name=="Dashboard"){echo "active";} ?>">
                    <a href="<?php echo $path; ?>admin/index.php" >
                        <i class="icon-table"></i> Dashboard
                    </a>                   
                </li>
                 <li class="panel <?php if($name=="heading"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Rule Headings
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">
                        <li><a href="<?php echo $path; ?>admin/rulehead/index.php"><i class="icon-angle-right"></i> Add Rule Heading </a></li>
                        <li><a href="<?php echo $path; ?>admin/rulehead/manage.php"><i class="icon-angle-right"></i> Manage Rule Heading</a></li>
                    </ul>
                </li>

                 <li class="panel <?php if($name=="rules"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav1">
                        <i class="icon-bar-chart"></i> Faculty Rules
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav1">
                        <li><a href="<?php echo $path; ?>admin/rules/index.php"><i class="icon-angle-right"></i> Add Rule </a></li>
                        <li><a href="<?php echo $path; ?>admin/rules/manage.php"><i class="icon-angle-right"></i> Manage Rule</a></li>
                    </ul>
                </li>

                     <li class="panel <?php if($name=="members"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav2">
                        <i class="icon-bar-chart"></i> Club Members
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav2">
                        <li><a href="<?php echo $path; ?>admin/members/index.php"><i class="icon-angle-right"></i> Add New Member </a></li>
                        <li><a href="<?php echo $path; ?>admin/members/manage.php"><i class="icon-angle-right"></i> Manage Members</a></li>
                    </ul>
                </li>


                     <li class="panel <?php if($name=="gallery"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav3">
                        <i class="icon-bar-chart"></i> Gallery
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav3">
                        <li><a href="<?php echo $path; ?>admin/gallery/index.php"><i class="icon-angle-right"></i> Add New Images </a></li>
                        <li><a href="<?php echo $path; ?>admin/gallery/manage.php"><i class="icon-angle-right"></i> Manage Gallery</a></li>
                    </ul>
                </li>                
                 
                 <li class="panel <?php if($name=="msgs"){echo "active";} ?>">
                    <a href="<?php echo $path; ?>admin/messages/index.php" >
                        <i class="icon-table"></i> Messages
                    </a>                   
                </li>
             
                      
            </ul>

        </div>
        <!--END MENU SECTION -->
<?php 
        } 
        else 
        {
?>

 <?php if($active!="login"){ ?>
 <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo $path; ?>shared/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> 
                    <?php echo $_SESSION['user'];?>
                    </h5>
                    <ul class="list-unstyled user-info">
                        <!--
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Account Manager
                           
                        </li>
                       -->
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel <?php if($name=="Dashboard"){echo "active";} ?>">
                    <a href="<?php echo $path; ?>index.php" >
                        <i class="icon-user"></i> Dashboard
                    </a>                   
                </li>

                <li class="panel <?php if($name=="Campaign"){echo "active";} ?>">
                    <a href="<?php echo $path; ?>campaign/index.php" >
                        <i class="icon-calendar"></i> Campaign
                    </a>                   
                </li>
                <li class="panel <?php if($name=="My Links"){echo "active";} ?>">
                    <a href="<?php echo $path; ?>mylinks/index.php" >
                        <i class="icon-reorder"></i> My Links
                    </a>                   
                </li>
                <li class="panel <?php if($name=="Payments"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav1">
                        <i class="icon-eur"></i> Payments
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav1">
                    <li><a href="<?php echo $path; ?>payment/index.php"><i class="icon-angle-right"></i>See Payments </a></li>
                        <li><a href="<?php echo $path; ?>payment/request.php"><i class="icon-angle-right"></i> Request Payments </a></li>
                    </ul>
                </li>
                <li class="panel <?php if($name=="Domains"){echo "active";} ?>">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav2">
                        <i class="icon-globe"></i> Domains
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav2">
                    <li><a href="<?php echo $path; ?>domain/index.php"><i class="icon-angle-right"></i> Add New Domain </a></li>
                        <li><a href="<?php echo $path; ?>domain/manage.php"><i class="icon-angle-right"></i> Manage Domains </a></li>
                    </ul>
                </li>
                <li class="panel <?php if($name=="Reports"){echo "active";} ?>">
                    <a href="index.html" >
                        <i class="icon-table"></i> Reports
                    </a>                   
                </li>
            </ul>

        </div>
        <!--END MENU SECTION -->
<?php
    } 
} 
?>
