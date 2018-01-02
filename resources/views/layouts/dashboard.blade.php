<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LDB</title>
		<meta charset="utf-8">
		<meta name="_token" content="{{ csrf_token() }}"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ mix('css/all.css') }}">
	</head>
	<body>
		<div class="cm-loading hide">
			<div class="cm-loading-content">
				<div class="text-center">
					<img src="/img/loader-clock.png">
				</div>
				<div class="cm-loading-text">Processing</div>
				<div class="cm-loading-bar"></div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="flex-container">
				@include('partials.side-nav')
				@yield('content')
				@yield('dummy')
				</div>
			</div>
		</div>
		<script src="{{ mix('js/all.js') }}"></script>
	</body>
</html>