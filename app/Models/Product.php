<?php

namespace Tests\Unit;
namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['type','status'];
    protected $table = 'products';
    public function product()
    {
        return $this->morphMany(content::class, 'id');
    }

    public function meta()
    {
        return $this->hasMany(ProductMetas::class);
    }

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_products');
    }

    protected static function newFactory(){

        return ProductFactory::new();

    }


}
