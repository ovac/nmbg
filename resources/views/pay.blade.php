@extends('layouts.setup')

@section('setup-steps')
	<div class="card wizard-card" data-color="purple" id="wizard">
        <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->
            @csrf

        	<div class="wizard-header">
            	<h2 class="wizard-title">
            		Online Payment
            	</h2>
				<h5>
					Apply online using Mobile Money or enter your form activation code.
				</h5>
        	</div>
			<div class="wizard-navigation">
				<ul>
                    <li><a href="#payment" data-toggle="tab">Online Payment</a></li>
                </ul>
            <div class="tab-content">
                <div class="tab-pane" id="payment">
                    <h4 class="info-text">Enter Billing Information for Mobile Money</h4>
                    <div class="row">
                        <form action="{{-- {{ route('setup.link') }} --}}" method="POST">
                            <div class="col-sm-4 col-sm-offset-4">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Phone Number to bill</label>
                                    <input type="text" required class="form-control" name="phone" value="{{ old('phone') }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <center>
                                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Proceed to payment' />
                                </center>
                            </div>
                        </form>
                    </div>

                    <hr>
                    <center>
                        <h2>Or</h2>
                    </center>
                    <h4 class="info-text">Enter your form activation code.</h4>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Activation Code</label>
                                <input type="text" required class="form-control" name="activation_code" value="{{ old('activation_code') }}">
                                <span class="material-input"></span>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <center>
                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Activate Form' />
                            </center>
                        </div>
                    </div>
                </div>

            </div>
            {{-- <div class="wizard-footer">
                <div class="">
                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                </div>
                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
            </div> --}}
    </div>
@endsection
