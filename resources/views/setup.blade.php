@extends('layouts.setup')

@section('setup-steps')
	<div class="card wizard-card" data-color="purple" id="wizard">
        <form action="{{-- {{ route('setup.store') }} --}}" method="POST" enctype="multipart/form-data">
            @csrf
        <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

        	<div class="wizard-header">
            	<h2 class="wizard-title">
            		{{-- Hello! {{ auth()->user()->name }} --}}
            	</h2>
				<h5> Let's setup your account.</h5>
        	</div>
			<div class="wizard-navigation">
				<ul>
                    <li><a href="#location" data-toggle="tab">Educational Institution</a></li>
                    <li><a href="#type" data-toggle="tab">Personal Details</a></li>
                    <li><a href="#kyc" data-toggle="tab">Appearance</a></li>
                    <li><a href="#upload_id" data-toggle="tab">Guardian Information</a></li>
                </ul>
			</div>

            <div class="tab-content">
                <div class="tab-pane" id="location">
                	<div class="row">
                    	<div class="col-sm-12">
                        	<h4 class="info-text"> Where do you school? </h4>
                    	</div>

                    	<div class="col-sm-10 col-sm-offset-1">
                        	<div class="form-group label-floating is-empty">
                        		<label class="control-label">Name Of Institution</label>
                    			<input type="text" required class="form-control" name="name_of_institution" value="{{ old('name_of_institution') }}">
                        		<span class="material-input"></span>
                        	</div>
                        </div>

                    	<div class="col-sm-5 col-sm-offset-1">
                        	<div class="form-group label-floating  is-empty">
                            	<label class="control-label">Level</label>
                            	<input type="text" required class="form-control" name="level" value="{{ old('level') }}">
                        	</div>
                    	</div>
                    	<div class="col-sm-5">
                        	<div class="form-group label-floating is-empty">
                            	<label class="control-label">Programme</label>
                            	<input type="text" required class="form-control" name="programme" value="{{ old('programme') }}">
                        	</div>
                    	</div>
                	</div>
                </div>
                <div class="tab-pane" id="type">
                    <h4 class="info-text">Tell us a little more about you.</h4>
                    <div class="row">

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">State Of Origin</label>
                                <input type="text" required class="form-control" name="state_of_origin" value="{{ old('state_of_origin') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Local Govt Area</label>
                                <input type="text" required class="form-control" name="local_govt_area" value="{{ old('local_govt_area') }}">
                            </div>
                        </div>

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Place Of Birth</label>
                                <input type="text" required class="form-control" name="place_of_birth" value="{{ old('place_of_birth') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Date Of Birth</label>
                                <input type="text" required class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}">
                            </div>
                        </div>

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Hobby</label>
                                <input type="text" required class="form-control" name="hobby" value="{{ old('hobby') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Favourite Artiste</label>
                                <input type="text" required class="form-control" name="favourite_artiste" value="{{ old('favourite_artiste') }}">
                            </div>
                        </div>

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Role Model</label>
                                <input type="text" required class="form-control" name="role_model" value="{{ old('role_model') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Favourite Artiste</label>
                                <input type="text" required class="form-control" name="favourite_artiste" value="{{ old('favourite_artiste') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kyc">
                  	<div class="row">
                    	<h4 class="info-text"> What do you look like? </h4>
                    	<div class="col-sm-5 col-sm-offset-1">
                        	<div class="picture-container">
                            	<div class="picture">
                    				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardAvatarPreview" title=""/>
                                	<input type="file" class="wizard-picture" name="avatar" data-display="wizardAvatarPreview" value="{{ old('avatar') }}">
                            	</div>
                            	<h6>Choose Picture</h6>
                        	</div>
                    	</div>
                    	<div class="col-sm-6">
                            <div class="form-group label-floating">
                              <label class="control-label">Height <small>(required)</small></label>
                              <input name="height" type="text" class="form-control" required value="{{ old('height') }}">
                            </div>

                            <div class="form-group label-floating">
                              <label class="control-label">Weight <small>(required)</small></label>
                              <input name="weight" type="text" class="form-control" required value="{{ old('weight') }}">
                            </div>

                            <div class="form-group label-floating">
                              <label class="control-label">Eye Color <small>(required)</small></label>
                              <input name="eye_color" type="text" class="form-control" required value="{{ old('eye_color') }}">
                            </div>

                            <div class="form-group label-floating">
                              <label class="control-label">Hair Color <small>(required)</small></label>
                              <input name="hair_color" type="text" class="form-control" required value="{{ old('hair_color') }}">
                            </div>
                    	</div>

                	</div>
                </div>
                <div class="tab-pane" id="upload_id">
                    <div class="row">
                        <h4 class="info-text"> Guardian Information. </h4>

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Full Name</label>
                                <input type="text" required class="form-control" name="guardian_full_name" value="{{ old('guardian_full_name') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Phone Number</label>
                                <input type="text" required class="form-control" name="guardian_phone_number" value="{{ old('guardian_phone_number') }}">
                            </div>
                        </div>

                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Email Address</label>
                                <input type="text" required class="form-control" name="guardian_email" value="{{ old('guardian_email') }}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Phone Number</label>
                                <input type="text" required class="form-control" name="guardian_occupation" value="{{ old('guardian_occupation') }}">
                            </div>
                        </div>

                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group label-floating  is-empty">
                                <label class="control-label">Address</label>
                                <input type="text" required class="form-control" name="guardian_address" value="{{ old('guardian_address') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wizard-footer">
            	<div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                    <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                </div>
                <div class="pull-left">
                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@endsection
