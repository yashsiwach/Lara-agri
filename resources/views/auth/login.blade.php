<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-md">
        <h2 class="text-2xl font-semibold text-green-700 mb-6 text-center">Login</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @error('password')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mb-4">
                <label for="remember" class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <span class="text-gray-700 text-sm">Remember Me</span>
                </label>
                <a href="#" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Forgot Password?
                </a>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                Login
            </button>
        </form>
        <div class="mt-4 text-center">
             <a href="{{ url('/register') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Register
                </a>
        </div>
    </div>
</body>
</html>