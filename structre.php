
<!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
	function func(){
 let a=document.getElementById('o').value;
if(a==""){


	document.getElementById('po').textContent="fill ";
	return false;
}
}

</script>
	</head>
<body>


<form action="#"  method="POST"  onsubmit=" return func()";>

	<h2 id="po"></h2>
	username:<input type="text" id="o" name="user"><br><br>
	branch:<input type="text" name="branch"><br><br>
email:<input type="text" name="email"> <br><br>
DATE:<input type="date" name="date"> <br><br>
<select name="status">
<option>
	presence
</option>
<option>
	absence
</option>
</select>

<input type="submit" value="insert"  name="submit"><br>


</thead>
</table>
</body>
	</html>


<?php


$conn=mysqli_connect('localhost','root','','akashproject');
if(isset($_POST["submit"]))

{

$user=$_POST["user"];
$branch=$_POST["branch"];
$email=$_POST["email"];
$date=$_POST["date"];
$status=$_POST["status"];


$q="INSERT INTO `salman`(`id`,`name`, `branch`, `email`,`date`,`status`) VALUES ('','$user','$branch','$email','$date','$status')";
$query=mysqli_query($conn,$q);

if($query)
{
	header("refresh:1;url=structre.php");
}
 

else
{
	echo "error";
}

}

?>


