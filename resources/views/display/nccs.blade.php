<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title>{{ $type ?? config('app.name', 'Nilkantha School') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/noticeExam.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>


<body>

<header>

    @include('display.navbar')
    <div class="bgimg"></div>
</header>

@include(('display.postWithGallery'))

@include('display.footer')
