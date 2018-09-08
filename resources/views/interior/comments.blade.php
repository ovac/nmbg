@extends('layouts.master')

@section('content')


	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">

		<div class="container-fluid">


			<div class="row">
				<div class="col-md-12">
					<h3>Visitor's comments on your profile</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12 col-md-12">

					<div class="with_border with_padding">
							<ul class="list1 no-bullets">
								@foreach ([] as $element)
									<li class="item-editable">
										<div class="media">
											<div class="item-edit-controls darklinks">
												<a href="#">
													<i class="fa fa-share-square-o"></i>
												</a>
												<a href="#">
													<i class="fa fa-edit"></i>
												</a>
												<a href="#">
													<i class="fa fa-trash-o"></i>
												</a>
											</div>
											<div class="media-left">
												<img src="images/team_square/01.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5>
													Alex Walker
													<small>2 hours ago</small>
												</h5>
												<div>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
												</div>
											</div>
										</div>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- .with_border -->
				</div>


			</div>
			<!-- .row -->
		</div>
	</section>
@endsection

@section('active-page')
	<li class="active">
		<a href="/comments">Comments</a>
	</li>
@endsection
