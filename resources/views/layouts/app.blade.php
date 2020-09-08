<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <Link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/css/welcome.css" rel="stylesheet">
</head>
<body>
    @include("layouts.navigation")
    @include("layouts.alert")
    @yield('content')
    @include("layouts.footer")
</body>
</html>
