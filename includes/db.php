<?php
$db_conn = pg_connect("host=localhost dbname=rakcheev_site user=postgres password=password")
   or die("Connection error: " . pg_last_error());
?>

