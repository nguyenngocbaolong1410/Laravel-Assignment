<?php

namespace App\Http\Controllers;

use App\catalog;
use App\product;

class productController extends Controller
{
 public function index($id)
 {
  $listCatalogBig     = catalog::where('idParentCatalog', '=', 0)->get();
  $listCatalog        = catalog::all();
  $getListProductById = product::where('idCatalogProduct', '=', $id)->get();
  $getCatalogById     = catalog::where('idCatalog', '=', $id)->get();
  $cart               = session()->get('carts');


  $data               = [
   'listCatalogBig'  => $listCatalogBig,
   'listCatalog'     => $listCatalog,
   'listProductById' => $getListProductById,
   'catalogById'     => $getCatalogById[0],
   'carts'           => $cart,
  ];
  return view('product/showProduct', $data);
 }

 public function productDetail($id)
 {
  $listCatalogBig = catalog::where('idParentCatalog', '=', 0)->get();
  $listCatalog    = catalog::all();
  $getProductById = product::where('idProduct', '=', $id)->get();
  $listProductNew = product::orderBy('idProduct', 'desc')->paginate(4);
  $cart           = session()->get('carts');
  $data           = [
   'listCatalogBig' => $listCatalogBig,
   'listCatalog'    => $listCatalog,
   'getProductById' => $getProductById[0],
   'listProductNew' => $listProductNew,
   'carts'          => $cart,
  ];
  return view('product/productDetail', $data);
 }
}
