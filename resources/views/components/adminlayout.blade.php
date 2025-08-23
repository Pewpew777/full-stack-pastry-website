<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarBakes</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<header class="top-0 left-0 w-full shadow-md z-50 sha backdrop-blur-sm flex bg-gray-200 items-center justify-between px-5">
    <div class="flex items-center gap-2">
        <img src="{{ asset('images/maroua logo(1)(1).png') }}" alt="logo" class="w-20 h-auto">
        <p class="font-dmserif text-2xl text-gray-800">Admin</p>
    </div>
    <img id="menu-btn" src="{{ asset('images/588a6507d06f6719692a2d15.png') }}" alt="menu" class="flex lg:hidden w-[40px] h-auto">
    <ul class="hidden lg:flex gap-5 list-none">
        <li><a href="/" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Home</a></li>
        <li><a href="{{route('admin.dashboard')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Commandes</a></li>
        <li><a href="{{route('admin.modify')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition">Modifications</a></li>
    </ul>
    {{-- --mobile menu--}}
    <ul id="mobile-menu" class="hidden gap-5 list-none absolute lg:static top-[70px] left-0 w-full lg:w-auto bg-white shadow-lg lg:shadow-none flex-col lg:flex-row items-start lg:items-center p-5 lg:p-0 z-50">
        <li><a href="/" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition cursor:pointer">Acceuil</a></li>
        <li><a href="{{route('admin.dashboard')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition cursor:pointer">Commandes</a></li>
        <li><a href="{{route('admin.modify')}}" class="font-dmserif text-base text-gray-800 hover:text-gray-600 transition cursor:pointer">Modifications</a></li>
    </ul>
</header>
<main>
    @yield('content')
</main>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("flex"); 
    });
});
</script>
</body>
</html>