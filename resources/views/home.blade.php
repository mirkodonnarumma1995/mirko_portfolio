<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mirko.dev</title>
    <meta name="description" content="Il portfolio di Mirko Donnarumma, un software developer.">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
</head>

<body>
    <div class="container">
        @include('partials.header') <!-- Include il file header -->
        <div class="DIV-0">
            <p id="name">👋, sono Mirko!</p>
            <div id="social" class="text-center">
                <a href="https://www.linkedin.com/in/mirko-donnarumma/" title="Linkedin" target="_blank" rel="noopener noreferrer" aria-label="Linkedin">
                    <svg viewBox="0 0 24 24" width="1em" height="1em">
                        <path fill="#ffffff" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                    </svg>
                </a>
                <a href="https://github.com/mirkodonnarumma1995" title="Github" target="_blank" rel="noopener noreferrer" aria-label="Github">
                    <svg viewBox="0 0 24 24" width="1em" height="1em">
                        <path fill="#ffffff" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                    </svg>
                </a>
                <a href="https://stackoverflow.com/users/28465701/mirko" title="StackOverflow" target="_blank" rel="noopener noreferrer" aria-label="StackOverflow">
                    <svg viewBox="0 0 24 24" width="1em" height="1em">
                        <path fill="#ffffff" d="M18.986 21.865v-6.404h2.134V24H1.844v-8.539h2.13v6.404h15.012zM6.111 19.731H16.85v-2.137H6.111v2.137zm.259-4.852l10.48 2.189.451-2.07-10.478-2.187-.453 2.068zm1.359-5.056l9.705 4.53.903-1.95-9.706-4.53-.902 1.936v.014zm2.715-4.785l8.217 6.855 1.359-1.62-8.216-6.853-1.35 1.617-.01.001zM15.751 0l-1.746 1.294 6.405 8.604 1.746-1.294L15.749 0h.002z"></path>
                    </svg>
                </a>
                <a href="https://dev.to/mirko__4c6c3bc3" title="DevTo" target="_blank" rel="noopener noreferrer" aria-label="DevTo">
                    <svg viewBox="0 0 448 512" width="1em" height="1em">
                        <path fill="#ffffff" d="M120.12 208.29c-3.88-2.9-7.77-4.35-11.65-4.35H91.03v104.47h17.45c3.88 0 7.77-1.45 11.65-4.35 3.88-2.9 5.82-7.25 5.82-13.06v-69.65c-.01-5.8-1.96-10.16-5.83-13.06zM404.1 32H43.9C19.7 32 .06 51.59 0 75.8v360.4C.06 460.41 19.7 480 43.9 480h360.2c24.21 0 43.84-19.59 43.9-43.8V75.8c-.06-24.21-19.7-43.8-43.9-43.8zM154.2 291.19c0 18.81-11.61 47.31-48.36 47.25h-46.4V172.98h47.38c35.44 0 47.38 27.48 47.38 46.77v71.44zm101.63-89.37h-43.61v36.01h40.99v28.54h-40.99v36.01h43.61v28.52H179.22V172.98h76.61v28.84zm103.39 106.62c-13.2 30.75-36.85 24.63-47.44 0l-38.53-144.8h32.57l29.71 113.72 29.57-113.72h32.58l-38.46 144.8zm0 0"></path>
                    </svg>
                </a>
            </div>
            <div class="DIV-2">
                <a href="{{ asset('cv.pdf') }}" target=" _blank" rel="noopener noreferrer" class="button">CV</a>
                <a href="mailto:mirko.donnarumma@outlook.it" target="_blank" rel="noopener noreferrer" class="button">Contattami</a>
            </div>
        </div>
        @include('partials.footer') <!-- Include il file footer -->
    </div>
</body>

</html>