<?php
$query = "SELECT * from users";
/*  Data Engine must be changed to PDO */

$result = mysql_query($query);
echo '<h3>List of Users</h3><table border="0" align="center" class="table-configuration">';
echo '<tr><th>ID</th><th>Name</th><th>Username</th><th>Email</th><th>Title</th></tr>';
while(list($id,$name,$username,$email,,,$title) = mysql_fetch_array($result)){
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$username.'</td><td>'.$email.'</td><td>'.$title.'</td></tr>';
}
echo "</table>";
?>
