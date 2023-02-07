<?php

namespace Tests\Unit;

use App\Models\Content as Modelscontent;
use App\Models\Product as ModelsProduct;
use App\Models\ProductMetas;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public  function  test_make_id(){
        $product= ModelsProduct::factory()
            ->has(ProductMetas::factory()->count(3),'meta')
            ->hasAttached(Modelscontent::factory()->count(3))->create();
        $response=$this->post('/api/product/makeId',$product->toArray());
        $response->assertStatus(200);
        $response->dumpHeaders();
        $response->dumpSession();
        $response->dump();
    }
    public function test_load_meta(){
        $product= ModelsProduct::factory()
            ->has(ProductMetas::factory()->count(3),'meta')
            ->hasAttached(Modelscontent::factory()->count(3))->create();
        $response = $this->get('/api/product/loadMeta',$product->toArray());
        $response->assertStatus(200);
    }

    public function  test_delete(){
        $product= ModelsProduct::factory()
            ->has(ProductMetas::factory()->count(3),'meta')
            ->hasAttached(Modelscontent::factory()->count(3))->create();
        $response=$this->get('/api/product/deleteMeta',$product->toArray());
        $response->assertStatus(200);
    }
}
