<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/login-form/login-form-18/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<h2 class="heading-section">Login</h2>
			<div class="isi">
				<div class="login-wrap p-4 p-md-5">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-user-o"></span>
					</div>
					
					@error('loginError')
						<div class="alert alert-danger">
							<strong>Error</strong>
							<p>{{ $message }}</p>
						</div>
					@enderror

					<form method="post" class="login-form">
						@csrf
						<div class="form-group">
							<input type="text" class="form-control rounded-left-right" placeholder="Username (admin)" name="name" required>
						</div>
						<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left-right" placeholder="Password (123)" name="password" required>
						</div>
						<div>
							<button type="submit" class="form-control rounded-left-right" id="submit">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

