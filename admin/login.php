<?php 
$path = "../";
$active = "login";
$role = "admin";
include "../resources/template/header.php"; 
 
/*
 

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $result = mysqli_query($con , "INSERT INTO adminuser (username, password) VALUES ('".$username."','".$password."')");
} */
if(isset($_POST['login']))
{
    //get stored password from database
    $sql= "SELECT username FROM users WHERE password='".MD5($_POST['password'])."'";
    $res = mysqli_query($con , $sql);
    if($res)
    {
        $row= mysqli_fetch_assoc($res);
        $name= $row['username'];
        if($name==$_POST['username'])
        {
            $_SESSION['adminuser'] = $name ;
            ?>
            <script>document.location="index.php"</script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">alert('Your details are incorrect!')</script>
            <?php

        }

    }
} 
?>

<!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="<?php echo $path; ?>shared/img/logo1.png" height="200" width="200" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>
                <input type="text" placeholder="Username" name="username" class="form-control" />
                <input type="password" placeholder="Password" name="password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" name="login" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 
                <input type="text" name="username" placeholder="Username" class="form-control" />
                <input type="password" name="password" placeholder="password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" name="register" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
        </ul>
    </div>
<?php include '../resources/template/footer.php'; ?>