<?php

mysql_connect('localhost','root','');
mysql_select_db('akashproject');
 $id=$_GET['id'];
 $d=mysql_query("select * from salman where id='$id'");


 $check=mysql_fetch_array($d);
if(isset($_POST['submit'])){

$name=$_POST['name'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$date=$_POST['date'];
$status=$_POST['status'];

$edit=mysql_query("update salman set name='$name',branch='$branch',email='$email',date='$date',status='$status' where id='$id'");
if(!$edit){

echo mysql_error();
}
else
{
	header("location:insert.php");
}

}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="" method="POST">
name<input type="text" name="name" value="<?php echo $check['name']?>"><br>
 branch<input type="text" name="branch" value="<?php echo $check['branch']?>"><br>
 mail<input type="email" name="email" value="<?php echo $check['email']?>"><br>
 Date<input type="date" name="date" value="<?php echo $check['date']?>"><br>
 <select name="status" value="<?php echo $check['status']?>">
 	<option>
 		presence
 	</option>
 	<option>
 		absence
 	</option>
 </select>
 <input type="submit" value="update" name="submit"><br>
</form>
</body>
</html>








