<?php include 'inc/header.php'; ?>
	<form style="margin: auto; margin-top: 3%; width: 60%;" action="faction.php" method="post">
		<label for="gfName" class="form-label">First Name</label><br>
		<input type="text" class="form-control" name="gfName" required><br>
		<label for="glName" class="form-label">Last Name</label><br>
		<input type="text" class="form-control" name="glName" required><br>
		<label for="gAge" class="form-label">Age</label><br>
		<input type="text" class="form-control" name="gAge" required><br>
		<label for="gRoom" class="form-label">Room</label><br>
		<input type="text" class="form-control" name="gRoom" required><br>
		<button class="btn btn-info" type="submit">Submit</button>
	</form>
<?php include 'inc/footer.php'; ?>
