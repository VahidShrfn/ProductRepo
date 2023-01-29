<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product as ModelsProduct;


class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_makeId(){

        $product = new  ModelsProduct();
        $lastId=$product->query()
        ->latest()
        ->first();
        $product->makeId();
        $response=$this->get('/');
        //$response->a
    }
}
