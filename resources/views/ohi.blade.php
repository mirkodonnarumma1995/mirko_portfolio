<!DOCTYPE html>
<html>

<head>
    <title>Oggi ho imparato</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ohi.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
</head>

<body>
    @include('partials.header')
    <div class="container">
        <h1>Oggi Ho Imparato 📚</h1>
        <div class="markdown-body">
            {!! $html !!}
        </div>
        @include('partials.footer')
</body>

</html>