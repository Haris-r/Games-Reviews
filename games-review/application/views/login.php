<html>

	<head>

	</head>

	<body>
		<div class="container">
			<form action="<?php echo base_url();?>index.php/login/getUserDetails" method="post">
				<div class="col-xs-3">
					<label >Username</label>
					<input name='username' id="username" type="text" class="form-control" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input name="password" id="password" type="password" class="form-control" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

		<!-- all the id's are in the right place to submit properly -->
	</body>


</html>

