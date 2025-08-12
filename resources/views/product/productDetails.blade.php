@extends('components.layout')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row gap-8 p-6">
        
        {{-- Product image --}}
        <div class="flex-shrink-0 w-full md:w-1/2">
            <img class="w-full h-auto rounded-lg object-cover aspect-square" 
                 src="{{ asset('images/products/' . urlencode($product->image)) }}" 
                 alt="{{ $product->name }}">
        </div>

        {{-- Product details --}}
        <div class="flex flex-col justify-between w-full md:w-1/2">
            <div>
                <form action="{{ route('cart.add') }}" method="POST" id="addToCartForm">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">

                    <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $product->name }}</h1>

                    {{-- Tradtionnel: filling select --}}
                    @if($product->type == 'traditionnel')
                        <label for="filling" class="block text-gray-700 font-medium mb-1">Type de garniture</label>
                        <select name="filling" id="filling" class="w-full border rounded px-3 py-2 mb-4 focus:ring focus:ring-yellow-300">
                            <option value="amande" data-price="{{ $product->priceamande }}">Amande - {{ $product->priceamande }} DA</option>
                            <option value="cacahuete" data-price="{{ $product->pricecacahuete }}">Cacahuète - {{ $product->pricecacahuete }} DA</option>
                        </select>
                    @else
                        {{-- Modern: no filling, hidden input --}}
                        <input type="hidden" name="filling" value="">
                        <h2 class="block text-gray-700 text-xl font-medium mb-1">Prix unitaire:</h2>
                        <p class="font-semibold text-xl">{{ $product->priceamande }} DA</p>
                        <input type="hidden" id="modernPrice" value="{{ $product->priceamande }}">
                    @endif

                    {{-- Quantity --}}
                    <label class="block text-gray-700 font-medium mb-1">Quantité</label>
                    <div class="flex items-center gap-2 mb-4">
                        <button type="button" id="decreaseQty" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">-</button>
                        <input name="quantity" id="quantity" type="number" min="1" value="1" class="w-16 text-center border rounded">
                        <button type="button" id="increaseQty" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
                    </div>

                    {{-- Total price --}}
                    <p class="text-lg font-semibold mb-4">Total: <span id="totalPrice">{{ $product->type == 'traditionnel' ? $product->priceamande : $product->priceamande }}</span> DA</p>
                    <input type="hidden" name="total_price" id="totalPriceInput" value="{{ $product->type == 'traditionnel' ? $product->priceamande : $product->priceamande }}">

                    {{-- Specification --}}
                    <label for="specification" class="block text-gray-700 font-medium mb-1">Spécifications</label>
                    <textarea name="specification" id="specification" rows="3" placeholder="Ajoutez vos préférences..." 
                              class="w-full border rounded px-3 py-2 mb-4 focus:ring focus:ring-yellow-300"></textarea>

                    {{-- Submit --}}
                    <button type="submit" class="cursor-pointer w-full bg-yellow-500 text-white font-semibold py-2 px-4 rounded hover:bg-yellow-600">
                        Ajouter au panier
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const fillingSelect = document.getElementById('filling');
    const quantityInput = document.getElementById('quantity');
    const totalPriceEl = document.getElementById('totalPrice');
    const totalPriceInput = document.getElementById('totalPriceInput');
    const increaseBtn = document.getElementById('increaseQty');
    const decreaseBtn = document.getElementById('decreaseQty');
    const modernPriceEl = document.getElementById('modernPrice');

    function updateTotal() {
        let pricePerUnit;
        if (fillingSelect) {
            pricePerUnit = parseFloat(fillingSelect.options[fillingSelect.selectedIndex].dataset.price);
        } else {
            pricePerUnit = parseFloat(modernPriceEl.value);
        }
        let quantity = parseInt(quantityInput.value);
        let total = pricePerUnit * quantity;
        totalPriceEl.textContent = total;
        totalPriceInput.value = total;
    }

    if (fillingSelect) fillingSelect.addEventListener('change', updateTotal);
    quantityInput.addEventListener('input', updateTotal);

    increaseBtn.addEventListener('click', () => {
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateTotal();
    });

    decreaseBtn.addEventListener('click', () => {
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updateTotal();
        }
    });

    updateTotal();

</script>
@endsection
