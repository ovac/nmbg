@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container">

			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-sm-12">
						<h3>Account Activation/Subscription</h3>
					</div>
				</div>
				<!-- .row -->


				<div class="row">
					<div class="col-xs-12">

						<form method="POST" action="/subscribe">
							@csrf
							<div class="with_border with_padding">

								<h4>Subscribe via Mobile Money</h4>

								<hr>

								<div class="row form-group">
									<label class="col-lg-3 control-label">Mobile Number to bill:</label>
									<div class="col-lg-9">
										<input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
									</div>
								</div>

								<div class="row form-group">
									<label class="col-lg-3 control-label">Mobile Network:</label>
									<div class="col-lg-9">
										<select class="form-control" name="channel">
											<option selected="" value="{{ old('channel') }}">{{ old('channel') ?: 'Select Mobile Network' }}</option>
											<option value="mtn-gh">MTN-GH</option>
											<option value="airtel-gh">Airtel-GH</option>
											<option value="vodafone-gh">Vodafone Cash-GH</option>
											<option value="tigo-gh">TIGO-GH</option>
										</select>
									</div>
								</div>


								<div class="row">

									<label class="col-lg-3 control-label"></label>
									<div class="col-lg-9">
										<button type="submit" class="theme_button wide_button">Send Payment Prompt</button>
									</div>
								</div>
								<!-- .row -->
							</div>
						</form>
					</div>
					<!-- .col-* main column -->
				</div>
			</div>
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection


@section('active-page')
	<li>
		<a href="#">Subscribe</a>
	</li>

	{{-- <li class="active">
		<a href="#">Editing Profile</a>
	</li> --}}
@endsection
