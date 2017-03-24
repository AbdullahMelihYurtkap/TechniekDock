<?php
// Establishing connection with server by passing "server_name", "user_id", "password".
$connection = mysql_connect("localhost", "root", "");
// Selecting Database by passing "database_name" and above connection variable.
$db = mysql_select_db("techniekdock", $connection);
$name2=$_POST['username']; // Fetching Values from URL
$email2=$_POST['groupname'];
$query = mysql_query("insert into users(username, groupname) values ('$name2','$email2')"); //Insert query
if($query){
echo "Data Submitted succesfully";
}
mysql_close($connection); // Connection Closed.
?>