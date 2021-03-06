<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Helpers\RImage;

class CartController extends Controller
{

    public function index()
    {
        $q=Input::get('q',1);

        if ($id = Input::get('id')) {
            $this->add((int)$id,(int)$q);
            return Redirect::action('CartController@index');
        } else {
            return view('sale.cart')->with('cart', Cart::content());
        }
    }

    public function add($id,$qty=1)
    {
        $product = Product::findOrFail($id);
        $imagine = new RImage();

        Cart::add($id, $product->name, $qty, $product->price,
            array(
                'sku' => $product->sku,
                'credit' => $product->credit,
                'can_use_credit' => $product->can_use_credit,
                'image' => $imagine->getUrl($product->images[0]->path),
                'ship_fee'=>$product->ship_fee,
                'ship_one_fee'=>$product->ship_one_fee
            )
        );
    }


    public function remove()
    {
        $id = Input::get('id');
        if (Cart::get($id)){
            Cart::remove($id);
            return 1;
        }else{
            return 0;
        }

    }

    public function update()
    {
        $rowId = Input::get('id');
        $qty = Input::get('qty');
        return Cart::update($rowId, $qty);
        //Cart::update($rowId, array('name' => 'Product 1'));
        //
        //Cart::destroy()
    }

}
