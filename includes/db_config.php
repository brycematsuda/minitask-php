<?php
// Connect to database
// (Replace with your own custom credentials if necessary)
$dbhost = "localhost";
$dbuser = "todo_user"; 
$dbpass = "password";
$dbname = "simple_todo";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
  die("Database connection failed: " .
    mysqli_connect_error() .
    " (". mysqli_connect_errno() . ")"
    );
}

?>