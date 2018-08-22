
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>{{ config('app.name') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="/assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="/assets/css/demo.css" rel="stylesheet" />

	<style type="text/css">
		body {
			height: 100vh;
		}

		.logo-container {

			display: block;
			margin: 0px auto;
		}
		.logo-container .logo {
			width: 300px;
			max-width: 300px;
			max-height: 100px;
			border-radius: 0px;
			border: none;
		}
		.image-container {
			height: 100vh;
		}
		.picture-src {
			height: 100%;
		}

		.identity.picture-container {
			border-radius: none;
			width: 100%;
		}

		.identity.picture-container .picture{
			height: auto;
			width: auto;
			border-radius: 2px;
		}

		picture-container
	</style>
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url({{ config('nmbg.setup-bg') }})">
	    <!--   Creative Tim Branding   -->
	    <a href="/dashboard">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="{{ config('nmbg.logo') }}" height="100px">
	            </div>
	        </div>
	    </a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">

				    	@include('partials.errors')

		            	@yield('setup-steps')
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        {{-- <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
	        </div> --}}
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="/assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="/assets/js/jquery.validate.min.js"></script>

	@yield('show-error-modal')

</html>
