<html>
<head>
<title>E-Commerce</title>
<link rel="icon"  href="favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>

<body>

{{View::make('menu')}}<br>

@if(session()->has('user'))
{{View::make('user')}}
@else
@yield('login')
@endif

{{View::make('footer')}}


</html>
