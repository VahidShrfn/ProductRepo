<?php

namespace App\Models;

use Database\Factories\ProductMetaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tests\Unit\ProductTest;

class ProductMetas extends Model
{ 
    use HasFactory;
    protected $table = 'products_meta';
    protected $fillable = ['key','value'];
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function newFactory(){
        
        return ProductMetaFactory::new();
    
    }
}
