<?php

namespace App\Http\Controllers;

use App\catalog;
use App\product;

class cartController extends Controller
{
 public function addToCart($productID)
 {
  // $quantity = array(
  //     'quantity' => $request -> quantity
  // );
  $listCatalogBig     = catalog::where('idParentCatalog', '=', 0)->get();
  $listCatalog        = catalog::all();
  $listProductByBuy   = product::orderBy('buyedProduct', 'desc')->paginate(8);
  $listProductNew     = product::orderBy('idProduct', 'desc')->paginate(4);
  $getProducts        = product::where('idProduct', '=', $productID)->get();
  $getProduct         = product::where('idProduct', '=', $productID)->first();
  $getCatalogById     = catalog::where('idCatalog', '=', $getProduct['idCatalogProduct'])->get();
  $getListProductById = product::where('idCatalogProduct', '=', $getProduct['idCatalogProduct'])->get();
  $cart               = session()->get('carts');

  if (!$cart) {
   $cart = [
    $productID => [
     "id"       => $getProduct->idProduct,
     "name"     => $getProduct->nameProduct,
     "quantity" => 1,
     "price"    => $getProduct->priceProduct,
     "images"   => $getProduct->imgProduct,
    ],
   ];
   session()->put('carts', $cart);
  } elseif (isset($cart[$productID])) {
   $cart[$productID]['quantity']++;
   session()->put('carts', $cart);
  } else {
   $cart[$productID] = [
    "id"       => $getProduct->idProduct,
    "name"     => $getProduct->nameProduct,
    "quantity" => 1,
    "price"    => $getProduct->priceProduct,
    "images"   => $getProduct->imgProduct,
   ];
   session()->put('carts', $cart);
  }
  $data = [
   'getProduct'       => $getProducts[0],
   'carts'            => $cart,
   'listProductByBuy' => $listProductByBuy,
   'listProductNew'   => $listProductNew,
   'listCatalogBig'   => $listCatalogBig,
   'listCatalog'      => $listCatalog,
   'catalogById'      => $getCatalogById[0],
   'listProductById'  => $getListProductById,
  ];
  return view('product/showProduct', $data);
  // return $cart;
 }

 public function deleteItemCart($id)
 {
  $cartItem = session('carts');
  unset($cartItem[$id]);
  session(['carts' => $cartItem]);
  if($cartItem == []){
    session() -> forget('carts');
  }
  return redirect() -> back();
// return $cartItem;
 }
 public function cartShow()
 {
  $listCatalogBig = catalog::where('idParentCatalog', '=', 0)->get();
  $listCatalog    = catalog::all();
  $cart           = session()->get('carts');
  $data           = [
   'listCatalogBig' => $listCatalogBig,
   'listCatalog'    => $listCatalog,
   'carts' => $cart
  ];
  return view('cart/cart', $data);
//   return $cart;
 }

 function upQuantity($id){
     $cart = session() -> get('carts');
     $cart[$id]['quantity']++;
     session(['carts' => $cart]);
     session()->flash('success', 'Cart updated successfully');
     return redirect() -> back();
 }

 function downQuantity($id){
     $cart = session() -> get('carts');
     $cart[$id]['quantity']--;
     if($cart[$id]['quantity'] == 0){
        unset($cart[$id]);
     }
     session(['carts' => $cart]);
     if($cart == []){
        session() -> forget('carts');
      }
     session()->flash('success', 'Cart updated successfully');
     return redirect() -> back();
 }
}
