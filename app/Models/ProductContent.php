<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class ProductContent extends Model
{

    use HasFactory;
    protected $table='procontent';
    protected $fillable=['product_id','content_id','key','value'];
    /*public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function content()
    {
        return $this->belongsTo(Content::class,'content_id','id');
    }*/

}
