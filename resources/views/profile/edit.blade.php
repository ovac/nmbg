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

					<form class="form-horizontal">
						<div class="row flex-row">
							<div class="col-md-6">

								<div class="with_border with_padding">

									<h4>User info</h4>

									<hr>

									<div class="row form-group">
										<label class="col-lg-3 control-label" for="user-profile-avatar">Select Avatar</label>
										<div class="col-lg-9">
											<input type="file" id="user-profile-avatar">
											<p class="help-block">Select your 200x200px avatar</p>

										</div>
									</div>


									<div class="row form-group">
										<label class="col-lg-3 control-label">Country:</label>
										<div class="col-lg-9">
											<select class="form-control">
												<option selected="">Select Country</option>
												<option>USA</option>
												<option>United Kingdom</option>
												<option>Australia</option>
												<option>Germany</option>
												<option>France</option>
												<option>Other</option>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Company name:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Position:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>

								</div>
								<!-- .with_border -->

							</div>
							<!-- .col-* -->

							<div class="col-md-6">
								<div class="with_border with_padding">

									<h4>Contact info</h4>

									<hr>


									<div class="row form-group">
										<label class="col-lg-3 control-label">Work number:</label>
										<div class="col-lg-9">
											<input type="tel" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Mobile number:</label>
										<div class="col-lg-9">
											<input type="tel" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">E-mail address:</label>
										<div class="col-lg-9">
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Work address:</label>
										<div class="col-lg-9">
											<textarea rows="2" class="form-control"></textarea>
										</div>
									</div>


								</div>
								<!-- .with_border -->
							</div>
							<!-- .col-* -->

						</div>
						<!-- .row -->

						<div class="row flex-row">
							<div class="col-md-6">
								<div class="with_border with_padding">

									<h4>Security</h4>

									<hr>

									<div class="row form-group">
										<label class="col-lg-3 control-label">Old password:</label>
										<div class="col-lg-9">
											<input type="password" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">New password:</label>
										<div class="col-lg-9">
											<input type="password" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Repeat New password:</label>
										<div class="col-lg-9">
											<input type="password" class="form-control">
										</div>
									</div>


								</div>
								<!-- .with_border -->

							</div>
							<!-- .col-* -->
							<div class="col-md-6">
								<div class="with_border with_padding">

									<h4>Social Networks</h4>

									<hr>

									<div class="row form-group">
										<label class="col-lg-3 control-label">FaceBook:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Twitter:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">LinkedIn:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="row form-group">
										<label class="col-lg-3 control-label">Instagram:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control">
										</div>
									</div>

								</div>
								<!-- .with_border -->
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
