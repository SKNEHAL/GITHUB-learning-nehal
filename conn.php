<?php
$host="localhost";
$db="akashproject";
$user="root";
 $pass="";
 $link= new mysqli($host,$user,$pass,$db);
if($link)
{

 //echo "connection success";
  }
 else
 {
	 echo "connection less";
 }
?> 
 