<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\catalog;
use App\product;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        $listProductByBuy   = product::orderBy('buyedProduct', 'desc')->paginate(8);
        $listProductNew     = product::orderBy('idProduct', 'desc')->paginate(4);
        $listCatalogBig = catalog::where('idParentCatalog', '=', 0) -> get();
        $listCatalog = catalog::all();
        $data = ['listCatalogBig' => $listCatalogBig, 'listCatalog' => $listCatalog, 'listProductByBuy' => $listProductByBuy, 'listProductNew' => $listProductNew];

        if(Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            return view('/home',['user'=>Auth::user()],$data);
        }
        else
        {
            return view('auth/login',['error' => 'Đăng nhập thất bại'],$data);
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    function registered(){
        $listCatalogBig = catalog::where('idParentCatalog', '=', 0) -> get();
        $listCatalog = catalog::all();
        $data = ['listCatalogBig' => $listCatalogBig, 'listCatalog' => $listCatalog];
        return view('auth/register', $data);
    }
}
