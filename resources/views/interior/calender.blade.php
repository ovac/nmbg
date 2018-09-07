@extends('layouts.master')

@section('content')
	<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
		<div class="container-fluid">

			<div class="row">
				<!-- Calendar -->
				<div class="col-12">

					<h3 class="module-title darkgrey_bg_color">Calender</h3>

					{!! $calendar->calendar() !!}

				</div>
				<!-- .col-* -->
			</div>

		</div>
	</section>
@endsection

@section('calender-script')
	{!! $calendar->script() !!}
@endsection
