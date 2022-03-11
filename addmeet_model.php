<?php
	include('conn.php');
	
	$meetid=$_POST['meetid'];
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$userid=$_POST['userid'];
	$remark=$_POST['remark'];
	$meetfile=$_POST['meetfile'];
	
	mysqli_query($conn,"insert into meeting (meetid, title, head, numattend, listname, roomid, start, end, addequipment, userid, remark, meetfile) values ('$meetid', '$title', '$head', '$numattend', '$listname', '$roomid', '$start', '$end', '$addequipment', '$userid', '$remark', '$meetfile')");
	header('location:addmeet.php');


?>