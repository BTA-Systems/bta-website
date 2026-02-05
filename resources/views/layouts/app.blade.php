<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'BTA Systems — software house specjalizujący się w rozwiązaniach AI dla biznesu.')">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="@yield('title', 'BTA Systems')">
    <meta property="og:description" content="@yield('meta_description', 'Software house specjalizujący się w rozwiązaniach AI dla biznesu.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bta.systems">
    <meta property="og:image" content="{{ asset('assets/BTA_logo.png') }}">
    <meta property="og:locale" content="pl_PL">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>@yield('title', 'BTA Systems — AI dla biznesu')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-brand-gray font-sans antialiased">

    @yield('content')

    {{-- Cookie Banner --}}
    <div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 hidden">
        <div class="bg-white border-t border-gray-200 shadow-lg">
            <div class="max-w-5xl mx-auto px-6 py-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <p class="text-sm text-brand-gray-light leading-relaxed">
                    Ta strona korzysta z plików cookies w celu zapewnienia prawidłowego działania oraz analizy ruchu.
                    Więcej informacji znajdziesz w naszej
                    <a href="{{ route('privacy') }}" class="underline text-brand-gray hover:text-brand-red transition-colors">polityce prywatności</a>.
                </p>
                <div class="flex gap-3 shrink-0">
                    <button onclick="acceptCookies()" class="px-5 py-2 bg-brand-red text-white text-sm font-medium rounded hover:bg-brand-red-dark transition-colors cursor-pointer">
                        Akceptuję
                    </button>
                    <button onclick="rejectCookies()" class="px-5 py-2 bg-gray-100 text-brand-gray text-sm font-medium rounded hover:bg-gray-200 transition-colors cursor-pointer">
                        Odrzuć
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
