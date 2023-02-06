<?php

namespace Tests\Unit;

use App\Models\Content as Modelscontent;
use App\Models\Product as ModelsProduct;
use App\Models\ProductMetas;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $prodcut= ModelsProduct::factory()
            ->has(ProductMetas::factory()->count(3),'meta')->create();
        $prodcut = ModelsProduct::factory()
            ->hasAttached(
                Modelscontent::factory()->count(3)
            )
            ->create();
        $this->assertTrue($prodcut);
    }
}
