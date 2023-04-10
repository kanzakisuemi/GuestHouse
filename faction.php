<?php 
	header("location:inc/alert.php");
	include 'inc/openconn.php';
?>
<?php
$sql = "INSERT INTO guestsinfo (nome, glName, gAge, gRoom) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
$stmt->bind_param("ssii", $gfName, $glName, $gAge, $gRoom);

$gfName =$_POST['gfName'];
$glName =$_POST['glName'];
$gAge =$_POST['gAge'];
$gRoom =$_POST['gRoom'];

$stmt->execute();
$stmt->close();
?>
<?php include 'inc/closeconn.php'; ?>
