<?php
/**
 * Created by PhpStorm.
 * User: Borislav
 * Date: 9.1.2019 г.
 * Time: 04:14 ч.
 */

namespace App;


use Illuminate\Support\Facades\Session;

class Cart
{
    public $items; //['id'=>['quantity'=>'quantity''price']]
    public $totalQuantity;
    public $totalPrice;
    public function __construct($prevCart)
    {
        if($prevCart!=null){
            $this->items=$prevCart->items;
            $this->totalQuantity=$prevCart->totalQuantity;
            $this->totalPrice=$prevCart->totalPrice;
        }
        else{
            $this->items=[];
            $this->totalQuantity=0;
            $this->totalPrice=0;
        }
    }
    public function addItem($id,$product){
        $price=(double)str_replace('$','',$product->price);
        if(array_key_exists($id,$this->items)){
            $productToAdd=$this->items[$id];
            $productToAdd['quantity']++;
            //$productToAdd['price']+=$price;
            $productToAdd['totalSinglePrice']=$productToAdd['quantity']*$price;
            //Session::forget('cart');
        }else{
            $productToAdd=['quantity'=>1,'price'=>$price,'totalSinglePrice'=>$price,'data'=>$product];

        }
        $this->items[$id]=$productToAdd;
        $this->totalQuantity++;
        $this->totalPrice+=$price;

    }
}