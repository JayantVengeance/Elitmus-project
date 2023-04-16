<?php
$servername = "sql305.epizy.com";
$username = "epiz_34022743";
$password = "4Ll2ahq8lzIvv";
$database = "epiz_34022743_shareasy";

$conn = mysqli_connect($servername , $username , $password , $database);
if(!$conn)
{
    die("Failed to connect to database".mysqli_connect_error());
}

?>