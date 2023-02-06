<?php

namespace App\Models;

use Database\Factories\ContentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table='content';

    protected $fillable =['path','hash'];
    
    public function products(){
        return $this->belongsToMany(Product::class, 'content_products');
    }

    public static function newFactory(){
        return ContentFactory::new();
    }
}
