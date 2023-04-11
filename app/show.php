<?php include 'inc/header.php'; ?>
<?php 
  $gid = $_GET['gid'];
  $stmt = $conn->prepare("SELECT * FROM guestsinfo WHERE gid=?");
  $stmt->bind_param("i", $gid);
  $stmt->execute();
  $guests = $stmt->get_result();
  $guest = $guests->fetch_assoc();
?>
  <form style="margin: auto; margin-top: 5%; width: 70%;" action="update.php" method="post">
    <label for="gfName" class="form-label">First Name</label><br>
    <input type="text" class="form-control" name="gfName" value="<?= $guest['gfName']; ?>"><br>
    <label for="glName" class="form-label">Last Name</label><br>
    <input type="text" class="form-control" name="glName" value="<?= $guest['glName']; ?>"><br>
    <label for="gAge" class="form-label">Age</label><br>
    <input type="text" class="form-control" name="gAge" value="<?= $guest['gAge']; ?>"><br>
    <label for="gRoom" class="form-label">Room</label><br>
    <input type="text" class="form-control" name="gRoom" value="<?= $guest['gRoom']; ?>"><br>
    <button class="btn btn-info" type="submit">Submit</button>
    <button class="btn btn-danger" onclick="header(location:edit.php)">Cancel</button>
    <input type="hidden" name="gid" value="<?= $guest['gid']; ?>">
  </form>
<?php include 'inc/footer.php'; ?>
