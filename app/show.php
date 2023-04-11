<?php include 'inc/header.php'; ?>
<?php 
  $gid = $_GET['gid'];
  $stmt = $conn->prepare("SELECT * FROM guestsinfo WHERE gid=?");
  $stmt->bind_param("i", $gid);
  $stmt->execute();
  $guests = $stmt->get_result();
  $guest = $guests->fetch_assoc();
?>
<div class="card">
  <div class="card-body">
    <form action="update.php" method="post">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="gfName" value="<?= $guest['gfName']; ?>" required>
        <label for="gfName" class="form-label">Given name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="glName" value="<?= $guest['glName']; ?>" required>
        <label for="glName" class="form-label">Family name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="gAge" value="<?= $guest['gAge']; ?>" required>
        <label for="gAge" class="form-label">Age</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="gRoom" value="<?= $guest['gRoom']; ?>" required>
        <label for="gRoom" class="form-label">Room</label>
      </div>
      <button class="btn btn-primary" type="submit">Submit</button>

      <button class="btn btn-danger" onclick="header(location:edit.php)">Cancel</button>
      <input type="hidden" name="gid" value="<?= $guest['gid']; ?>">
    </form>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
