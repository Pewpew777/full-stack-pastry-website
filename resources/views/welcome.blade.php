use Illuminate\Support\Str;
@extends('components.layout')
@section('header-extra-class', 'absolute')
@section('content')
    <div style="background-image: url('images/pexels-anete-lusina-32086078.jpg');" class="bg-cover bg-center h-screen w-screen flex flex-col justify-center items-center text-center gap-10">
        <div class="hero-content">
            <h1 class="font-dmserif text-[rgb(54,36,8)] font-semibold  text-[8vw] md:text-[6vw] lg:text-[4vw] mt-18" style="text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);">GATEAUX MAROUA</h1>
            <p class="text-white font-semibold text-[3vw] lg:text[3vw]">Where luxury meets taste.</p>
        </div>
        <div class=" flex flex-col sm:flex-row gap-4">
            <a href="#traditionnels" class="cursor-pointer p-[1.5vw] lg:p-[1.2vw] text-[rgb(54,36,8)] font-medium text-base bg-[rgb(252,246,237)] rounded hover:scale-101 transition-transform duration-100">Gateaux Traditionels Algeriens</a>
            <a href="#moderns" class="cursor-pointer p-[1.5vw] lg:p-[1.2vw] text-[rgb(54,36,8)] font-medium text-base bg-[rgb(252,246,237)] rounded hover:scale-101 transition-transform duration-100">Gateaux Moderns</a>
        </div>
    </div>


<div class="bg-[rgb(252,246,237)] pt-7">

        <div id="bestsellers" class="bg-white shadow rounded m-3">

            <h1 class="text-center pt-6 px-6 text-shadow font-dmserif text-[rgb(54,36,8)] font-semibold text-3xl md:text-4xl mb-6">Nos Bestsellers</h1>

            <div class="grid sm:grid-cols-3 divide-y sm:divide-y-0 sm:divide-x divide-gray-300 p-4">

                @foreach($bestsellersOrdered as $index => $product)
                <a href="{{route('showProduct',$product->id)}}">
                    <div class="p-4 flex flex-col gap-2 ">
                        <img class="hover:scale-101 transition aspect-[4/3] w-full  object-cover rounded" 
                            src="{{ Str::startsWith($product->image,'products/') ? asset('storage/'.$product->image) : asset('images/products/'.$product->image) }}"
                        alt="{{ $product->name }}" loading="lazy">
                        <div class="flex flex-col gap-2">
                            <h3 class="text-lg font-bold mt-2">{{ $product->name }}</h3>
                            <p class="text-gray-600 mt-1">{{ $descriptions[$index] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>


    <div id="traditionnels" class="mt-8 pt-8">
        <h1 class=" px-4 text-shadow font-dmserif text-[rgb(54,36,8)] font-semibold text-3xl md:text-4xl mb-8">Gateaux Traditionels Algeriens</h1>

        <div class="grid gap-[30px] p-5 grid gap-[30px] p-5 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">

            @foreach ($products as $product)

            @if($product->type =='traditionnel')
            <a href="{{route('showProduct',$product->id)}}">

                <div class="relative group flex flex-col bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">

                    <div class="{{$product->available?'hidden' :'flex'}} absolute top-3 left-0 bg-[rgb(54,36,8)] text-[rgb(252,246,237)] font-semibold px-3 py-1 rounded-r">EN REPTURE </div>
                    @if(Str::startsWith($product->image, 'products/'))
                        <img class="aspect-square object-cover group-hover:scale-105 transition-transform" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <img class="aspect-square object-cover group-hover:scale-105 transition-transform" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
                    @endif

                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div class="info">
                            <p class="font-bold text-lg">{{$product->name}}</p>
                            <p class="text-gray-600 text-sm mt-1">{{$product->priceamande}}DA /{{$product->pricecacahuete}}DA</p>
                        </div>
                        <button class="mt-4 bg-yellow-600 text-white py-2 px-4 rounded hover:bg-yellow-700 transition">Commander</button>
                    </div>

                </div>
            </a>
            @endif

            @endforeach

        </div>
    </div>


    <div class="px-2 pt-4 mt-4" id="moderns">
        <h1 class=" px-4 font-dmserif text-[rgb(54,36,8)] font-semibold text-3xl md:text-4xl mb-8">Gateaux Moderns</h1>

        <div class="grid gap-[30px] p-5 grid-cols-2 sm:grid-cols-3 md:grid-cols-4">

            @foreach ($products as $product)

            @if($product->type =='modern')
            <a href="{{route('showProduct',$product->id)}}">

                <div class="relative group flex flex-col bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">

                    <div class="{{$product->available?'hidden' :'flex'}} absolute top-3 left-0 bg-[rgb(54,36,8)] text-[rgb(252,246,237)] font-semibold px-3 py-1 rounded-r">EN REPTURE </div>
                    @if(Str::startsWith($product->image, 'products/'))
                        <img class="aspect-square object-cover group-hover:scale-105 transition-transform" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <img class="aspect-square object-cover group-hover:scale-105 transition-transform" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
                    @endif
                
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="font-bold text-lg">{{$product->name}}</p>
                            <p class="text-gray-600 text-sm mt-1">{{$product->priceamande}}DA /{{$product->pricecacahuete}}DA</p>
                        </div>
                        <button class="mt-4 bg-yellow-600 text-white py-2 px-4 rounded hover:bg-yellow-700 transition">Commander</button>
                    </div>

                </div>
            </a>
            @endif

            @endforeach

        </div>
    </div>
     <!-- Delivery Notice -->
    <div id="deliveryNotice" class=" bg-yellow-200 text-yellow-900 p-3 mb-20 mt-3 rounded opacity-0 translate-y-0 transition-all duration-1000 ease-out">
        <p class="text-center text-lg md:text-xl font-semibold text-[rgb(54,36,8)]">
         Livraison disponible à <span class="text-yellow-700">Boumerdes</span> et <span class="text-yellow-700">Alger</span>
        </p>
    </div>

    <!-- Footer -->
    <footer class="bg-[rgb(54,36,8)] text-[rgb(252,246,237)] mt-10">
        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-3 gap-8">
            
            <div>
                <h2 class="font-dmserif text-xl mb-3">GATEAUX MAROUA</h2>
                <p class="text-sm opacity-80">
                    Pâtisseries artisanales où luxe et goût se rencontrent.
                </p>
            </div>
            
            <div>
                <h2 class="font-dmserif text-xl mb-3">Liens rapides</h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:underline">Accueil</a></li>
                    <li><a href="#bestsellers" class="hover:underline">Bestsellers</a></li>
                    <li><a href="#traditionnels" class="hover:underline">Gateaux Traditionnels</a></li>
                    <li><a href="#moderns" class="hover:underline">Gateaux Moderns</a></li>
                </ul>
            </div>

            <div>
                <h2 class="font-dmserif text-xl mb-3">Contact</h2>
                <ul class="space-y-3 text-sm">
                    <li ><a class="flex gap-2" href="https://www.instagram.com/gateaux_maroua_" target="_blank" class="instagram-icon">
                    <img class="w-6" src="{{asset('storage/products/5968776.png')}}" alt="insta"> gateaux_maroua_</a></li>
                    <li>📍 Ouled Hedadj, Boumerdes, Alger</li>
                    <li>📞 +213 5xx xx xx xx</li>
                    <li>📧 contact@gateauxmaroua.dz</li>
                </ul>
            </div>

        </div>

        <div class="border-t border-[rgb(252,246,237)]/20 text-center py-4 text-sm opacity-70">
            © {{ date('Y') }} Gateaux Maroua. Tous droits réservés.
        </div>
    </footer>
</div>
<script>
    document.addEventListener("scroll", () => {
        const notice = document.getElementById("deliveryNotice");
        const triggerPoint = 50; // Scroll in pixels before showing

        if (window.scrollY > triggerPoint) {
            notice.classList.remove("opacity-0", "translate-y-0");
            notice.classList.add("opacity-100", "translate-y-10");
        } else {
            notice.classList.add("opacity-0", "translate-y-10");
            notice.classList.remove("opacity-100", "translate-x-0");
        }
    });
</script>

@endsection
