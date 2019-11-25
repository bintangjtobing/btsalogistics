
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BTSA LOGISTICS | Restricted Area System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" href="{!! url('https://res.cloudinary.com/btsa-co-id/image/upload/v1541503574/jscsstxtfiledll/icon/starlogo.ico')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/bootstrap/css/bootstrap.min.css')!!}">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/animate/animate.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/css-hamburgers/hamburgers.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/animsition/css/animsition.min.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/select2/select2.min.css')!!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!!asset('vendor/daterangepicker/daterangepicker.css')!!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!!asset('css/util.css')!!}">
	<link rel="stylesheet" type="text/css" href="{!!asset('css/main.css')!!}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url(https://res.cloudinary.com/btsa-co-id/image/upload/v1541503541/jscsstxtfiledll/img/jumbotroncity1.jpg);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
			@if(session('sukses'))
			<div class="alert alert-success alert-dismissible fade show">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	 <strong>Successfull!</strong> {{session('sukses')}}
			 </div>
				@elseif(session('gagal'))
				<div class="alert alert-danger" role="alert">{{session('gagal')}}</div>
				@endif
				<form action="/postlogin" method="POST" class="login100-form validate-form p-b-33 p-t-5">
					{{ csrf_field() }}
					<div class="wrap-input100" data-validate = "Enter email format">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn mr-2">
							Login
						</button>
						<a href="/" class="login100-form-btn"><i class="fas fa-home mr-1"></i> Home</a>
						<p class="text-muted mt-2">Not registered yet? <a href="#registered" data-toggle="modal" data-target="#registered">Create an account to sign in</a></p>
					</div>
					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<!-- Modal -->
<div class="modal fade" id="registered" tabindex="-1" role="dialog" aria-labelledby="registered" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	  <div class="modal-content">
		 <form action="/member/registered" method="POST">
			  {{ csrf_field() }}
			  <div class="modal-header">
						 <h5 class="modal-title" id="additem">Register your new account!</h5>
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						 </button>
					  </div>
					  <div class="modal-body">
						 <div class="card-body">
							  <div class="basic-elements">
									<div class="row">
										 <div class="col-md-12">
													<div class="form-group col-sm-12">
															  <label for="nama_lengkap">Nama Lengkap</label>
															  <input type="text" class="form-control" name="nama_lengkap" autofocus>
													</div>
													
														<div class="form-group col-sm-12">
															<label for="username">Username</label>
															<input type="text" class="form-control" name="username">
													  </div>
													  <div class="form-row form-group col-12">
														<div class="col">
															<label for="email">Email</label>
														  <input type="text" name="email" class="form-control" value="">
														</div>
														<div class="col">
															<label for="password">Password</label>
														  <input type="password" name="password" class="form-control" value="">
														</div>
													 </div>
													<div class="form-group col-sm-12">
														 <label for="role">Tipe user</label>
														 <select name="role" id="role" class="form-control">
															  <option value="#" disabled selected>Select type of item</option>
															  <option value="administrator">Administrator</option>
															  <option value="member">Member</option>
															  <option value="legal">Legal</option>
														 </select>
													</div>
													<div class="form-group col-sm-12">
														 <label for="qty">Status</label>
														 <div class="radio">
															  <label class="radio-inline"><input type="radio" name="status" value="active" disabled> Active</label>
															  <label class="radio-inline"><input type="radio" name="status" value="inactive" disabled checked> Inactive</label>
														 </div>
													</div>
										 </div>
									</div>
							  </div>
						 </div>
					  </div>
					  <div class="modal-footer">
						 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						 <button type="submit" class="btn btn-primary">Sign In</button>
					  </div>
		 </form>
	  </div>
	</div>
</div>
	
<!--===============================================================================================-->
	<script src="{!!asset('vendor/jquery/jquery-3.2.1.min.js')!!}"></script>
	<script src="{!!url('https://kit.fontawesome.com/ae026c985d.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/animsition/js/animsition.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/bootstrap/js/popper.js')!!}"></script>
	<script src="{!!asset('vendor/bootstrap/js/bootstrap.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/select2/select2.min.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/daterangepicker/moment.min.js')!!}"></script>
	<script src="{!!asset('vendor/daterangepicker/daterangepicker.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('vendor/countdowntime/countdowntime.js')!!}"></script>
<!--===============================================================================================-->
	<script src="{!!asset('js/home/main.js')!!}"></script>

</body>
</html>