// resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News App Laravel</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="{{ route('news.index') }}" class="flex-shrink-0 flex items-center text-xl font-bold text-gray-800">
                        News App
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('news.index') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        &copy; {{ date('Y') }} News App - Dibuat dengan Laravel
    </footer>

</body>
</html>