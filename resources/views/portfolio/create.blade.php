@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<form class="form-horizontal" action="/portfolio" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="container-fluid">

				<div class="row">
					<div class="col-sm-12">
						<h3>Add Picture
							{{-- <small class="pull-right">
								<a href="admin_comments.html">
									<i class="fa fa-comments"></i> Picture</a>
							</small> --}}
						</h3>
					</div>
				</div>
				<!-- .row -->



				<div class="row">
					<div class="col-md-8">
						<div class="with_border with_padding">
							<div class="item-editable bottommargin_20">
								<input type="file" name="picture" class="form-control">
							</div>
						</div>
						<!-- .with_border -->
						<div class="with_border with_padding">


							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture title: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="title" value="{{ old('title') }}">
								</div>
							</div>
							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture slug: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Short description: </label>
								<div class="col-lg-9">
									<textarea rows="3" class="form-control"  name="short_description">{{ old('short_description') }}</textarea>
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture description: </label>
								<div class="col-lg-9">
									<textarea rows="8" class="form-control"  name="description">{{ old('description') }}</textarea>
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
									<input type="text" class="form-control"  name="categories" value="{{ old('categories') }}">
								</div>
							</div>

							<div class="row form-group">
								<label class="col-lg-3 control-label">Picture Tags: </label>
								<div class="col-lg-9">
									<input type="text" class="form-control"  name="tags" value="{{ old('tags') }}">
								</div>
							</div>

						</div>
						<!-- .with_border -->

					</div>
					<!-- .col-* -->


				</div>
				<!-- .row  -->



			</div>
			<!-- .container -->
		</form>
	</section>
@endsection
