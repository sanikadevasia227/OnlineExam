<?php
error_reporting(0);
session_start();
$dttim= date("Y-m-d H:i:s");
$dt= date("Y-m-d");
$tim= date("H:i:s");
$con=mysqli_connect("localhost:3307","root","","onlineexamination");
//check connection  
if(mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }?>