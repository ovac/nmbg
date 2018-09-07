@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-12">
					<h3>User
						<small>profile</small>
					</h3>
				</div>
			</div>
			<!-- .row -->


			<div class="row">
				<div class="col-md-9">


					<div class="row">
						<!-- User Bio -->
						<div class="col-xs-12 col-sm-12">

							<div class="with_border with_padding">
								<div class="media big-left-media">
									<div class="media-left">
										<img src="{{ auth()->user()->profile->avatar }}" alt="...">
									</div>
									<div class="media-body">
										<h4>
											{{ auth()->user()->name }}
											<br>
											<small>ID: {{ auth()->user()->id }}</small>
										</h4>
										<p>
											{{ auth()->user()->profile->about }}
										</p>
									</div>
								</div>
							</div>
							<!-- .with_border -->
						</div>
						<!-- .col-* -->

					</div>
					<!-- .row -->

					<div class="row">

						<!-- User Info -->
						<div class="col-xs-12 col-md-6">
							<div class="with_border with_padding">
								<h4>
									User Info
								</h4>

								<ul class="list1 no-bullets">
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-warning round fontsize_16">
													<i class="fa fa-globe"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Location:
												</strong>
												{{ auth()->user()->profile->address }}
											</div>
										</div>
									</li>
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-success round fontsize_16">
													<i class="fa fa-flag"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Sponsor:
												</strong>
												{{ auth()->user()->profile->sponsor }}
											</div>
										</div>
									</li>
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-info round fontsize_16">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Position:
												</strong>
													{{ 'N/A' }}
											</div>
										</div>
									</li>
								</ul>

							</div>
							<!-- .with_border -->
						</div>
						<!-- col-* -->

						<!-- User Statistics -->
						<div class="col-xs-12 col-md-6">
							<div class="with_border with_padding">
								<h4>
									User Statistics
								</h4>

								<ul class="list1 no-bullets">
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-success fontsize_16">
													<i class="fa fa-comments"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Comments:
												</strong>
												146
											</div>
										</div>
									</li>
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-info fontsize_16">
													<i class="fa fa-calendar"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Member sicne:
												</strong>
												12/10/2014
											</div>
										</div>
									</li>
									<li>
										<div class="media small-teaser">
											<div class="media-left media-middle">
												<div class="teaser_icon label-warning fontsize_16">
													<i class="fa fa-bolt"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<strong class="grey">
													Last activity:
												</strong>
												2 days ago
											</div>
										</div>
									</li>

								</ul>

							</div>
							<!-- .with_border -->
						</div>
						<!-- col-* -->
					</div>
					<!-- .row -->


					{{-- <div class="row">

						<!-- Latest Comments -->
						<div class="col-xs-12 col-md-6">

							<div class="with_border with_padding">
								<h4>
									Latest User Comments
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>2 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>5 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>1 day ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="admin_comments.html">View All</a>
								</div>
							</div>
							<!-- .with_border -->
						</div>
						<!-- .col-* -->

						<div class="col-xs-12 col-md-6">
							<!-- Latest Posts -->
							<div class="with_border with_padding">
								<h4>
									Latest User Posts
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>2 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>5 hours ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														Ann Andersen
														<small>1 day ago</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="admin_posts.html">View All</a>
								</div>
							</div>
						</div>
						<!-- .col-* -->

					</div> --}}
					<!-- .row -->
				</div>
				<!-- .col-* left column -->

				<div class="col-xs-12 col-md-3">

					<div class="row">
						<div class="col-sm-12">
							<div class="panel-group bottommargin_0" id="contact-info-accordion">

								{{-- <div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse1">
												<i class="highlight fontsize_16 fa fa-phone"></i>
												Work Phone
											</a>
										</h4>
									</div>
									<div id="user-info-collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>
									<strong>1-010-442-233-11</strong> (07:00-17:00 EST Mon-Fri)
								</p>
										</div>
									</div>
								</div> --}}
								<!-- .panel -->

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse2">
												<i class="highlight fontsize_16 fa fa-mobile"></i>
												Mobile Phone
											</a>
										</h4>
									</div>
									<div id="user-info-collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>
												<strong>{{ auth()->user()->profile->phone }}</strong>
											</p>
										</div>
									</div>
								</div>
								<!-- .panel -->

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse3">
												<i class="highlight fontsize_16 fa fa-envelope"></i>
												E-mail address
											</a>
										</h4>
									</div>
									<div id="user-info-collapse3" class="panel-collapse collapse">
										<div class="panel-body">

											<p class="greylinks">
									<a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
								</p>
										</div>
									</div>
								</div>
								<!-- .panel -->

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse4">
												<i class="highlight fontsize_16 fa fa-map-marker"></i>
												Address
											</a>
										</h4>
									</div>
									<div id="user-info-collapse4" class="panel-collapse collapse">
										<div class="panel-body">

											<p>
												{{ auth()->user()->address }}
											</p>
										</div>
									</div>
								</div>
								<!-- .panel -->

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="icon-tab collapsed" data-toggle="collapse" data-parent="#contact-info-accordion" href="#user-info-collapse5">
												<i class="highlight fontsize_16 fa fa-users"></i>
												Social Networks
											</a>
										</h4>
									</div>
									<div id="user-info-collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											@if (auth()->user()->social)
												<p>
													<a href="https://www.facebook.com/{{ auth()->user()->social->facebook ?: '' }}" class="social-icon soc-facebook"></a>
													<a href="https://www.twitter.com/{{ auth()->user()->social->twitter ?: '' }}" class="social-icon soc-twitter"></a>
													<a href="https://www.google.com/+{{ auth()->user()->social->google ?: '' }}" class="social-icon soc-google"></a>
													<a href="https://www.linkedin.com/{{ auth()->user()->social->linkedin ?: '' }}" class="social-icon soc-linkedin"></a>
													<a href="https://www.instagram.com/{{ auth()->user()->social->instagram ?: '' }}" class="social-icon soc-instagram"></a>
													<a href="https://www.instagram.com/{{ auth()->user()->social->instagram ?: '' }}" class="social-icon soc-instagram"></a>
												</p>
											@endif

										</div>
									</div>
								</div>
								<!-- .panel -->

							</div>
							<!-- .panel-group -->
						</div>
						<!-- .col-* -->
						{{-- <div class="col-sm-12">
							<div class="with_border with_padding">

								<form method="post" action="./">
									<div class="wrap-forms">
										<div class="row">
											<div class="col-xs-12">
												<h4>Send Message</h4>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group has-placeholder">
													<label for="form-id-1">Name
														<sup>*</sup>
													</label>
													<input class="form-control" type="text" name="name" placeholder="Name" value="" id="form-id-1" required="required">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group has-placeholder">
													<label for="form-id-2">Phone
														<sup>*</sup>
													</label>
													<input class="form-control" type="text" name="phone" placeholder="Phone" value="" id="form-id-2" required="required">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group has-placeholder">
													<label for="form-id-3">Email
														<sup>*</sup>
													</label>
													<input class="form-control" type="text" name="email" placeholder="Email Address" value="" id="form-id-3" required="required">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group has-placeholder">
													<label for="form-id-4">Message
														<sup>*</sup>
													</label>
													<textarea class="form-control" name="message" placeholder="Message" id="form-id-4" required="required"></textarea>
												</div>
											</div>
										</div>
										<div class="row"></div>
									</div>
									<div class="wrap-forms">
										<div class="row">
											<div class="col-sm-12">
												<input class="theme_button wide_button color1" type="submit" value="Send Message">
												<input class="theme_button wide_button" type="reset" value="Clear">
											</div>
										</div>
									</div>
								</form>

							</div>
							<!-- .with_padding -->
						</div> --}}
						<!-- .col -->
					</div>
					<!-- .row -->
				</div>
				<!-- .col-* right column -->
			</div>
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>
@endsection
