@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-12">
					<h3>Single Picture
						{{-- <small class="pull-right">
							<a href="admin_comments.html">
								<i class="fa fa-comments"></i> Picture</a>
						</small> --}}
					</h3>
				</div>
			</div>
			<!-- .row -->


			<form class="form-horizontal" method="POST" action="/portfolio/{{ $picture->id }}">
				@csrf
				@method('put')

				<div class="row">
					<div class="col-md-8">
						<div class="with_border with_padding">
							<div class="item-editable bottommargin_20">


								<div class="item-media">
									<img src="{{ str_replace('upload', 'upload', $picture->picture) }}" alt="...">
								</div>

								<div class="item-edit-controls darklinks">
									<a href="#">
										<i class="fa fa-edit"></i>
									</a>
									<a href="#">
										<i class="fa fa-trash-o"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="with_border with_padding">


							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture title: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="title" value="{{ old('title') ?: $picture->title }}">
								</div>
							</div>
							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture slug: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="slug" value="{{ old('slug') ?: $picture->slug }}">
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Short description: </label>
								<div class="col-lg-9">
									<textarea rows="3" class="form-control"  name="short_description">{{ old('short_description') ?: $picture->short_description }}</textarea>
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture description: </label>
								<div class="col-lg-9">
									<textarea rows="8" class="form-control"  name="description">{{ old('description') ?: $picture->description }}</textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" class="theme_button wide_button">Save Picture</button>
								</div>
							</div>
							<!-- .row  -->

						</div>
						<!-- .with_border -->

					</div>
					<!-- .col-* -->


					<div class="col-md-4">



						<div class="with_border with_padding bottommargin_10">

							<h4>
								Tags and Categories
							</h4>
							<hr>
							<div class="row form-group">
								<label class="col-lg-3 control-label">Categories: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="categories" value="{{ old('categories') ?: $picture->categories }}">
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture Tags: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="tags" value="{{ old('tags') ?: $picture->tags }}">
								</div>
							</div>

						</div>
						<!-- .with_border -->

					</div>
					<!-- .col-* -->


				</div>
				<!-- .row  -->
			</form>

		</div>
		<!-- .container -->
	</section>
@endsection
