<?php include 'inc/header.php'; ?>
<?php $result = mysqli_query($conn, "SELECT * FROM guestsinfo") ?>
<div class="card" style="width: 50rem;">
	<div class="card-body">
		<table class="table caption-top">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Given Name</th>
					<th scope="col">Family Name</th>
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
						<td><a class="btn btn-primary btn-sm" href="show.php?gid=<?=$row['gid']; ?>">Edit</a></td>
						<td><a class="btn btn-danger btn-sm" href="delete.php?gid=<?=$row['gid']; ?>" onclick="return confirm('Are u sure about deleting it?')">Delete</a></td>
						</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
