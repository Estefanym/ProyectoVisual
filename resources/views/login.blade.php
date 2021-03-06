<!DOCTYPE html>
<html> 
<head>
	<title>Login</title>
	<link rel="icon"  href="{{asset('/img/engranajes.png')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<style>
    	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #28292a !important;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: rgba(22, 83, 137, 0.459);
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 140px;
			width: 140px;
			top: -75px;
			border-radius: 50%;
			/*border-radius: 25%;*/
			background: #28292a;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 120px;
			width: 120px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 50px;
			color: white;
		}
		.login_btn {
			width: 100%;
			background: #0d6efd !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #0d6efd !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #0d6efd !important;
			
		}
</style>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('/img/engranajes.png')}}" class="brand_logo" alt="Logo" >
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="{{url('/admin/index')}}" method="POST">
                        @csrf
						<div id="TituloForm" style="text-align: center;">
							<p><b>Bienvenido Administrador</b><br>Por favor ingrese sus credenciales.</p>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div> 
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Correo">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                                           
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Contrase??a">
                        </div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
								 <a class="btn login_btn" type="submit" href="{{ url("/admin") }}">Login</a>
				   		</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links" >
						<a href="#">Forgot your password?</a>
					</div>
				</div>
				@isset($mensaje)
				<div id="error" style="text-align: center; color: rgb(230, 18, 18);">
					<p>Error:{{$mensaje}}</p>
				</div>
				@endisset
			</div>
		</div>
	</div>
</body>
</html>