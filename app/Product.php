<?php

namespace App;
use App\Models\Product as ModelsProduct;
use App\Models\Content as Modelscontent;
use App\Models\ProductContent as ModelsProductContent;
use App\Models\ProductMetas;
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
    public function __construct(){
    }

    public function makeId(){
        $product = ModelsProduct::query()
            ->create([
            "type"=>"laptop",
            "status"=>"active"]
        ); 
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
            ]
        );
        $content = Modelscontent::query()->create([
            "hash"=>"hash",
            "path"=>"path"
        ]);
        $product->contents()->attach($content);
    }
    public function loadMeta($id){
        $product = ModelsProduct::query()->where('id',$id)->first();
        $status=$product->status;
        if($status=='active'){
            $product = ModelsProduct::query()->where('id', $id)->first()
                ->meta()->whereIn('key',[PICTURE_KEY, DESCRIPTION_KEY, PRICE_KEY])->get();     
            return $product->toJson(JSON_PRETTY_PRINT);
        }
        return 'Product Not Found';
    }
    public function delete($id){
        $product = ModelsProduct::query()
            ->where('id', $id)->update([
                "status"=>"deactive"
            ]
        ); 
    }
    public function updateMeta($id,$price,$description,$picture){
        if($price!=null){
            $product = ModelsProduct::query()
                ->where('id', $id)->first()->meta()->where('key', PRICE_KEY)
                ->update([ "value" => $price]);

        }
        //dd(__LINE__);
        if($description!=null){
            $product = ModelsProduct::query()
                ->where('id', $id)->first()->meta()->where('key',DESCRIPTION_KEY)
                    ->update(["value"=>$description]);
        }
        if($picture!=null){
            $product = ModelsProduct::query()
                ->where('id', $id)->first()->meta()->where('key',PICTURE_KEY)
                    ->update(["value"=>$picture]);
        }
        echo 'Done';
    }


    public function test(){

        $prodcut= ModelsProduct::factory()
            ->has(ProductMetas::factory()->count(3),'meta')->create();
        $prodcut = ModelsProduct::factory()
            ->hasAttached(
                Modelscontent::factory()->count(3)
            )
            ->create();
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