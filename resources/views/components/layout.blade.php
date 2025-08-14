<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarBakes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="{{ $__env->yieldContent('header-extra-class') }} top-0 left-0 w-full z-50 bg-white/10 backdrop-blur-sm flex items-center justify-between px-5">
    <div class="flex items-center gap-2">
        <img src="{{asset('/images/pngtree-bakery-logo-baker-illustration-png-image_6625246.png') }}" alt="logo" class="w-20 h-auto">
        <p class="font-dmserif text-2xl text-gray-800">GATEAUX MAROUA</p>
    </div>

    <!-- Menu Button (small screens) -->
    <img id="menu-btn" src="{{ asset('images/588a6507d06f6719692a2d15.png') }}" alt="menu" 
         class="lg:hidden w-[50px] h-auto cursor-pointer">

    <!-- Nav Menu -->
    <ul id="mobile-menu" class="hidden gap-5 list-none absolute lg:static top-[70px] left-0 w-full lg:w-auto bg-white shadow-lg lg:shadow-none flex-col lg:flex-row items-start lg:items-center p-5 lg:p-0 z-50">
        <li><a href="/" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Accueil</a></li>
        <li><a href="{{route('cart.view')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Panier</a></li>
        <li class="font-dmserif text-base text-gray-800 cursor-pointer"><a href="#traditionnels">Gateaux</a></li>
        <li class="font-dmserif text-base text-gray-800 cursor-pointer"><a href="#bestsellers">Bestsellers</a></li>
    </ul>
        <ul class="hidden lg:flex gap-5 list-none">
        <li><a href="/" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Accueil</a></li>
        <li><a href="{{route('cart.view')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Panier</a></li>
        <li class="font-dmserif text-base text-gray-800 cursor-pointer"><a href="#traditionnels">Gateaux</a></li>
        <li class="font-dmserif text-base text-gray-800 cursor-pointer"><a href="#bestsellers">Bestsellers</a></li>
    </ul>
</header>


<main>
    @yield('content')
</main>
</body>
</html>
