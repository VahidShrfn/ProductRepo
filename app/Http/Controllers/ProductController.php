<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function makeWithId(){
        $product = new Product;
        $product->makeId();
        return 'Done';
    }

    public function loadMeta(){
        $product = new Product;
        $product = $product->loadMeta(12000);
        print_r($product);
    }

    public function delete(){
        $product = new Product;
        $product = $product->delete('136');

    }

    public function update(){
        $product = new Product;
        $product = $product->updateMeta(200,200,'','pec');
    }

    public function test(){

        $product = new Product;
        $product->test();

    }
}
