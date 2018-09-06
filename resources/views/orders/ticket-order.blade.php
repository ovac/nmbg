@extends('layouts.master')

@section('content')
	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-12">
					<h3>Order Summary</h3>
				</div>
			</div>
			<!-- .row -->

			<form class="form-horizontal">

				<div class="row">
					<div class="col-md-12">
						<div class="with_border with_padding">

							<div class="table-responsive bottommargin_20">
								<table class="table table-striped table-bordered">
									<tr>
										<th>Title:</th>
										<th>Price:</th>
										<th>Quantity:</th>
										<th>Total:</th>
									</tr>
									@foreach ($orders as $order)
										{{-- expr --}}
										<tr class="item-editable">

											<td>
												<div class="media">
													<div class="media-body media-middle">
														<h5>
															<a href="#">{{ $order->ticket->name }}</a>
														</h5>
													</div>
												</div>
											</td>
											<td class="media-middle">
												<strong>
													GHC{{ $order->ticket->price }}
												</strong>
											</td>
											<td class="media-middle">
												{{ $order->quantity }}
											</td>
											<td class="media-middle">
												GHC{{ $order->total }}
											</td>
										</tr>
									@endforeach

								</table>
							</div>
							<!-- .table-responsive -->


							<div class="row form-group">
								<label class="col-lg-3 control-label">Order comment: </label>
								<div class="col-lg-9">
									<p>{{ $order->comment }}</p>
								</div>
							</div>

						</div>
						<!-- .with_border -->

					</div>
					<!-- .col-* -->
				</div>
				<!-- .row  -->
			</form>

			<div class="row flex-row">
				<div class="col-md-6">
					<div class="with_border with_padding">

						<h5>
							Order Info:
						</h5>

						<ul class="list1 no-bullets">
							<li>
								<div class="media small-teaser">
									<div class="media-left media-middle">
										<div class="teaser_icon label-success fontsize_16 round">
											<i class="fa fa-calendar"></i>
										</div>
									</div>
									<div class="media-body media-middle">
										<strong class="grey">
											Order date:
										</strong>
										<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">{{ $order->created_at }}</time>
									</div>
								</div>
							</li>
							<li>
								<div class="media small-teaser">
									<div class="media-left media-middle">
										<div class="teaser_icon label-danger fontsize_16 round">
											<i class="fa fa-dollar"></i>
										</div>
									</div>
									<div class="media-body media-middle">
										<strong class="grey">
											Order Total:
										</strong>
										GHC{{ $order->total }}
									</div>
								</div>
							</li>
						</ul>


					</div>
					<!-- .muted_background -->
				</div>
				<!-- .col-* -->

				<div class="col-md-6">
					<div class="with_border with_padding">
						<h5>
							Customer Info:
						</h5>
						<ul class="list1 no-bullets">

							<li>
								<div class="media">

									<div class="media-left">
										<img src="/images/team_square/01.jpg" alt="...">
									</div>
									<div class="media-body media-middle">
										<h5 class="bottommargin_0">
											<a href="admin_profile.html">{{ $order->client->name }}</a>
										</h5>
										&lt;{{ $order->client->name }}&gt;
										<p>{{ $order->client->phone }}</p>

									</div>
								</div>
							</li>
							{{-- <li>
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
										0
									</div>
								</div>
							</li> --}}
							<li>
								<div class="media small-teaser">
									<div class="media-left media-middle">
										<div class="teaser_icon label-warning fontsize_16">
											<i class="fa fa-shopping-cart"></i>
										</div>
									</div>
									<div class="media-body media-middle">
										<strong class="grey">
											Orders:
										</strong>
										{{ $order->client->orders->count() }}
									</div>
								</div>
							</li>
						</ul>

					</div>
					<!-- .muted_background -->
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>

@endsection
