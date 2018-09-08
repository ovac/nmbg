@extends('layouts.app')

@section('content')


	<section class="page_breadcrumbs ds parallax section_padding_75">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Models</h2>
					<ol class="breadcrumb greylinks">
						<li>
							<a href="./">
								Home
							</a>
						</li>
						<li class="active">Models</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="ds section_padding_100 container_padding_60 bottompadding_10">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-md-push-7 text-md-right">

					<form class="inline-form inline-content" method="post" action="./">
						<div class="select-group">
							<label for="sorting" class="sr-only">Sorting
								<span class="required">*</span>
							</label>
							<!-- <div class="input-group"> -->
							<select aria-required="true" id="sorting" name="sorting" class="choice empty form-control">
								<option value="default">Default sorting</option>
								<option value="jan">Sort by name</option>
								<option value="feb">Sort by date</option>
								<option value="mar">Random sorting</option>
							</select>
							<i class="fa fa-caret-down theme_button" aria-hidden="true"></i>
							<!-- </div> -->
						</div>
						<div class="select-group">
							<label for="order" class="sr-only">Order
								<span class="required">*</span>
							</label>
							<!-- <div class="input-group"> -->
							<select aria-required="true" id="order" name="order" class="choice empty form-control">
								<option value="default">Descending</option>
								<option value="jan">Ascendanting</option>
							</select>
							<i class="fa fa-caret-down theme_button" aria-hidden="true"></i>
							<!-- </div> -->
						</div>
					</form>

				</div>
				<div class="col-md-7 col-md-pull-5">
					<div class="filters isotope_filters">
						<a href="#" class="theme_button inverse selected" data-filter="*">All</a>
						<a href="#" class="theme_button inverse" data-filter=".active">Active</a>
						<a href="#" class="theme_button inverse" data-filter=".evicted">Evicted</a>
					</div>
				</div>
			</div>

			<div class="isotope_container isotope row masonry-layout columns_margin_top_0" data-filters=".isotope_filters">

				@foreach (\App\User::whereHas('profile')->get() as $model)

					@if ($model->isSubscribed())
						<div class="isotope-item col-xlg-6 col-lg-3 col-sm-4 active">
							<div class="vertical-item gallery-title-item text-center">
								<div class="item-media">
									<img src="{{ $model->profile->avatar }}" alt="" />
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ $model->profile->avatar }}"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item-title text-center">
								<h4>
									<a href="/models/{{ $model->username }}">{{ $model->name }}</a>
								</h4>
							</div>
						</div>
					@endif
				@endforeach

			</div>
			<!-- eof .isotope_container.row -->

			{{-- <div class="row">
				<div class="col-sm-12 text-center">
					<a href="#" class="theme_button color2 inverse">Load more</a>
				</div>
			</div> --}}

		</div>
	</section>

@endsection
