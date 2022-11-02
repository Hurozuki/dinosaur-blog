<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite(['resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a75656e3ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" >
    <link rel="stylesheet" href="@yield("css")" >
</head>

<body>


@component('components.header')
@endcomponent


@yield("content");

@component('components.footer')
@endcomponent

</body>
</html>