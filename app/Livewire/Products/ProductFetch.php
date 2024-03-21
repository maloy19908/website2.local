<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\Attributes\On;
use PDO;

class ProductFetch extends Component
{
    private $url ='https://dummyjson.com/';
    public $query ='';

    public function fetchGet(){
        return Http::get($this->url.$this->query)->json();
    }
    public function fetchShow(){
        dump($this->fetchGet());
    }
    public function fetchAndStore(){
        $response = $this->fetchGet();
        $products = $response['products'];
        foreach ($products as $key => $value) {
            Product::firstOrCreate([
                'title'=>$value['title'],
                'description'=>$value['description'],
                'price'=>$value['price'],
                'discountPercentage'=>$value['discountPercentage'],
                'rating'=>$value['rating'],
                'stock'=>$value['stock'],
                'brand'=>$value['brand'],
                'category'=>$value['category'],
                'thumbnail'=>$value['thumbnail'],
                'images'=>json_encode($value['images']),
            ]);
        }
    }
    #[On('product-delete')]
    public function deleteItem($id){
        if(!empty(Product::find($id))){
            Product::find($id)->delete();
            return true;
        }
    }
    public function render()
    {   
        return view('livewire.products.product-fetch',[
            'products'=>Product::all(),
        ]);
    }
}
