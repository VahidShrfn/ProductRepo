<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductMetas extends Model
{
    use HasFactory;
    protected $table = 'products_meta';
    protected $fillable = ['key','value'];
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
