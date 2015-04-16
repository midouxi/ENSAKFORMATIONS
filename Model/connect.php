<?php
if(!$connect=mysql_connect("localhost","root","")) mysql_error();
if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
?>