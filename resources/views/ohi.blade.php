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
    <h1>Oggi Ho Imparato 📚</h1><br><br>

    @foreach ($days as $day)
    <div class="day">
        {!! \Illuminate\Support\Str::markdown($day) !!}
    </div>
    @endforeach

    <div class="pagination">
        @if ($currentPage > 1)
        <a href="?page={{ $currentPage - 1 }}">Precedente</a>
        @endif

        @for ($i = 1; $i <= $totalPages; $i++)
            <a href="?page={{ $i }}" class="{{ $currentPage == $i ? 'active' : '' }}">{{ $i }}</a>
            @endfor

            @if ($currentPage < $totalPages)
                <a href="?page={{ $currentPage + 1 }}">Successiva</a>
                @endif
    </div>
    @include('partials.footer')
</body>

</html>