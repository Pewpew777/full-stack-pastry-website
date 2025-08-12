<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\product;
class order extends Model
{
    protected $fillable=['product_id','customer_id','name','filling','quantity','specification','total'];

    
        public function customer(){
        return $this->belongsTo(customer::class);
    }
    
    public function products(){
        return $this->hasMany(product::class);
    }
}
