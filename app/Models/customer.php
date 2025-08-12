<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\order;
class customer extends Model
{
    protected $fillable=['name','phone','wilaya','commune','date','status'];
    protected $casts=['status'=>'boolean'];

    public function orders(){
        return $this->hasMany(order::class);
    }
}
