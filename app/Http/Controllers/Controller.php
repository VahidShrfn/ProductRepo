<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function makeId(){

        $product = new Product;
        $product->makeId();

    }

    public function loadMeta(){

        $product = new Product;
        $product->loadMeta(13);

    }

    public function delete(){

        $product = new Product;
        $product->delete(13);

    }
}
