@extends('layouts.app')

@section('content')
	<section class="page_breadcrumbs ds parallax section_padding_75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Contact Us</h2>
					<ol class="breadcrumb greylinks">
						<li>
							<a href="/">Home</a>
						</li>
						<li class="active">Contact Us</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	{{-- <section class="ds page_map" data-address="Terracina, LT, Italia">
		<!-- marker description and marker icon goes here -->
		<div class="map_marker_description">
			<h3>Map Title</h3>
			<p>Map description text</p>
			<img class="map_marker_icon" src="images/map_marker_icon.png" alt="">
		</div>
	</section> --}}

	<section class="ds columns_padding_25 section_padding_top_75 section_padding_bottom_75 columns_margin_bottom_30">
		<div class="container">
			<div class="row">

				<div class="col-md-8 to_animate" data-animation="scaleAppear">

					<h2>Contact Form</h2>

					<form class="contact-form row columns_padding_10 columns_margin_bottom_10" method="post" action="./">


						<div class="col-sm-6">
							<div class="form-group margin_0">
								<label for="name">Full Name
									<span class="required">*</span>
								</label>
								<i class="fa fa-user" aria-hidden="true"></i>
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group margin_0">
								<label for="subject">Subject
									<span class="required">*</span>
								</label>
								<i class="fa fa-comment" aria-hidden="true"></i>
								<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group margin_0">
								<label for="phone">Phone
									<span class="required">*</span>
								</label>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone number">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group margin_0">
								<label for="email">Email address
									<span class="required">*</span>
								</label>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email address">
							</div>
						</div>
						<div class="col-sm-12">

							<div class="form-group margin_0">
								<label for="message">Message</label>
								<i class="fa fa-folder-open" aria-hidden="true"></i>
								<textarea aria-required="true" rows="9" cols="45" name="message" id="message" class="form-control" placeholder="Message..."></textarea>
							</div>
						</div>

						<div class="col-sm-12">

							<div class="contact-form-submit topmargin_10">
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color2 inverse">Submit</button>
								<button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button inverse">Clear</button>
							</div>
						</div>


					</form>
				</div>
				<!--.col-* -->

				<div class="col-md-4 to_animate" data-animation="scaleAppear">

					<h2>Contact Info</h2>

					<div class="media small-teaser">
						<div class="media-left">
							<i class="fa fa-globe highlight2"></i>
						</div>
						<div class="media-body">
							<a href="http://{{ config('nmbg.contact.address') }}">{{ config('nmbg.contact.address') }}</a>
						</div>
					</div>

					<div class="media small-teaser">
						<div class="media-left">
							<i class="fa fa-phone highlight2"></i>
						</div>
						<div class="media-body">
							@foreach (explode(', ', config('nmbg.contact.phone')) as $phone)
								<a href="tel:{{ $phone }}">{{ $phone }}{{ $loop->last ? '' : ', ' }}</a>
							@endforeach
						</div>
					</div>

					<div class="media small-teaser">
						<div class="media-left">
							<i class="fa fa-envelope highlight2"></i>
						</div>
						<div class="media-body underlined-links greylinks">
							<a href="mailto:{{ config('nmbg.contact.email') }}">{{ config('nmbg.contact.email') }}</a>
						</div>
					</div>

					{{-- <div class="media small-teaser inline-block">
						<div class="media-left">
							<i class="fa fa-clock-o highlight2"></i>
						</div>
						<div class="media-body">
							Monday - Friday 9 a.m. - 8 p.m.
						</div>
					</div> --}}

				</div>
				<!--.col-* -->

			</div>
			<!--.row -->

		</div>
		<!--.container -->

	</section>
@endsection
