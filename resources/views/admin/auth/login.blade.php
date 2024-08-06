<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>تسجيل الدخول</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/2.0.1/css/ionicons.min.css') }}">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/SansPro/SansPro.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">تسجيل الدخول</p>
			<form action="{{ route('admin.login') }}" method="POST">
				@csrf
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				@error('username')
				<span class="text-danger">{{ $message }}</span>
				@enderror
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				@error('password')
				<span class="text-danger">{{ $message }}</span>
				@enderror
				<div class="row">
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
