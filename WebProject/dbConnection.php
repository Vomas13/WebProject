<?php
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
//$con = mysqli_connet("localhost", "root", '', 'project') or die("could not connect to db");


?>