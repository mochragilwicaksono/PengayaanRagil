<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                    <form action="{{ route('register.custom') }}" method="POST">
                    @csrf
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Registrasi</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="nama_petugas">Nama Petugas</label>
							<input type="text" class="form-control" id="nama_petugas" placeholder="">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password" placeholder="">
						</div>
                        <div class="form-group mb-3">
							<label class="floating-label" for="id_level">level</label>
							<div class="Input-group input-group-merge">
                                <select id="id_level" class="form-control" name="id_level">
                                <option value="">...</option>
                                <option value="">Petugas</option>
                                <option value="">Penumpang</option>
                                </select>
                                <span class="input-group-text cursor-point"><i class="bx bx-hide"></i>/span>
                            </div>
						</div>

						<button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
