@extends('layouts.master')

@section('content')

	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<h3>FAQ</h3>
				</div>
				<!-- .col-* -->
			</div>
			<!-- .row -->

			<div class="row vertical-tabs">
				<div class="col-md-5">

					<!-- Nav tabs -->
					<ul class="nav" role="tablist">

						@foreach ($allFaq as $faq)
							<li>
								<a href="#vertical-tab{{ $faq->id }}" role="tab" data-toggle="tab">{{ $faq->question }}</a>
							</li>
						@endforeach
					</ul>

				</div>

				<div class="col-md-7">

					<!-- Tab panes -->
					<div class="tab-content no-border">
						@foreach ($allFaq as $faq)
							<div class="tab-pane fade" id="vertical-tab{{ $faq->id }}">
								<h3 class="topmargin_0">{{ $faq->question }}</h3>
								<p>{{ $faq->answer }}</p>
							</div>
						@endforeach
					</div>

				</div>
				<!-- .col-* -->


			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>
@endsection


@section('active-page')
	<li class="active">
		<a href="/faq">Frequently Asked Questions</a>
	</li>
@endsection
