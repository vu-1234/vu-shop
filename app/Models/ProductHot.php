<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductHot extends Model
{
    use HasFactory, SoftDeletes;

    protected $tatble = 'product_hots';

    protected $fillable = ['product_id', 'quantity_sale'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
