<?php
mysql_connect("localhost","root","");
$a=mysql_select_db("meals");
if(!$a)
{
	echo "db not connected";
}
?>