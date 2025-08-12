<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function dash(){
       $customers=customer::with('orders')->orderBy('created_at','asc')->get();
       return view('admin.dashboard', compact('customers'));
    }
    public function showCustomerOrders($id)
{
    $customer = Customer::with('orders')->findOrFail($id);
    return view('admin.customer_orders', compact('customer'));
}

public function deleteCustomer($id)
{
    Customer::findOrFail($id)->delete();
    return back()->with('success', 'Customer deleted successfully.');
}
public function customerstatustoggle($id){
    $customer=customer::findOrfail($id);
    $customer->status=!$customer->status;
    $customer->save();
    return redirect()->back();
}
}
