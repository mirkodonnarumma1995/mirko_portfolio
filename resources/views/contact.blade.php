<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattami</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
</head>

<body>
    @include('partials.header')
    @if (session('success'))
        <div style="color: green; text-align:center; font-weight:900;">
            {{ session('success') }}
        </div>
    @endif

    <form action="/contact" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Messaggio:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Invia">
    </form>
    @include('partials.footer')
</body>

</html>