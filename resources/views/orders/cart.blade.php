@extends('components.layout')

@section('content')
<div id="deliveryNotice" class=" bg-yellow-200 w-full text-yellow-900 px-6 py-3 rounded shadowopacity-0 translate-x-20 transition-all duration-1000 ease-out">
    <p class="text-center text-lg md:text-xl font-semibold text-[rgb(54,36,8)]">
        Livraison disponible à <span class="text-yellow-700">Boumerdes</span> et <span class="text-yellow-700">Alger</span>
    </p>
</div>
    <h1 class="text-2xl font-bold py-4  px-10">Finaliser la commande</h1>

    {{-- Cart Summary --}}
    <div class="px-10 py-2">
        <h2 class="text-xl font-semibold mb-4" d>Votre panier</h2>
        @if(count($cart) == 0)
        <h2 class="text-xl font-semibold mb-4 text-red-400">Votre panier est vide</h2>
        @else
        @foreach($cart as $item)
            <div class="border px-3 py-1 rounded mb-3 bg-white shadow">
                <p class="font-semibold">{{ $item['name'] }}</p>
                <p>Quantité: {{ $item['quantity'] }}</p>
                <p>Garniture: {{ $item['filling'] }}</p>
                <p>Specification: {{ $item['specification'] }}</p>
                <p class="text-green-600 font-bold">Prix total: {{ $item['total_price'] }} DA</p>
            </div>
        @endforeach 
        @endif
    </div>

    {{-- Checkout Form --}}
    <form action="{{route('cart.submitorder')}}" method="POST" class="space-y-4 px-10">
        @csrf

        <div>
            <label class="block font-medium">Nom complet</label>
            <input type="text" name="name" required class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <div>
            <label class="block font-medium">Numéro de téléphone</label>
            <input type="text" name="phone" required class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <div>
            <label class="block font-medium">Wilaya</label>
            <input required type="text" placeholder="Etrez votre wilaya...." name="wilaya" class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <div>
            <label class="block font-medium">Commune</label>
            <input type="text" name="commune" placeholder="Etrez votre commune...." class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <div>
            <label class="block font-medium">Date préférée de livraison</label>
            <input type="date" name="date" placeholder="Etrez votre wilaya...." required class="border border-gray-300 rounded px-3 py-2 w-full">
        </div>

        <button type="submit" 
                class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg">
            Confirmer la commande
        </button>
    </form>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const notice = document.getElementById("deliveryNotice");

    // Delay for a smoother entrance
    setTimeout(() => {
        notice.classList.remove("opacity-0", "translate-x-20");
        notice.classList.add("opacity-100", "translate-x-0");
    }, 200);
});
</script>
@endsection


