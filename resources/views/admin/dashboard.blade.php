@extends('components.adminlayout')
@section('content')
<div class=" p-6 bg-gray-50 min-h-screen">
    <h1 class="text-2xl font-bold mb-4">Customers</h1>
    <div class="flex flex-col gap-2">
        @foreach($customers as $customer)
        <a href="{{ route('admin.customer.orders', $customer->id) }}">

            <div class="flex flex-row  justify-between bg-white rounded-lg shadow-md p-4 cursor-pointer hover:shadow-lg transition">
                <div class="flex flex-col">
                    <div class="flex row items-center gap-2 ">
                        <h1 class="text-lg font-bold text-gray-800 ">{{ $customer->name }}</h1>
                        <h1 class="text-md font-semibold text-red-500"> {{ $customer->date }}</h1>
                    </div>
                    <div>
                        <p class="text-gray-600">Tel: {{ $customer->phone }}</p>
                        <p class="text-gray-600">Wilaya: {{ $customer->wilaya }}</p>
                        <p class="text-gray-600">Commune: {{ $customer->commune }}</p>
                        <p class="text-sm text-gray-500">Joined: {{ $customer->created_at->format('d/m/Y h:m') }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <form action="{{ route('admin.customerstatus.toggle', $customer->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="w-4 h-4 rounded-full {{ $customer->status ? 'bg-green-500' : 'bg-red-500'}}">
                        </button>
                    </form>
                    <form action="{{ route('admin.customer.delete', $customer->id) }}" method="POST" onsubmit="return confirm('Delete this customer?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            
        </a>
        @endforeach
    </div>
</div>
@endsection

