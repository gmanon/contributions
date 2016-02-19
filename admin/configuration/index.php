  <?php
  $menu = array('database'=>'database','server'=>'server','user'=>'user','permissions'=>'permissions');
  $mymenu = new Menu();
  $mymenu->themenu($menu);
if($_GET['menu']=='database'){

	//echo mysql_get_server_info($connection);

	echo '<div class="database">';

	$num_rows = mysql_num_rows(mysql_query("SHOW TABLES"));
	$query = mysql_query("SHOW TABLES;");
	echo "<h2>".mysql_db_name($query,2)."</h2>";
	echo "<b>Database Tables</b><br />";
	
	//mysql_list_tables(mysql_db_name($query,1));
	while(list($table)= mysql_fetch_array($query))
	{
		echo '<h3>'.str_replace("_"," ",ucwords($table))."</h3>";
		$myquery = mysql_query("SELECT * FROM $table");
		$result = mysql_fetch_assoc($myquery);
		if($result != null){
		foreach($result as $key=>$value){
		echo "<b>$key:</b>$value<br />&nbsp;&nbsp;&nbsp;";
		}}else { echo "No data found."; }
	}

	echo '</div>';
    	//include "database.php";
}
elseif($_GET['menu']=='server'){
    include "server.php";
}
elseif($_GET['menu']=='user'){
    include "user.php";
}
elseif($_GET['menu']=='permissions'){
    include "permissions.php";
}
?>
