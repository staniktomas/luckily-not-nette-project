<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('app.component')
	<div class="container">
        @yield('content')
	</div>
</body>
</html>
