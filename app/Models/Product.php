<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['type','status'];
    public function product()
    {
        return $this->morphMany(content::class, 'id');
    }

    public function meta()
    {
        return $this->hasMany(ProductMetas::class,"product_id");
    }

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_products');
    }

}
