<?php
$connect = mysql_connect("localhost","root","") or die("Server is terrible");
mysql_select_db("classcalculatoronlineDB",$connect) or die("i cant connect to it");

?>