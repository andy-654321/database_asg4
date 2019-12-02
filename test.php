<!DOCTYPE HTML>
<html>
 <body>
<?php
	$userErr = $tableErr = "";
	$user = $table = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["user"])){
			$userErr = "User is required";
		}
		else {
			$user = test_input($_POST["user"]);
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["table"])){
			$tableErr = "Table is required";
		}
		else {
			$table = test_input($_POST["table"]);
		}
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	switch($user){
		case "Strong":
			$password = "password3";
			break;	
		case "Medium":
			$password = "password2";
			break;	
		case "Weak":
			$password = "password1";
			break;	
	}

	$con = mysql_connect("localhost", "$user", "$password")
		or die ("Couldn't connect to database:" . mysql_error());
	

	mysql_select_db("assignment4") or die("Couldn't select db");

	$query = $_POST["input"];
	echo "Using user: <b>$user</b><br>";
	if($user === "Weak" && strpos($query, "DELETE") !== false){
		echo "Insufficient authorization level. Delete operation failed.<br>";
		die();
	}
	$result = mysql_query($query) or die("Query failed: " . mysql_error());
	echo "Query succeeded.<br>";
	echo "Entered query: <code>$query</code><br>";
	echo "<br><table align='center' border=\"1\">\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value){
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
	mysql_close($con);

?>
  </body>
</html>

