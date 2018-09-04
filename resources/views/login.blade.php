@extends('layouts.app')

@section('content')
	<!-- template sections -->
	<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
					<div class="with_border with_padding">

						<h4 class="text-center">
							Sign In to Your Account
						</h4>
						<hr class="bottommargin_30">
						<div class="wrap-forms">
							<form action="{{ route('login') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder">
											<label for="login-email">Email address</label>
											<i class="grey fa fa-envelope-o"></i>
											<input type="email" class="form-control" id="login-email" name="email" placeholder="Email Address">
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group has-placeholder">
											<label for="login-password">Password</label>
											<i class="grey fa fa-pencil-square-o"></i>
											<input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="checkbox">
											<input type="checkbox" id="remember_me_checkbox">
											<label for="remember_me_checkbox">Rememrber Me
											</label>
										</div>
									</div>
								</div>
								<button type="submit" class="theme_button block_button color1">Log In</button>
							</form>
						</div>

						<div class="darklinks text-center topmargin_20">

							<a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">
					Forgot your password?
				</a>

						</div>
						<div class="collapse form-inline-button" id="signin-resend-password">
							<form class="form-inline topmargin_20">
								<div class="form-group">
									<label class="sr-only">Enter your e-mail</label>
									<input type="email" class="form-control" placeholder="E-mail">
								</div>
								<button type="submit" class="theme_button with_icon">
									<i class="fa fa-share"></i>
								</button>
							</form>
						</div>


					</div>
					<!-- .with_border -->

					<p class="divider_20 text-center">
			Not registered? <a href="/register">Register today.</a>.<br>
			or go <a href="./">Home</a>
		</p>

				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>
@endsection
