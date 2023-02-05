<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function makeWithId(){
        $product = new Product;
        $product->makeId();
    }

    public function loadMeta(){
        $product = new Product;
        $product = $product->loadMeta(57);
        print_r($product);  
    }

    public function delete(){
        $product = new Product;
        $product = $product->delete('35');
        
    }

    public function update(){
        $product = new Product;
        $product = $product->updateMeta(55,200,'','pec');
    }
}
