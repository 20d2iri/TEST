<?php
	include('conn.php');
	$meetid=$_GET['meetid'];
	mysqli_query($conn,"delete from room where meetid='$meetid'");
	header('location:addroom.php');

?>