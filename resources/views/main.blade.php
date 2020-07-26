<!doctype html>
<html>
<head>
    <!-- META Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ isset($title) ? $title . ' | ' : null }}{{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/vitorhugodotpt/easy-log/assets/css/app.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <header-log></header-log>
        <info-log></info-log>
    </div>

    <script src="{{ asset('vendor/vitorhugodotpt/easy-log/assets/js/app.js') }}"></script>
</body>
</html>
