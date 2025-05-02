<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KrishiSahyog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-green-600 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-semibold text-center">KrishiSahyog</h1>
            <p class="text-lg text-center">Supporting Agriculture and Rural Development in India</p>
        </div>
    </header>

    <nav class="bg-green-700 text-white py-3">
        <div class="container mx-auto px-4 flex justify-center space-x-6">
            <a href="{{ url('/schemes') }}" class="hover:text-green-200 transition duration-300">Government Schemes</a>
            <a href="{{ url('/information') }}" class="hover:text-green-200 transition duration-300">Agriculture & Rural Information</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="hover:text-green-200 transition duration-300">Dashboard</a>
                 <a href="{{ url('/logout') }}" class="hover:text-green-200 transition duration-300"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ url('/login') }}" class="hover:text-green-200 transition duration-300">Login</a>
                <a href="{{ url('/register') }}" class="hover:text-green-200 transition duration-300">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto py-8 px-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 KrishiSahyog. All rights reserved.</p>
            <p>Developed by Yogesh.</p>
        </div>
    </footer>
</body>
</html>