<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\order;
use Illuminate\Support\Facades\Storage;
class product extends Model
{
    protected $fillable=['name','description','priceamande','pricecacahuete','image','available','type'];
        protected $casts = [
        'available' => 'boolean',
    ];

    public function order(){
        return $this->belongsTo('order::class');
    }

    public function getImageUrlAttribute()
{
    if (! $this->image) {
        return asset('images/placeholder.png');
    }

    $diskName = config('filesystems.default');

    //safety if file doesn't exist 
    if (! Storage::disk($diskName)->exists($this->image)) {
        return asset('images/placeholder.png');
    }

    // if bucket is public, url() works:
    if ($diskName === 's3') {
        // if bucket is private use temporaryUrl() instead:
        // return Storage::disk('s3')->temporaryUrl($this->image, now()->addMinutes(60));
        return Storage::disk('s3')->url($this->image);
    }

    return Storage::disk($diskName)->url($this->image);
}

}
