<?php
$db_host = "localhost";
$db_name = "appathon";
$db_username = "root";
$db_password = "123iiit";
mysql_connect("$db_host","$db_username","$db_password") or die ("could not connect to database");
mysql_select_db("$db_name") or die ("no database");
?>