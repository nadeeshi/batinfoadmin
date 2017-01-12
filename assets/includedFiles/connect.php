<?php
$mysql_hostname = "us-cdbr-azure-southcentral-f.cloudapp.net";
$mysql_user = "ba24a8e6ef7756";
$mysql_password = "b8bded59";
$mysql_database = "bat";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd ,$mysql_database) or die("Could not select database");
?>
