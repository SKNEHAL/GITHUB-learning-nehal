<!DOCTYPE html>
<html>
<head>
	<title>hell guys</title>
</head>
<body ><br><br>
	<center>
<table    colspan="4" border="4" align="center" width="300" >
	<style>
		table{


			border-width: 24px;
		}
	</style>
	
	<center>
	<tr>
	<thead  >

	<td colspan="4"align="center"> student record	 </td>
</thead>
<td> user_id </td>
<td> &nbsp &nbsp &nbsp &nbsp  user_name</td>

</tr>



	</thead>
	
	

<?php

mysql_connect('localhost','root','');
$sd=mysql_select_db('akashproject');

if($sd){

	echo "connection complete";

}
else{

echo "connection fault";
}


?>
<?php 

$rf="select * from salman";
$pf=mysql_query($rf);

?>
<?php

while($sk=mysql_fetch_array($pf)){
?>
<tr>
<td><?php echo  $sk['id'] ;?>
	
</td>
<td><?php echo  $sk['name'] ;?>
	
</td>
<?php
}
?>
</tr>
</table>
</body>
</html>