<!DOCTYPE html>
<html>
<head>
    <title>e.less</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>
<body>
<div id='app'>
    @include('inc.navbar')
    @yield('content')
</div>
<script src="/js/app.js"></script>

</body>
</html>