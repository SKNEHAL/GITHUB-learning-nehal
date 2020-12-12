<?php

mysql_connect('localhost','root','');
mysql_select_db('akashproject');


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="" method="POST">
	id<input type="text" name="id" value="<?php echo $check['id']?>"><br>
name<input type="text" name="name" value="<?php echo $check['name']?>"><br>
 branch<input type="text" name="branch" value="<?php echo $check['branch']?>"><br>
 mail<input type="email" name="email" value="<?php echo $check['email']?>"><br>
 <input type="submit" value="update" name="submit"><br>
</form>
</body>
</html>