@extends('components.adminlayout')
@section('content')
<h1 class="font-dmserif text-[rgb(54,36,8)] font-semibold px-6 text-[7vw] md:text-[6vw] lg:text-[4vw] mt-12">Mes Produits </h1>
    <ul class="grid  p-5 grid gap-[10px] p-5 grid-cols-3 sm:grid-cols-4 md:grid-cols-5">
        @foreach ($products as $product)
            <li class="flex flex-col justify-between items-start shadow-sm p-2 h-full bg-white rounded-lg overflow-hidden">
                <p class="font-semibold">{{$product->name}}</p>

                <div class="flex flex-col gap-2 items-start">
                <form action="{{route('admin.repture',$product)}}" method="POST">
                    @csrf
                    @method('patch')
                    <button class="bg-gray-100 rounded px-2 py-1">{{$product->available? 'Marquer en repture' :'Marquer disponible'}}</button>
                </form>

                <form action="{{route('admin.deleteproduct',$product)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="bg-red-300 rounded px-2 py-1">Supprimer</button>
                </form>
                </div>
            </li>
        @endforeach
        </ul>
<div class="max-w-2xl my-5 mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Ajouter un Produit</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-semibold">Price Amande</label>
            <input type="number" step="0.01" name="priceamande" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-semibold">Price Cacahuete</label>
            <input type="number" step="0.01" name="pricecacahuete" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2" rows="3"></textarea>
        </div>

        <div>
            <label class="block font-semibold">Image</label>
            <input type="file" name="image" class="w-full border rounded px-3 py-2" accept="image/*" required>
        </div>

        <div>
            <label class="block font-semibold">Type</label>
            <select name="type" class="w-full border rounded px-3 py-2" required>
                <option value="">-- Select Type --</option>
                <option value="modern">Modern</option>
                <option value="traditionnel">Traditionnel</option>
            </select>
        </div>

        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="available" value="1" checked>
                <span class="ml-2">Available</span>
            </label>
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Save Product
            </button>
        </div>
    </form>
</div>
@endsection
