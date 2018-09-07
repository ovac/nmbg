@extends('layouts.master')

@section('content')


					<div class="row">
						<div class="col-xs-12 col-md-12">

							<div class="with_border with_padding">
								<h4>
									Latest Comments
								</h4>
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
@endsection
