 <?php 
session_start();

    if($active!="login")
    {
    
        if(empty($_SESSION['adminuser']))
        {
            ?>
                <script>document.location="../../../mdu/admin/login.php"</script>        
            <?php

        }
    }
        if(isset($_POST['logout']))
        {
            session_unset();
            ?>

                <script>document.location="../../mdu/admin/login.php"</script>
                
            <?php
        }
/*
if($active!="login")
{
    if($roll=="admin")
    {

        if(empty($_SESSION['adminuser']))
        {
            ?>
           <script>document.location="../../../highvirality/admin/login.php"</script> 
            <?php
        }
    }
    else
    {
        if(empty($_SESSION['user']))
        {
            ?>
            <script>document.location="../../highvirality/account/index.php"</script> 
            <?php
        }
    }
}
*/
include $path."resources/template/config.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title><?php if($role="user"){ ?>
        Highvirality User Dashboard | Dashboard 
        <?php } elseif($role="admin") { ?>
        HighVirality Admin Dashboard | Dashboard 
        <?php } ?>
    </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <?php if($active!="login"){ ?>
    <link rel="stylesheet" href="<?php echo $path ; ?>shared/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $path ; ?>shared/css/main.css" />
    <link rel="stylesheet" href="<?php echo $path ; ?>shared/css/theme.css" />
    <link rel="stylesheet" href="<?php echo $path ; ?>shared/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo $path ; ?>shared/plugins/Font-Awesome/css/font-awesome.css" />
    <?php } ?>
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES for dashboard -->
    <?php if($active==1){ ?>
    <link href="<?php echo $path ; ?>shared/css/layout2.css" rel="stylesheet" />
       <link href="<?php echo $path ; ?>shared/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="<?php echo $path ; ?>shared/plugins/timeline/timeline.css" />
       <?php } ?>
    <!-- END PAGE LEVEL  STYLES -->

<!-- PAGE LEVEL STYLES for campaign-->
<?php if($active==2){ ?>
    <link href="<?php echo $path ; ?>shared/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" />
      <style>
        .panel-body a img {
            margin-bottom:5px !important;

        }
          .panel-body a{
              color:transparent!important;
          }
    </style>
    <?php } ?>
          <!-- END PAGE LEVEL STYLES-->

 <!-- PAGE LEVEL STYLES for mylinks -->
 <?php if($active==3){ ?>
    <link href="<?php echo $path ; ?>shared/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <?php } ?>
    <!-- END PAGE LEVEL  STYLES -->

<!-- PAGE LEVEL STYLES admin login -->
<?php if($active=="login"){ ?>
     <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/login.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/magic/magic.css" />
    <?php } ?>
     <!-- END PAGE LEVEL STYLES -->

<!-- PAGE LEVEL STYLES for article -->
<?php if($active==4){ ?>
    <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/Font-Awesome/css/font-awesome.css" />
     <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/Markdown.Editor.hack.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/CLEditor1_4_3/jquery.cleditor.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/jquery.cleditor-hack.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/bootstrap-wysihtml5-hack.css" />
     <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>
<?php } ?>
    <!-- END PAGE LEVEL  STYLES -->

    <!-- PAGE LEVEL STYLES for admin _ payments-->
    <?php if($active==6){ ?>
     <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/validationengine/css/validationEngine.jquery.css" />
     <?php } ?>
    <!-- END PAGE LEVEL  STYLES -->

     <!-- PAGE LEVEL STYLES for requested payments -->
    <?php if($active==7){ ?>
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="<?php echo $path;?>shared/plugins/switch/static/stylesheets/bootstrap-switch.css" />
<?php } ?>
   
    <!-- END PAGE LEVEL  STYLES -->

     <!-- PAGE LEVEL STYLES for faculty house rules -->
    <?php if($active==10){ ?>

 <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/Font-Awesome/css/font-awesome.css" />
     <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/Markdown.Editor.hack.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/plugins/CLEditor1_4_3/jquery.cleditor.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/jquery.cleditor-hack.css" />
    <link rel="stylesheet" href="<?php echo $path;?>shared/css/bootstrap-wysihtml5-hack.css" />
     <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>

    <?php } ?>
   
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body>
<?php if($active!="login"){ ?>
<body class="padTop53" >
    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="<?php echo $path ; ?>shared/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">


                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li>
                            <a href="<?php if($roll=="user"){ ?>../../highvirality/index.php <?php } else { ?> ../../admin/index.php <?php } ?>">
                                <i class="icon-user"></i> User Profile 
                            </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                            <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <button class="btn text-muted text-center btn-info btn-block" name="logout" type="submit">Log Out</button>
                            </form>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->
        <?php } ?>