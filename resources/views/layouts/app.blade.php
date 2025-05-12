<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Car Rental Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-4">
            <div class="text-2xl font-bold mb-4">Car Rental</div>
            <ul>
                <li class="mb-2"><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Dashboard</a></li>
                <li class="mb-2"><a href="{{ route('cars.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Vehicles</a></li>
                <li class="mb-2"><a href="{{ route('rents.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Rentals</a></li>
                <li class="mb-2"><a href="{{ route('payments.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Payments</a></li>
                <li class="mb-2"><a href="{{ route('reviews.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Reviews</a></li>
            </ul>
        </div>
        <!-- Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-4">@yield('page-title')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
