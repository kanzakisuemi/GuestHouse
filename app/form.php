<?php include 'inc/header.php'; ?>
<div class="card text-center" style="width: 30rem;">
	<div class="card-header">
		<h3>REGISTER</h3>
	</div>
	<div class="card-body">
		<form action="faction.php" method="post">
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="gfName" required>
			  <label for="gfName" class="form-label">Given name</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="glName" required>
			  <label for="gfName" class="form-label">Family name</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="gAge" required>
			  <label for="gfName" class="form-label">Age</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="gRoom" required>
			  <label for="gfName" class="form-label">Room</label>
			</div>
			<button class="btn btn-info" type="submit">Submit</button>
		</form>
	</div>
</div>
<?php include 'inc/footer.php'; ?>
