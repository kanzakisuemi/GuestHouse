<?php include 'inc/header.php'; ?>
<div class="container">
  <table class="table caption-top">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Fist Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Room</th>
      </tr> 
    </thead>
    <tbody>
      <?php
        if (isset($_POST['submit_search'])):
          $search = mysqli_real_escape_string($conn, $_POST['search']);
          $sql = "SELECT * FROM guestsinfo WHERE gfName LIKE '%$search%' OR glName LIKE '%$search%' OR gAge LIKE '%$search%' OR gRoom LIKE '%$search%'";
          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);

            if ($queryResult == 1){ ?>
              <b>There is <?= $queryResult; ?> result!</b>
            <?php } elseif ($queryResult > 1){ ?>
              <b>There are <?= $queryResult; ?> results!</b>
            <?php } if ($queryResult > 0){
              while ($row = mysqli_fetch_assoc($result)): 
      ?>
        <tr>
          <th><?= $row['gid'] ?></th>
          <td><?= $row['gfName'] ?></td>
          <td><?= $row['glName'] ?></td>
          <td><?= $row['gAge'] ?></td>
          <td><?= $row['gRoom'] ?></td>
        </tr>
      <?php endwhile; ?>
      <?php } else { ?>
        <b>There are no matching results</b> 
      <?php }
        endif; 
      ?>
    </tbody>
  </table>
</div>
<?php include 'inc/footer.php'; ?>

