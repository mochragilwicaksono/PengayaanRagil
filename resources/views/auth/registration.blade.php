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
							<label class="floating-label" for="nama_penumpang">Nama</label>
							<input type="text" class="form-control" name="nama_penumpang" placeholder="">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="alamat">Alamat</label>
							<input type="text" class="form-control" name="alamat" placeholder="">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="telepon">Telepon</label>
							<input type="number" class="form-control" name="telepon" placeholder="">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="jeni_kelamin"></label>
							<div class="Input-group input-group-merge">
                                <select id="jeni_kelamin" class="form-control" name="jeni_kelamin">
                                <option value="">Jenis Kelamin</option>
                                <option value="0">Laki - Laki</option>
                                <option value="1">Perempuan</option>	
                                </select>
                            </div>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="tanggal_lahir"></label>
							<input type="date" class="form-control" name="tanggal_lahir" placeholder="">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="username">Username</label>
							<input type="text" class="form-control" name="username" placeholder="">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="">
						</div>
						<button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="login" class="f-w-400">Signin</a></p>
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
