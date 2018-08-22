@extends('layouts.app')

@section('content')
	<section class="page_breadcrumbs ds parallax section_padding_75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Our Portfolio</h2>
					<ol class="breadcrumb greylinks">
						<li>
							<a href="./">Home</a>
						</li>
						<li class="active">Portfolio</li>
					</ol>
				</div>
			</div>
		</div>
	</section>


	<section class="ds page_portfolio section_padding_top_100 section_padding_bottom_75">
		<div class="container">
			<div class="row">
				{{-- <div class="col-sm-12">
					<div class="filters isotope_filters text-center">
						<a href="#" class="theme_button inverse selected" data-filter="*">All</a>
						<a href="#" class="theme_button inverse" data-filter=".fashion">Fashion</a>
						<a href="#" class="theme_button inverse" data-filter=".studio">Studio</a>
						<a href="#" class="theme_button inverse" data-filter=".session">Session</a>
						<a href="#" class="theme_button inverse" data-filter=".top">Top</a>
						<a href="#" class="theme_button inverse" data-filter=".newest">Newest</a>
					</div>
				</div> --}}
				<div class="col-sm-8 col-sm-push-2">

					<div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">



						<div class="isotope-item col-lg-12 col-md-12 col-sm-12 top">
							<div class="vertical-item gallery-item content-absolute text-center ds">
								<div class="item-media">
									<img src="images/gallery/10.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/10.jpg"></a>
											<a class="p-link" title="" href="gallery-single.html"></a>
										</div>
									</div>
								</div>
								<div class="item-content darken_gradient">
									<h4>
										<a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
									</h4>
								</div>
							</div>
						</div>
					</div>
					<!-- eof .isotope_container.row -->

				</div>
			</div>
		</div>
	</section>
@endsection
