<?php
require"init.php";
$name=$_POST["name"];
$user_name=$_POST["user_name"];
$user_pass=$_POST["user_pass"];

$sql_query="insert into user_info values('$name','$user_name','$user_pass');";

if(mysqli_query($con,$sql_query))
{
//echo"<h3>data inserted into table<h3>";
}
else
{
//echo"data insertion error...".mysqli_error($con); 
}

?>
