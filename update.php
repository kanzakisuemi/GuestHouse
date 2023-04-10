<?php 
	header('location:list.php');
	include 'inc/openconn.php'; 
?>
<?php
	$gid=$_POST['gid'];
	$gfName=$_POST['gfName'];
	$glName=$_POST['glName'];
	$gAge=$_POST['gAge'];
	$gRoom=$_POST['gRoom'];

	$update = "UPDATE guestsinfo SET gfName=?, glName=?, gAge=?, gRoom=? WHERE gid=?";
	$stmt = $conn->prepare($update);
	$stmt->bind_param("ssiii", $gfName, $glName, $gAge, $gRoom, $gid);
	$stmt->execute();
	$stmt->close();
?>
<?php	include 'inc/closeconn.php'; ?>
