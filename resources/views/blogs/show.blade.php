@extends('layouts.app')

@section('content')

		@if ($blog->video)

			<section class="ds ms">
				<div class="container">
					<div class="row columns_padding_0">
						<div class="col-sm-12">
							<div class="embed-responsive embed-responsive-3by2">
								<a href="https://www.youtube.com/embed/{{ $blog->video }}" class="embed-placeholder">
									<img src="https://img.youtube.com/vi/{{ $blog->video }}/0.jpg" style="width: 100%;" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		@endif



		<section class="ds section_padding_top_75 section_padding_bottom_100 columns_padding_25">
			<div class="container">
				<div class="row">


					<div class="col-sm-7 col-md-8 col-lg-8">

						<article class="single-post vertical-item big-padding with_background bottom_color_border">

							@if ($blog->image)
								<div class="entry-thumbnail item-media">
									<img src="{{ $blog->image }}" alt="">
								</div>
							@endif

							<div class="item-content">

								<header class="entry-header">

									<div class="entry-meta item-meta">
										<span class="content-justify small-text lusitana">
											<span class="entry-date greylinks">
												<a href="#" rel="bookmark">
													<time class="entry-date" datetime="{{ $blog->created_at }}">
														{{ $blog->created_at }}
													</time>
												</a>
											</span>
											{{-- <span class="categories-links highlightlinks">
												<a href="#">Fashion</a>
											</span> --}}
										</span>
									</div>
									<!-- .entry-meta -->

									<h1 class="entry-title">
										{{ $blog->title }}
									</h1>

								</header>
								<!-- .entry-header -->

								<div class="entry-content">
									{!! $blog->template !!}

								</div>
								<!-- .entry-content -->

							</div>
							<!-- .item-content -->

						</article>


						{{-- <div class="author-meta side-item content-padding with_background">

							<div class="row">

								<div class="col-md-4">
									<div class="item-media">
										<img src="images/team_square/01.jpg" alt="">
									</div>
								</div>

								<div class="col-md-8">
									<div class="item-content">
										<h4>Jeffrey Cobb</h4>

										<p>Short ribs corned beef t-bone cupim shankle, landjaeger pig shoulder prosciutto ham hock ball tip drumstick. Cupim strip steak swine meatloaf sausage kevin.</p>
										<!-- <div class="author-social"> -->
										<div class="lightgreylinks">
											<a href="#" class="social-icon soc-facebook"></a>
											<a href="#" class="social-icon soc-twitter"></a>
											<a href="#" class="social-icon soc-google"></a>
										</div>

									</div>
								</div>

							</div>
						</div> --}}





						<div class="row columns_padding_5 page-nav">

							@if ($prevBlog)
								<div class="col-md-6">
									<div class="with_padding_small text-center ds bg_teaser after_cover darkgrey_bg">
										<img src="{{ $prevBlog->image }}" alt="">
										<div class="item-content">
											<div class="small-text highlightlinks">
												<a href="/blogs/{{ $prevBlog->id }}">Prev</a>
											</div>
											<h4>
												<a href="/blogs/{{ $prevBlog->id }}" rel="bookmark">{{ $prevBlog->title }}</a>
											</h4>
										</div>
										<!-- eof .item-content -->
									</div>
								</div>
							@endif

							@if ($nextBlog)
								<div class="col-md-6">
									<div class="with_padding_small text-center ds bg_teaser after_cover darkgrey_bg">
										<img src="{{ $nextBlog->image }}" alt="">
										<div class="item-content">
											<div class="small-text highlightlinks">
												<a href="/blogs/{{ $nextBlog->id }}">Next</a>
											</div>
											<h4>
												<a href="/blogs/{{ $nextBlog->id }}" rel="bookmark">{{ $nextBlog->title }}</a>
											</h4>
										</div>
										<!-- eof .item-content -->
									</div>
								</div>
							@endif

							{{-- <div class="col-md-6">
								<div class="with_padding_small text-center ds bg_teaser after_cover darkgrey_bg">
									<img src="images/gallery/03.jpg" alt="">
									<div class="item-content">
										<div class="small-text highlightlinks">
											<a href="blog-single-right.html">Next</a>
										</div>
										<h4>
											<a href="blog-single-right.html" rel="bookmark">Natural Home Treatment For Cellulite</a>
										</h4>
									</div>
									<!-- eof .item-content -->
								</div>
							</div> --}}

						</div>


					</div>
					<!--eof .col-sm-8 (main content)-->

					<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4">


							<div class="widget widget_apsc_widget">
								<h3 class="widget-title">Get In Touch</h3>
								<div class="apsc-icons-wrapper clearfix apsc-theme-4">
									<div class="apsc-each-profile">
										<a class="apsc-facebook-icon clearfix" href="https://www.facebook.com/{{ config('nmbg.social.facebook') }}">
											<div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebook</span>
												</span>
											</div>
										</a>
									</div>
									<div class="apsc-each-profile">
										<a class="apsc-twitter-icon clearfix" href="https://www.twitter.com/{{ config('nmbg.social.twitter') }}">
											<div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
											</div>
										</a>
									</div>
									<div class="apsc-each-profile">
										<a class="apsc-google-plus-icon clearfix" href="https://www.google.com/+{{ config('nmbg.social.google') }}">
											<div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-googlePlus fa fa-google-plus"></i>
													<span class="media-name">google+</span>
												</span>
											</div>
										</a>
									</div>
									<div class="apsc-each-profile">
										<a class="apsc-instagram-icon clearfix" href="https://www.instagram.com/{{ config('nmbg.social.instagram') }}">
											<div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-instagram fa fa-instagram"></i>
													<span class="media-name">Instagram</span>
												</span>
											</div>
										</a>
									</div>

								</div>

							</div>


							<div class="widget widget_mailchimp">

								<h3 class="widget-title">Newsletter</h3>

								<form class="signup form-inline" action="./" method="get">
									<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Email Address">
									</div>
									<button type="submit" class="theme_button">Send</button>
									<div class="response"></div>
								</form>

								<p>
								Subscribe to our Newsletter right now to be updated. We promice not to spam!
							</p>

							</div>

							<div class="widget widget_flickr">

								<h3 class="widget-title">Instagram Shots</h3>
								<ul>
									@foreach ($pictures as $picture)
										<li>
											<a href="{{ $picture->link }}" target="_blank">
												<img src="{{ $picture->images->thumbnail->url }}"></li>
											</a>
										</li>
									@endforeach
								</ul>
							</div>


						</aside>
						<!-- eof aside sidebar -->
				</div>
			</div>
		</section>
@endsection
