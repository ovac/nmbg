@if (count($errors) > 0)
	<div class="modal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" class="text-center alert alert-danger"><b>Errors</b></h5>

	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

			    @foreach ($errors->all() as $error)
			        <li class="alert alert-danger" style="font-size: 8pt !important">{{ $error }}</li>
			    @endforeach
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	@section('show-error-modal')
		<script type="text/javascript">
			$('#errorModal').modal();
		</script>
	@endsection
@endif
