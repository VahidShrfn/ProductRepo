<?php

namespace App;
use App\Models\Product as ModelsProduct;
use App\Models\Content as Modelscontent;
use App\Models\ProductContent as ModelsProductContent;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;
use PDO;

define("PICTURE_KEY","picture");
define("DESCRIPTION_KEY","description");
define("PRICE_KEY","price");

define("VIDEO_KEY","video");
class Product{

    private ?string $value;
    private ?string $key;
     

    public function makeId(){
        $product = ModelsProduct::query()
            ->create([
                "type"=>"mobile",
                "status"=>"active",
            ]);
        $product->meta()->createMany([
            [
                'key'=>PICTURE_KEY,
                'value'=>'pic',
            ],
            [
                'key'=>DESCRIPTION_KEY,
                'value'=>'des'
            ],
            [
                'key'=>PRICE_KEY,
                'value'=>'100'
            ]
        ]);
        $content = Modelscontent::find([3, 4]);
        $product->contents()->attach($content);
    }

    public function loadMeta($id){

        $product= ModelsProduct::where('id', $id)->first()->
            meta()->where([
                ['key',PICTURE_KEY],
                ['key',DESCRIPTION_KEY],
                ['key',PRICE_KEY]
                ])->first();

        print_r($product);
    }

    public function delete($id){

        $product = ModelsProduct::query()
            ->where('id', $id)->update([
                "status"=>"deactive"
            ]);

    }


    public function setValue($value){
        $this->value=$value;
    }
    public function getValue(){
        return $this->value;
    }
    public function setKey($key){
        $this->key=$key;
    }
    public function getKey($key){
        return $this->key;
    }

}
