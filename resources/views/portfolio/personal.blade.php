@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<h3>Pictures</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row">
				<div class="col-xs-12">
					<div class="with_border with_padding">

						<div class="row admin-table-filters">
							<div class="col-lg-9">


							</div>
							<!-- .col-* -->
							<div class="col-lg-3 text-lg-right">
								<div class="widget widget_search">

									<a href="/portfolio/create">
										<button><i class="fa fa-plus"></i> Add</button>
									</a>
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
									<th>Title:</th>
									<th>Date:</th>
									<th>Categories:</th>
									<th>Status:</th>
								</tr>

								@foreach ($pictures as $picture)
									<tr class="item-editable">
										<td class="media-middle text-center">
											<input type="checkbox">
										</td>
										<td>
											<div class="media">
												<div class="media-left media-middle">
													<img src="images/shop/01.jpg" alt="...">
												</div>
												<div class="media-body media-middle">
													<h5>
														<a href="portfolio/1/edit">{{ $picture->title }}</a>
													</h5>
												</div>
											</div>
										</td>
										<td class="media-middle">
											<time datetime="{{ $picture->created_at }}" class="entry-date">{{ $picture->created_at }}</time>
										</td>
										<td class="media-middle">
											{{ $picture->categories }}
										</td>
										<td class="media-middle">
											{{ $picture->published ? 'Published' : 'Unpublished' }}
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
