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
    <h1>Oggi Ho Imparato 📚</h1>

    <div id="grid-container" class="grid-container">
        @foreach ($days as $day)
            <div class="card">
                {!! \Illuminate\Support\Str::markdown($day) !!}
            </div>
        @endforeach
    </div>

    <script>
        let page = 1;
        const gridContainer = document.getElementById('grid-container');

        window.addEventListener('scroll', () => {
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
                loadMoreContent();
            }
        });

        function loadMoreContent() {
            page++;
            fetch(`{{ url('/ohi?page=') }}${page}`)
                .then(response => response.text())
                .then(html => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newCards = doc.querySelectorAll('.card');
                    newCards.forEach(card => gridContainer.appendChild(card));
                })
                .catch(error => console.error('Error loading more content:', error));
        }
    </script>
</body>

</html>