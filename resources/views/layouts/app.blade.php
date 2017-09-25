<!DOCTYPE html>
<html>
<head>
    <title>e.less</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script>
        $(function () {
            var availableTags = [
                "Augsburg",
                "München",
                "Berlin",
                "Ammersee",
                "Münchhausen",
                "Münster",
                "Köln",
                "Schwabmünchen"
            ];
            $("input[name='Wohnort']").autocomplete({
                source: availableTags
            });
        });
    </script>
</head>
<body>

<div id='app'>
    @include('inc.navbar')
    @yield('content')
</div>
<script src="/js/app.js"></script>

</body>
</html>