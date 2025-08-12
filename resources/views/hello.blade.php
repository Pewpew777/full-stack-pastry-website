<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarBakes - Pastry Delights</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-beige-100 text-gray-800" style="background-color: #f5f5dc;"> <!-- Beige background -->

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-amber-800">MarBakes</h1>
            <nav class="space-x-6">
                <a href="#bestsellers" class="hover:text-amber-700">Bestsellers</a>
                <a href="#about" class="hover:text-amber-700">About</a>
                <a href="#gallery" class="hover:text-amber-700">Gallery</a>
                <a href="#contact" class="hover:text-amber-700">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-16">
        <h2 class="text-4xl md:text-5xl font-bold text-amber-900">Freshly Baked Happiness</h2>
        <p class="mt-4 text-lg text-gray-700 max-w-xl mx-auto">
            Delicious pastries, cakes, and sweets made with love — perfect for your special moments.
        </p>
        <a href="#bestsellers" class="mt-6 inline-block bg-amber-700 text-white px-6 py-3 rounded-lg shadow hover:bg-amber-800">
            Explore Menu
        </a>
    </section>

    <!-- Bestsellers -->
    <section id="bestsellers" class="max-w-7xl mx-auto px-4 py-16">
        <h3 class="text-3xl font-bold text-center text-amber-800 mb-8">Our Bestsellers</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                <img src="/images/cake1.jpg" alt="Cake" class="rounded-t-lg w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-semibold text-lg">Chocolate Dream Cake</h4>
                    <p class="text-gray-600 mt-2">Rich, moist, and topped with smooth chocolate ganache.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                <img src="/images/croissant.jpg" alt="Croissant" class="rounded-t-lg w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-semibold text-lg">Butter Croissants</h4>
                    <p class="text-gray-600 mt-2">Flaky, buttery, and perfect with a cup of coffee.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                <img src="/images/tart.jpg" alt="Tart" class="rounded-t-lg w-full h-48 object-cover">
                <div class="p-4">
                    <h4 class="font-semibold text-lg">Strawberry Tart</h4>
                    <p class="text-gray-600 mt-2">Fresh strawberries on creamy custard in a crisp pastry shell.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 md:flex md:items-center md:space-x-8">
            <img src="/images/bakery.jpg" alt="Bakery" class="w-full md:w-1/2 rounded-lg shadow">
            <div class="mt-8 md:mt-0 md:w-1/2">
                <h3 class="text-3xl font-bold text-amber-800 mb-4">About Us</h3>
                <p class="text-gray-700">
                    At MarBakes, we believe in the magic of fresh pastries. Our recipes are crafted with care,
                    using only the finest ingredients to bring you moments of joy in every bite.
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="max-w-7xl mx-auto px-4 py-16">
        <h3 class="text-3xl font-bold text-center text-amber-800 mb-8">Gallery</h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
            <img src="/images/pastry1.jpg" class="rounded-lg shadow" alt="Pastry">
            <img src="/images/pastry2.jpg" class="rounded-lg shadow" alt="Pastry">
            <img src="/images/pastry3.jpg" class="rounded-lg shadow" alt="Pastry">
            <img src="/images/pastry4.jpg" class="rounded-lg shadow" alt="Pastry">
            <img src="/images/pastry5.jpg" class="rounded-lg shadow" alt="Pastry">
            <img src="/images/pastry6.jpg" class="rounded-lg shadow" alt="Pastry">
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-amber-900 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h4 class="text-lg font-semibold">Contact Us</h4>
            <p class="mt-2">📍 123 Pastry Lane, Sweet City</p>
            <p>📞 +213 123 456 789</p>
            <p>📧 info@marbakes.com</p>
            <p class="mt-4 text-sm text-gray-300">&copy; 2025 MarBakes. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
