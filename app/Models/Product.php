<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model
{
    use HasFactory;
    protected $fillable = 
[
    'nameproduct',
     'brand_id',
     'stock',
     'unit_price',
    'imagen'
];

public function brand(): BelongsTo //relacion de uno amuchos invertida
{
    return $this->belongsTo(Brand::class, 'brand_id');
}

}
