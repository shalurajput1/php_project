<?php

$config = array(
    "db" => array(
        "dbmain" => array(
            "dbname" => "sjp",
            "username" => "root",
            "password" => "",
            "host" => "127.0.0.1"
        ),
    ),
    "urls" => array(
        "baseUrl" => ""
    ),
    "paths" => array(
        "resources" => "/resources",
        "ui" => array(
            "image" => $_SERVER["DOCUMENT_ROOT"]."../../../admin/shared/images/",
            "shared" => $_SERVER["DOCUMENT_ROOT"]."../../../admin/shared/",
            "css" => $_SERVER["DOCUMENT_ROOT"]."../../../admin/shared/css/",
            "js" => $_SERVER["DOCUMENT_ROOT"]."../../../admin/shared/js/"
        )
    )
);

/*
I will usually place the following in a bootstrap file or some type of environment
setup file (code that is run at the start of every page request), but they work
just as well in your config file if it's in php (some alternatives to php are xml or ini files).
 */

/*
Creating constants for heavily used paths makes things a lot easier.
ex. require_once(LIBRARY_PATH . "Paginator.php")
 */



/*
Error reporting.
 */
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
$con = mysqli_connect('127.0.0.1','root','','sjp',3306);

if (!$con)
{
    echo "Failed to connect to MySQL: ";
}


?>
