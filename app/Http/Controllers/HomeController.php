<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\catalog;
use App\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
        public function __construct()
        {
            $this->middleware('auth');
        }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $listCatalogBig   = catalog::where('idParentCatalog', '=', 0)->get();
    $listCatalog      = catalog::all();
    $listProductByBuy = product::orderBy('buyedProduct', 'desc')->paginate(8);
    $listProductNew   = product::orderBy('idProduct', 'desc')->paginate(4);
    $cart             = session()->get('carts');
    $data             = ['listCatalogBig' => $listCatalogBig, 'listCatalog' => $listCatalog, 'listProductByBuy' => $listProductByBuy, 'listProductNew' => $listProductNew, 'carts' => $cart];
    return view('home', $data);
    }
}
