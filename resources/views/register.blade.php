@extends('layouts.app')

@section('content')
	<section class="page_breadcrumbs ds parallax section_padding_75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Online Registration</h2>
					<ol class="breadcrumb greylinks">
						<li>
							<a href="./">Home</a>
						</li>
						<li class="active">Registration</li>
					</ol>
				</div>
			</div>
		</div>
	</section>


	<section class="ds section_padding_top_100 section_padding_bottom_100">
		<div class="container">

			<div class="row">

				<form class="shop-register" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

					<div class="col-sm-6">
						<div class="form-group validate-required" id="first_name_field" >
							<label for="first_name" class="control-label">
								<span class="grey">First Name:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="first_name" id="first_name" placeholder="" value="" tabindex="1">
						</div>

						<div class="form-group validate-required validate-phone" id="phone_field">
							<label for="phone" class="control-label">
								<span class="grey">Phone:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="phone" id="phone" placeholder="" value="" tabindex="3">

						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group validate-required" id="last_name_field" >
							<label for="last_name" class="control-label">
								<span class="grey">Last Name:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="last_name" id="last_name" placeholder="" value="" tabindex="2">

						</div>

						<div class="form-group validate-required validate-email" id="email_field">
							<label for="email" class="control-label">
								<span class="grey">Email Address:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="email" id="email" placeholder="" value="" tabindex="4">

						</div>

					</div>

					<div class="col-sm-12">
						<div class="form-group username-field validate-required" id="username_fields">
							<label for="username" class="control-label">
								<span class="grey">Username:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="username" id="username" placeholder="" value="" tabindex="5">

						</div>

					</div>

					<div class="col-sm-12">
						<div class="form-group address-field validate-required" id="address_fields">
							<label for="address" class="control-label">
								<span class="grey">Address:</span>
								<span class="required">*</span>
							</label>

							<input type="text" class="form-control " name="address" id="address" placeholder="" value="" tabindex="5">

						</div>

					</div>

					<div class="col-sm-6">

						<div class="form-group" id="password_field">
							<label for="password" class="control-label">
								<span class="grey">Password:</span>
								<span class="required">*</span>
							</label>

							<input type="password" class="form-control " name="password" id="password" placeholder="" value="" tabindex="6">

						</div>


						{{-- <div class="form-group">

							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios"> Ship to this address
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios"> Ship to different address
								</label>
							</div>

						</div> --}}

					</div>

					<div class="col-sm-6">


						<div class="form-group" id="password_confirmation_field">
							<label for="password_confirmation" class="control-label">
								<span class="grey">Confirm Password:</span>
								<span class="required">*</span>
							</label>

							<input type="password" class="form-control " name="password_confirmation" id="password_confirmation" placeholder="" value="" tabindex="7">

						</div>


					</div>

					<div class="col-sm-12">

						<button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>
						<button type="reset" class="theme_button wide_button">Clear Form</button>

					</div>

				</form>


			</div>
		</div>
	</section>
@endsection
