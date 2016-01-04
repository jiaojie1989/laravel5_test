<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Furbook</title>
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
                <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
                <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" />
                <link href="{{ asset('css/metisMenu.css') }}" rel="stylesheet" />
                <script src="{{ asset('js/jquery.js') }}"></script>
                <script src="{{ asset('js/Chart.js') }}"></script>
                <script src="{{ asset('js/bootstrap.js') }}"></script>
                <script src="{{ asset('js/metisMenu.js') }}"></script>
                <script src="{{ asset('js/sb-admin-2.js') }}"></script>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				@yield('header')
			</div>
			@if (Session::has('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
			@endif
			@yield('content')
		</div>
	</body>
</html>
