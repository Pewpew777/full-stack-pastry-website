@extends('components.adminlayout')
@section('content')
<div class="p-6 bg-gray-50 min-h-screen">
    <h1 class="text-2xl font-bold mb-4">Commandes de {{ $customer->name }} </h1>
    <p class="mb-6 text-gray-600">Tel: {{ $customer->phone }}</p>

    @forelse($customer->orders as $order)
        <div class="bg-white rounded-lg shadow p-4 mb-4">
            <p><strong>Product ID:</strong> {{ $order->product_id }}</p>
            <p><strong>Name:</strong> {{ $order->name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Filling:</strong> {{ $order->filling ?? 'N/A' }}</p>
            <p><strong>Specification:</strong> {{ $order->specification ?? 'N/A' }}</p>
            <p class="text-green-600 font-bold"><strong>Total Price:</strong> {{ $order->total }} DA</p>
            <p class="text-sm text-gray-500">Status: {{ $order->status ?? 'Unknown' }}</p>
        </div>
    @empty
        <p>No orders found for this customer.</p>
    @endforelse
</div>
@endsection