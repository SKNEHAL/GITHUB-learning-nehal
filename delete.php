<?php

  $p=mysqli_connect('localhost','root','','akashproject');
  	//mysqli_select_db($p,'akashproject');


$sd="DELETE  FROM salman where id= '$_GET[id]'";
 
 if(mysqli_query($p,$sd))
 
 	header("refresh:1;url=insert.php");
 
 else
 
 	echo "mot deletr";

?>