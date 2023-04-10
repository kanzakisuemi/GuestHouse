<?php
  header('location:list.php');
  include 'inc/openconn.php';
?>
<?php
  $gid = $_GET['gid'];
  $stmt = $conn->prepare("DELETE FROM guestsinfo WHERE gid=?");
  $stmt->bind_param("i", $gid);
  $stmt->execute();
  $stmt->close();
?>
<?php include 'inc/closeconn.php'; ?>
