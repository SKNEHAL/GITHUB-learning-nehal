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
<th>Date </th>
<th>Status</th>


</t>
<?php
while ($row=mysql_fetch_array($sp)) {
	 

	?>

</tr>
<th><?php echo $row['id'] ?></th>
<th><?php echo $row['name'] ?></th>
<td style="color:red; text-align: center";><?php echo $row['branch'] ?></td>

<th><?php echo $row['email'] ?></th>
<th><?php echo $row['Date'] ?></th>
<th><?php echo $row['Status'] ?></th>



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
<!-- <form method="POST" action="" enctype="multipart/form-data">
<p><input type="file" name="file"></p>
<input type="submit" name="submit" value="upload image">
<form> -->

<!-- <?php

// if(isset($_POST['submit'])){

// 	$file_name=$_FILES['file']['name'];
// 	$file_type=$_FILES['file']['type'];
// 	$file_size=$_FILES['file']['size'];
// 	$file_tem_loc=$_FILES['file']['tmp_name'];
// 	$file_store='hello/'.$file_name;
// 	move_uploaded_file($file_tem_loc, $file_store);

// 	// $file_type=$_FILES['file']['type'];

//  //           $file_size =$_FILES['file']['size'];
//  //             $file_loc=  $_FILES['file']['tmp_name'];
//  //  $str="upload/".$file;
//  // move_uploaded_file($file_loc, $str);

// }
?> -->
<script type="text/javascript">
	


var txt = '{"name":"John", "age":30, "city":"New York"}'
var obj = JSON.parse(txt);
for(key in obj)
{
document.write(" "+key);
}


 let my={
	"name":"rahul",
	"age":89,

	"ccolor":['red','orange','black'];
}
 let group=JSON.stringify(my);

 alert(group);










</script>