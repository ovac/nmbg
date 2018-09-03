@extends('layouts.app')

@section('content')
	<section class="page_breadcrumbs ds parallax section_padding_75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>{{ $model->name }}</h2>
					<ol class="breadcrumb greylinks">
						<li>
							<a href="./">
								Home
							</a>
						</li>
						<li class="active">{{ $model->username }}</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="ds section_padding_100 columns_padding_25">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="vertical-item content-padding text-center">
						<div class="item-media">
							<img src="{{ $model->profile->avatar }}" alt="" />
						</div>
						<div class="item-content transp_gradient_bg">
							<h3 class="model-name">
								<a href="#">{{ $model->name }}</a>
							</h3>
							<p class="small-text lusitana highlight">{{ $model->username }}</p>

							<div class="fontsize_16 lusitana text-uppercase grey parameters">
								<span>
									Height
									<br>
									<span class="highlight">{{ $model->profile->height }}</span>
								</span>
								<span>
									Eyes
									<br>
									<span class="highlight">{{ $model->profile->eye_color }}</span>
								</span>
								<span>
									Hair
									<br>
									<span class="highlight">{{ $model->profile->hair_color }}</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<h3>About Model</h3>
					<p>
						{{ $model->profile->about }}
					</p>
					<div class="media small-teaser grey">
						<div class="media-left">
							<i class="fa fa-globe highlight2"></i>
						</div>
						<div class="media-body">
							{{ $model->profile->state_of_origin }}
						</div>
					</div>

					{{-- <div class="media small-teaser grey">
						<div class="media-left">
							<i class="fa fa-phone highlight2"></i>
						</div>
						<div class="media-body">
							1-800-123-4567, 1-800-123-4568
						</div>
					</div> --}}

					{{-- <div class="media small-teaser grey">
						<div class="media-left">
							<i class="fa fa-envelope highlight2"></i>
						</div>
						<div class="media-body underlined-links">
							<a href="mailto:your@mail.com">rachel_tate@support.com</a>
						</div>
					</div> --}}

					<div class="filters isotope_filters topmargin_60 bottommargin_25">
						<a href="#" class="theme_button inverse selected" data-filter="*">All</a>
						<a href="#" class="theme_button inverse" data-filter=".tests">tests</a>
						<a href="#" class="theme_button inverse" data-filter=".editorials">editorials</a>
						<a href="#" class="theme_button inverse" data-filter=".snaps">snaps</a>
					</div>

					<div class="isotope_container isotope row masonry-layout columns_padding_5 columns_padding_top_0 columns_margin_bottom_10" data-filters=".isotope_filters">

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 tests">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="{{ $model->profile->avatar }}" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/01.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 editorials">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/02.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/02.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 snaps">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/03.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/03.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 tests">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/04.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/04.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 editorials">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/05.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/05.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 tests">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/06.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/06.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 snaps">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/07.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/07.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="isotope-item col-xlg-3 col-lg-4 col-sm-6 editorials">
							<div class="vertical-item content-absolute text-center">
								<div class="item-media">
									<img src="images/model_portfolio/08.jpg" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/model_portfolio/08.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- eof .isotope_container.row -->

					<h3>Contact model</h3>

					<form class="model-form" id="modelform" method="post" action="./">
						<div class="row columns_padding_10">
							<div class="col-md-6">
								<p class="model-form-author">
						<label for="name" class="sr-only">Name <span class="required">*</span></label>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
					</p>
							</div>
							<div class="col-md-6">
								<p class="model-subject">
						<label for="model_subject" class="sr-only">Subject</label>
						<i class="fa fa-comment" aria-hidden="true"></i>
						<input type="text" size="30" value="" name="model_subject" id="model_subject" class="form-control" placeholder="subject">
					</p>
							</div>
							<div class="col-md-6">
								<p class="model-form-phone">
						<label for="model_phone" class="sr-only">Phone number</label>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" aria-required="true" size="30" value="" name="model_phone" id="model_phone" class="form-control" placeholder="Phone number">
					</p>
							</div>
							<div class="col-md-6">
								<p class="model-form-email">
						<label for="comment_email" class="sr-only">Email address <span class="required">*</span></label>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email" aria-required="true" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Email Address">
					</p>
							</div>
							<div class="col-md-12">
								<p class="model-form-message">
						<label for="message" class="sr-only">Comment</label>
						<i class="fa fa-folder-open" aria-hidden="true"></i>
						<textarea aria-required="true" rows="7" cols="45" name="message" id="message" class="form-control" placeholder="Message..."></textarea>
					</p>
							</div>
						</div>
						<div class="form-submit inline-content topmargin_30">
							<button type="submit" id="submit" name="submit" class="theme_button color2 inverse">Submit</button>
							<button type="reset" id="reset" class="theme_button inverse">Clear</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
@endsection
