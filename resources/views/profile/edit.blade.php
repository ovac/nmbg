@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-12">
					<h3>Edit User
						<small>profile</small>
					</h3>
				</div>
			</div>
			<!-- .row -->


			<div class="row">
				<div class="col-xs-12">
						<div class="row flex-row">
							<div class="col-md-6">

								<div class="with_border with_padding">

									<h4>User info</h4>

									<hr>

									<form method="POST" action="/profile/update">
										@csrf
										@method('PUT')
										<input type="hidden" name="update_profile">

										<div class="row form-group">
											<label class="col-lg-3 control-label" for="user-profile-avatar">Select Avatar</label>
											<div class="col-lg-9">
												<input type="file" name="avatar" id="user-profile-avatar" class="form-control">
												<p class="help-block">Select your avatar</p>

											</div>
										</div>

										<div class="row form-group">
											<label class="col-lg-3 control-label">School/Institution:</label>
											<div class="col-lg-9">
												<input type="text" name="name_of_institution" value="{{ old('name_of_institution') ?: $profile->name_of_institution }}" class="form-control">
											</div>
										</div>

										<div class="row form-group">
											<label class="col-lg-3 control-label">Programme:</label>
											<div class="col-lg-9">
												<input type="text" name="programme" value="{{ old('programme') ?: $profile->programme }}" class="form-control">
											</div>
										</div>

										<div class="row form-group">
											<label class="col-lg-3 control-label">Level:</label>
											<div class="col-lg-9">
												<input type="text" name="level" value="{{ old('level') ?: $profile->level }}" class="form-control">
											</div>
										</div>

										<div class="row">

											<label class="col-lg-3 control-label"></label>
											<div class="col-lg-9">
												<button type="submit" class="theme_button wide_button">Save</button>
											</div>
										</div>
										<!-- .row -->
									</form>
								</div>
								<!-- .with_border -->

							</div>
							<!-- .col-* -->

							<div class="col-md-6">
								<div class="with_border with_padding">

									<h4>Account info</h4>

									<hr>
										<form method="POST" action="/profile/update">
											@csrf
											@method('PUT')
											<input type="hidden" name="update_account">

											<div class="row form-group validate-required" id="first_name_field" >
												<label class="col-lg-3 control-label" for="first_name">
													<span class="grey">First Name:</span>
													<span class="required">*</span>
												</label>

												<div class="col-lg-9">
													<input type="text" class="form-control " name="first_name" id="first_name" placeholder=""  value="{{ old('first_name') ?: $user->first_name}}"tabindex="1">
												</div>
											</div>

											<div class="row form-group validate-required" id="last_name_field" >
												<label class="col-lg-3 control-label" for="last_name">
													<span class="grey">Last Name:</span>
													<span class="required">*</span>
												</label>

												<div class="col-lg-9">
													<input type="text" class="form-control " name="last_name" id="last_name" placeholder=""  value="{{ old('last_name') ?: $user->last_name }}"tabindex="2">
												</div>
											</div>

											<div class="row form-group validate-required validate-phone" id="phone_field">
												<label class="col-lg-3 control-label" for="phone">
													<span class="grey">Phone:</span>
													<span class="required">*</span>
												</label>

												<div class="col-lg-9">
													<input type="text" class="form-control " name="phone" id="phone" placeholder=""  value="{{ old('phone') ?: $user->phone }}"tabindex="3">
												</div>
											</div>

											<div class="row form-group validate-required validate-email" id="email_field">
												<label class="col-lg-3 control-label" for="email">
													<span class="grey">Email Address:</span>
													<span class="required">*</span>
												</label>
												<div class="col-lg-9">
													<input type="text" class="form-control " name="email" id="email" placeholder=""  value="{{ old('email') ?: $user->email }}"tabindex="4">
												</div>
											</div>

											<div class="row form-group address-field validate-required" id="address_fields">
												<label class="col-lg-3 control-label" for="address">
													<span class="grey">Address:</span>
													<span class="required">*</span>
												</label>

												<div class="col-lg-9">
													<input type="text" class="form-control " name="address" id="address" placeholder=""  value="{{ old('address') ?: $user->address }}"tabindex="5">
												</div>
											</div>

											<div class="row">

												<label class="col-lg-3 control-label"></label>
												<div class="col-lg-9">
													<button type="submit" class="theme_button wide_button">Save</button>
												</div>
											</div>
											<!-- .row -->
									</form>
								</div>
								<!-- .with_border -->
							</div>
							<!-- .col-* -->

						</div>
						<!-- .row -->

						<div class="row flex-row">
							<div class="col-md-6">

								<form method="POST" action="/profile/update">
									@csrf
									@method('PUT')
									<input type="hidden" name="update_password">
									<div class="with_border with_padding">

										<h4>Security</h4>

										<hr>

										<div class="row form-group">
											<label class="col-lg-3 control-label">Old password:</label>
											<div class="col-lg-9">
												<input type="password" name="old_password" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-lg-3 control-label">New password:</label>
											<div class="col-lg-9">
												<input type="password" name="password" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-lg-3 control-label">Confirm password:</label>
											<div class="col-lg-9">
												<input name="password_confirmation" type="password" class="form-control">
											</div>
										</div>


										<div class="row">

											<label class="col-lg-3 control-label"></label>
											<div class="col-lg-9">
												<button type="submit" class="theme_button wide_button">Save</button>
											</div>
										</div>
										<!-- .row -->
									</div>
								</form>
								<!-- .with_border -->

							</div>
							<!-- .col-* -->
							<div class="col-md-6">
								<form method="POST" action="/profile/update">
									@csrf
									@method('PUT')
									<input type="hidden" name="update_social">
									<div class="with_border with_padding">

										<h4>Social Networks</h4>

										<hr>

										<div class="row form-group">
											<label class="col-lg-3 control-label">FaceBook:</label>
											<div class="col-lg-9">
												<input type="text" name="facebook" value="{{ $social->facebook }}" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-lg-3 control-label">Twitter:</label>
											<div class="col-lg-9">
												<input type="text" name="twitter" value="{{ $social->twitter }}" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-lg-3 control-label">LinkedIn:</label>
											<div class="col-lg-9">
												<input type="text"  name="linkedin" value="{{ $social->linkedin }}"class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<label class="col-lg-3 control-label">Instagram:</label>
											<div class="col-lg-9">
												<input type="text"  name="instagram" value="{{ $social->instagram }}"class="form-control">
											</div>
										</div>

										<div class="row">

											<label class="col-lg-3 control-label"></label>
											<div class="col-lg-9">
												<button type="submit" class="theme_button wide_button">Save</button>
											</div>
										</div>
										<!-- .row -->
									</div>
									<!-- .with_border -->
								</form>
							</div>
							<!-- .col-* -->
						</div>
						<!-- .row -->


						<div class="row">
							<div class="col-sm-12">
								<div>

									<button type="submit" class="theme_button wide_button">Submit</button>
									<a href="admin_profile.html" class="theme_button color2">Cancel</a>

								</div>

							</div>

						</div>
						<!-- .row -->
					</form>
				</div>
				<!-- .col-* main column -->

			</div>
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection


@section('active-page')
	<li>
		<a href="/profile">Profile</a>
	</li>

	<li class="active">
		<a href="#">Editing Profile</a>
	</li>
@endsection
