<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../public/css2/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><b>TIMEZONE</b></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(../public/img/hero/hero-3.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>

					<form action="model/register_m.php" class="signin-form" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="email">Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="confirm">Comfirm Password</label>
                                <input type="password" class="form-control" placeholder="Comfirm" name="confirmpassword" required>
                            </div>
							<div class="form-group mb-3">
                                <label class="label" for="confirm">choses picture </label>
                                <input type="file" class="form-control"  name="img" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="submit" value="Register">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div> -->
                            </div>
		            </form>
		          <p class="text-center">Not a member? <a href="init.php?page=login">Sign in</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../public/js2/jquery.min.js"></script>
  <script src="../public/js2/popper.js"></script>
  <script src="../public/js2/bootstrap.min.js"></script>
  <script src="../public/js2/main.js"></script>

	</body>
</html>

