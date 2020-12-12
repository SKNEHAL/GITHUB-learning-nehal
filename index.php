
<?php
include_once("conn.php");
if ($_POST['submit']) {
$sql="SELECT * FROM salman";
	$result=mysqli_query($link,$sql);
	$rowcount=mysqli_num_rows($result);

  for ($i=1; $i < $rowcount+1 ; $i++) { 
  	$a=$_POST["submit".$i];
  	$q="UPDATE `salman` SET `status`=$a WHERE id=$i";
$result=mysqli_query($link,$q);
}
}
?>
<!DOCTYPE HTML>
<head>
	<script>
function func(){


alert("Attendance taken successfully************")
}
function round(){
datetime-local();
}





var si=document.getElementById('jom');
    si.appendChild(document.createTextNode('hi by by '));
    
    console.log(si);
    


</script>

<style type="text/css">
	
body{

padding-top:89px


}
</style>

	<title></title>
	<link rel="stylesheet" type="text/css" href="rd.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<body >
		</div>


<div class="panel-footer" >
	
<script>

var my=new Date();
var day =my.getDay();
var month =my.getMonth();
var date =my.getDate();

var year=my.getYear();
if(year<1000){
year+=1900;
}

var day =my.getDay();
var month =my.getMonth();
var date =my.getDate();
  
var  array=new Array("sun","mon","tuesday","wed","thurs","friday","satr");
var montharray=new Array("jan","feb","mar","apr","may","jum","jul","aug","sept","oct","nov","december");


</script>
<body onload="rend()";><br>

	<h1 id="Display" style="text-align: center;font-family:cursive;"></h1>


<p id="jom"></p>
<div class="panel panel-dafault container ">
	<div class="panel-heading"> 
<marquee style="text-align:center;color:blue; font-size:40px";> Attendance Management System </marquee>
</div>
<div class="panel-body">
<a href="ranvir.php"  name="radio2"class="btn btn-primary "> View</a>
<a href="moto.php" name="radio2" class="btn btn-primary "> add</a>
<form method="POST">
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Branch</th>
<th>Email</th>
<th>Attendance</th>
<th>Date</th>
<th><input type="datetime-local" onclick="round()";></th>
</tr>
</thead>
<tbody>
<?php
$query="select * from salman";
$result=$link->query($query);
while($show=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $show['name'];?></td>
<td><?php echo $show['branch']; ?></td>
<td> <?php echo $show['email'];?></td>
<td>
<input type="radio"  name="radio<?php echo $show['id'];?>" value="1">Absent
<input  type="radio"   name="radio<?=$show['id'];?>" value="0">present
	</td>
</tr>
<?php
}
?>
</tbody>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$att=$_POST['mobile'];
//$date=date('d-m-y');
	$query="select distict date from attendace";
	$result=$link->query($query);
	$b=false;
if($result->num_rows>0){
		while($check=$result->fetch_assoc()){
			if($date==$check['date']){
				$b=true;
				echo "<div class='alert alert-danger'>
				attendance already taken;
				</div>";
			}			
		}
	}
}
if(!$b){
foreach($att as $key=>$value){

if($value=="present"){

	$query="insert into mobile(value,stu_id,date) values('present','$key','$date')";
	$insertResult=$link->query($query);
}
else{
$query="insert into mobile(value,stu_id,date) values('absent','$key','$date')";
	$insertresult=$link->query($query);
}
}

if($insertResult){
echo "<div class=alert alert-success'>
				attendance taken sucess;
				</div>";
			}
		}

?>
</table>
<input type="submit" name="submit" class="btn btn-primary" value="take attendance" onclick="func()"; onclick="round()";>
</form>
</div>


<div class="panel-footer">

	
	

</body>
</html>