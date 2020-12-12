<?php
include_once("conn.php");
?>
<!DOCTYPE HTML>
<head>
	<script>
function set(){
datetime-local();
}
	</script>
	<title></title>
	<link rel="stylesheet" type="text/css" href="rd.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<body>

<div class="panel panel-dafault container ">
	<div class="panel-heading">
<marquee style="text-align:center;color:blue"> Attendance Management System </marquee>
	</div>
<div class="panel-body">
	<a href="ranvir.php" name="radio"  class="btn btn-primary">View</a>
	
<a href="moto.php" name="radio"   class="btn btn-primary"  style="float:right ";>Add</a>
<form method="POST">
<table class="table" border="7px">
	<br>
<thead>
<tr>
<th style="color:pink";>Sl no</th>
<th style="color:pink";>Name</th>
<th style="color:pink";>View</th>
<th style="color:pink";>Date</th>
<th><input type="datetime-local"checked  onclick="set()";></th>
</tr>
</thead>
<?php
$query="select *  from salman";
$result=$link->query($query);
if($result->num_rows>0)
{
	$i=0;
	while($val=$result->fetch_assoc()){
$i++;
if ($val['status']== 0) {
	$z="absent";
}
else{
	$z="present";
}
?>
<tr>
	<td> <?php echo $i;?>   </td>
		<td><?php echo $val['name'];?> </td>

	<td><?php echo $z;?></td>
</tr>
<?php }}?>
</div>
<div class="panel-footer">
</body>
</html>