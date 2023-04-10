<?php include 'inc/header.php'; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM guestsinfo") ?>
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
			while($row = mysqli_fetch_array($result)):
		?>
				<tr>
				<th><?= $row['gid'] ?></th>
				<td><?= $row['gfName'] ?></td>
				<td><?= $row['glName'] ?></td>
				<td><?= $row['gAge'] ?></td>
				<td><?= $row['gRoom'] ?></td>
				<td><a class="btn btn-warning" href="show.php?gid=<?=$row['gid']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete.php?gid=<?=$row['gid']; ?>" onclick="return confirm('Are u sure about deleting it?')">Delete</a></td>
				</tr>
		<?php endwhile; ?>
	</tbody>
</table>
<?php include 'inc/footer.php'; ?>
