<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request){
        return view('frontend.products');
    }

    public function product(Request $request, $slug){

        $product = [];

        if ($slug == 'ceylon-cinnamon-quills'){
            $product = [
                'product' => 'Ceylon Cinnamon Quills',
                'description' => 'Hand-rolled with precision, preserving the signature aroma and golden hue of true Ceylon cinnamon.',
                'price' => 'LKR ' . number_format(740, 2),
                'weight' => '25g',
                'images' => [
                    'product-quills.jpg',
                    'product-quills-1.jpg',
                    'product-quills-2.jpg',
                ],
            ];
        }
        elseif ($slug == 'ceylon-cinnamon-powder'){
            $product = [
                'product' => 'Ceylon Cinnamon Powder',
                'description' => 'Finely ground to perfection — ideal for both gourmet creations and everyday wellness.',
                'price' => 'LKR ' . number_format(1050, 2),
                'weight' => '30g',
                'images' => [
                    'product-powder.jpg',
                    'product-powder-1.jpg',
                    'product-powder-2.jpg',
                ],
            ];
        }


        if(empty($product)){
            return view('frontend.products');
        }

        $product = (Object)$product;

        return view('frontend.product', ['product' => $product]);
    }
}
