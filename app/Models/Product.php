<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'price' => \Naykel\Gotime\Casts\CurrencyCast::class,
    ];

    public function imageUrl() {
        return $this->image_name ? Storage::disk('products')->url($this->image_name) : "/svg/placeholder.svg";
    }
}
