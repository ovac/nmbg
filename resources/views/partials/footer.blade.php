<footer class="page_footer ds ms section_padding_top_75 section_padding_bottom_65 columns_padding_25">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="widget">
					<h3 class="widget-title">Our Contacts</h3>

					{{-- <section class="page_map bottommargin_30" data-address="Terracina, LT, Italia">
						<!-- marker description and marker icon goes here -->
						<div class="map_marker_description">
							<h3>Map Title</h3>
							<p>Map description text</p>
							<img class="map_marker_icon" src="images/map_marker_icon_small.png" alt="">
						</div>
					</section> --}}

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

				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				{{-- <div class="widget">
					<h3 class="widget-title">Working Hours</h3>
					<ul class="list1 no-bullets big-padding">
						<li class="content-justify">
							<span>Monday - Friday</span>
							<span>9 a.m. - 6 p.m.</span>
						</li>
						<li class="content-justify">
							<span>Saturday</span>
							<span>10 a.m. - 8 p.m.</span>
						</li>
						<li class="content-justify">
							<span>Sunday</span>
							<span>Closed</span>
						</li>
					</ul>
				</div> --}}

				<div class="widget widget_mailchimp">

					<h3 class="widget-title">Newsletter Signup</h3>

					<form class="signup form-inline" action="./" method="get">
						<div class="form-group">
							<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email Address">
						</div>
						<button type="submit" class="theme_button">Send</button>
						<div class="response"></div>
					</form>

				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				{{-- <div class="widget widget_banner">

					<h3 class="widget-title">Banner Ad</h3>
					<div class="vertical-item content-absolute ds">
						<div class="item-media">
							<img src="images/banner.jpg" alt="">
							<div class="media-links">
								<a href="#" class="abs-link"></a>
							</div>
						</div>
						<div class="item-content">
							<span class="main_bg_color2">
								visit
							</span>
							<h3>
								Model
								<br> Courses
							</h3>
						</div>
					</div>

				</div> --}}

				<div class="widget">
					<h3 class="widget-title">Follow Us</h3>
					<p class="greylinks">
						<a
							class="social-icon border-icon round soc-facebook"
							href="https://www.facebook.com/{{ config('nmbg.social.facebook') }}"
							title="Facebook"
						></a>
						<a
							class="social-icon border-icon round soc-twitter"
							href="https://www.twitter.com/{{ config('nmbg.social.twitter') }}"
							title="Twitter"
						></a>
						<a
							class="social-icon border-icon round soc-google"
							href="https://www.google.com/+{{ config('nmbg.social.google') }}"
							title="Google"
						></a>
						<a
							class="social-icon border-icon round soc-linkedin"
							href="https://www.linkedin.com/in/{{ config('nmbg.social.linkedin') }}"
							title="LinkedIn"
						></a>
						<a
							class="social-icon border-icon round soc-pinterest"
							href="https://www.pinterest.com/{{ config('nmbg.social.pinterest') }}"
							title="Pinterest"
						></a>
					</p>
				</div>
			</div>

		</div>
	</div>
</footer>

@include('partials.copy')
