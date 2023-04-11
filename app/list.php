<?php include 'inc/header.php'; ?>
<?php	$result = mysqli_query($conn, "SELECT * FROM guestsinfo"); ?>
<div class="card">
	<div class="card-body">
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
				<?php while($row = mysqli_fetch_array($result)): ?>
					<tr>
						<th><?= $row['gid'] ?></th>
						<td><?= $row['gfName'] ?></td>
						<td><?= $row['glName'] ?></td>
						<td><?= $row['gAge'] ?></td>
						<td><?= $row['gRoom'] ?></td>
					</tr>
				<?php
					endwhile;
					include 'inc/footer.php';
				?>
			</tbody>
		</table>
	</div>
</div>
