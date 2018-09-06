@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<h3>Orders</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<div class="with_border with_padding">

						<div class="row admin-table-filters">
							<div class="col-lg-9">

								{{-- <form action="./" class="form-inline filters-form">
									<span>
										<label class="grey" for="with-selected">With Selected:</label>
										<select class="form-control with-selected" name="with-selected" id="with-selected">
											<option value="">-</option>
											<option value="approve">Approve</option>
											<option value="decline">Decline</option>
											<option value="delete">Delete</option>
										</select>
									</span>
									<span>
										<label class="grey" for="orderby">Sort By:</label>
										<select class="form-control orderby" name="orderby" id="orderby">
											<option value="date" selected>Date</option>
											<option value="customer">Customer</option>
											<option value="total">Total</option>
											<option value="status">Status</option>
										</select>
									</span>

									<span>
										<label class="grey" for="showcount">Show:</label>
										<select class="form-control showcount" name="showcount" id="showcount">
											<option value="10" selected>10</option>
											<option value="20">20</option>
											<option value="30">30</option>
											<option value="50">50</option>
											<option value="100">100</option>
										</select>
									</span>
								</form> --}}

							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
								<div class="widget widget_search">

									<form method="get" class="searchform form-inline" action="./">
										<div class="form-group">
											<label class="screen-reader-text" for="widget-search">Search for:</label>
											<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="type keyword here">
										</div>
										<button type="submit" class="theme_button color1">Search</button>
									</form>
								</div>

							</div>
							<!-- .col-* -->
						</div>
						<!-- .row -->

						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<tr>
									<td class="media-middle text-center">
										<input type="checkbox">
									</td>
									<th>Order:</th>
									<th>Customer:</th>
									<th>Date:</th>
									<th>Total:</th>
									<th>Status:</th>
								</tr>
								@foreach ($orders as $order)
									<tr class="item-editable">
										<td class="media-middle text-center">
											<input type="checkbox">
										</td>
										<td class="media-middle">
											<a href="/orders/1">
												#0001
											</a>
										</td>
										<td>
											<div class="media">
												<div class="media-left">
													<img src="images/team_square/01.jpg" alt="...">
												</div>
												<div class="media-body">
													<h5>
														<a href="#">{{ $order->client->name }}</a>
													</h5>
													&lt;{{ $order->client->email }}&gt;
												</div>
											</div>
										</td>
										<td class="media-middle">
											<time datetime="{{ $order->created_at }}" class="entry-date">{{ $order->created_at }}</time>
										</td>
										<td class="media-middle">
											GHC{{ $order->total }}
										</td>

										<td class="media-middle">
											Delivered
										</td>
									</tr>
								@endforeach
							</table>
						</div>
						<!-- .table-responsive -->
					</div>
					<!-- .with_border -->
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->
			{{-- <div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-md-6">
							<ul class="pagination">
								<li class="disabled">
									<span>Prev</span>
								</li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
						<div class="col-md-6 text-md-right">
							Showing 1 to 6 of 12 items
						</div>
					</div>
				</div>
			</div> --}}
			<!-- .row main columns -->
		</div>
		<!-- .container -->
	</section>

@endsection
