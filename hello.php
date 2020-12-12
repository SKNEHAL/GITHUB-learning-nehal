 <?php

mysql_connect('localhost','root','');
mysql_select_db('akashproject');


?>
 





<?php

$sd="select * from salman";
 $sp= mysql_query($sd);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="mouse.css"> 
	<title></title>
</head>
<body><br>
	<thead>
	<center>
<table class border="2px" width="400" >


	<tr>
	<th colspan="7"><h1> student records</h1></th>	
</tr>
	<t>
<th>id</th>
<th>name</th>

	<th> branch</th>
<th>email</th>



</t>
<?php
while ($row=mysql_fetch_array($sp)) {
	 

	?>

</tr>
<th><?php echo $row['id'] ?></th>
<th><?php echo $row['name'] ?></th>
<td style="color:red; text-align: center";><?php echo $row['branch'] ?></td>

<th><?php echo $row['email'] ?></th>


<?php
echo "<td><a href=delete.php?id=".$row['id'].">delete</a></td>";


echo "<td><a href=update.php?id=".$row['id'].">edit</a></td>";
echo "<td><a href=structre.php?id=".$row['id'].">add</a></td>";
}

?>

</thead>
</table>
</body>
	</html>