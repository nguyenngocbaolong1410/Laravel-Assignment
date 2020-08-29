<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\product;
class AdminController extends Controller
{
    private function adminIndex(){return view('admin/layouts/layout_admin');}
    public function index()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->adminIndex();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
// PRODUCT MODEL
////////////////////////////////////////////////////////////////////////////////////////////////////////
    private function indexProductprivate(){
        $ListProduct = product::all();
        $ListProduct = product::paginate(5);
        $data = ['ListProduct'  => $ListProduct,];
        return view('admin/product/List_product', $data);
    }
    public function indexProduct()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->indexProductprivate();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    private function createprivate()
    {   
        $ListProduct = product::all();
        $ListProduct = product::paginate(5);
        $data = ['ListProduct'  => $ListProduct,];
        if (session('ImagesUpload')) {
            return view('/admin/product/add_product', $data);
        } else {
            return redirect('/admin/dashboard/ImagesNoneAdd')->with('thieuhinh','Chưa Upload hình ảnh, UPload hình trước rồi hãy thêm sản phẩm');
        }
    }
    public function create()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->createprivate();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    private function xuLyUploadprivate() {
        $rules = [ 'image' => 'image|max:1024' ]; 
        $posts = [ 'image' => request()->file('image') ];
        
        // Validator để kiểm tra
        $valid = Validator::make($posts, $rules);
        
        // Kiểm tra nếu có lỗi
        if ($valid->fails()) {
            // Có lỗi, redirect trở lại
            return redirect()->back()->withErrors($valid)->withInput();
        }
        else {
            // Ko có lỗi, kiểm tra nếu file đã dc upload
            if (request()->file('image')->isValid()) {
                // Filename cực shock để khỏi bị trùng
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
                
                // Thành công, show thành công
                session()->put('ImagesUpload', $imageName);
                return redirect('/admin/dashboard/create')->with('imglink', session('ImagesUpload'));
            }
            else {
                // Lỗi file
                return redirect()->back()->with('error', 'Upload files thất bại!');
            }
        }
    }
    public function xuLyUpload()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->xuLyUploadprivate();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
    public function forgetImagesUpload()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                session()->forget('ImagesUpload');
                return redirect('/admin/dashboard/ImagesNoneAdd');
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    function store(Request $request)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $request->validate([
                    'idCatalogProduct'=>['required'],
                    'nameProduct'=>['required'],
                    'priceProduct'=>['required'],
                    'noidungProduct'=>['required'],
                    'infoProduct'=>['required'],
                    'imgProduct' => ['required'],
                ]);
                //get data form
                $data=array(
                    'idCatalogProduct'=>$request->idCatalogProduct,
                    'nameProduct'=>$request->nameProduct,
                    'imgProduct'=>$request->imgProduct,
                    'priceProduct'=>$request->priceProduct,
                    'noidungProduct'=>$request->noidungProduct,
                    'infoProduct'=>$request->infoProduct,
                );
                //them vao database
                product::create($data);
                session()->flash('success', 'Thêm sản phẩm thành công');
                session()->forget('ImagesUpload');
                return back();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    function edit($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $ListProduct = product::all();
                $ListProduct = product::paginate(5);
                $data = ['ListProduct'  => $ListProduct,];
                $product=product::find($id);
                return view('admin/product/edit_product',['Editproduct'=>$product], $data);
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    function update(Request $request,$id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $data=array(
                    'idCatalogProduct'=>$request->idCatalogProduct,
                    'nameProduct'=>$request->nameProduct,
                    'imgProduct'=>$request->imgProduct,
                    'priceProduct'=>$request->priceProduct,
                    'noidungProduct'=>$request->noidungProduct,
                    'infoProduct'=>$request->infoProduct,
                );
        
                $product=product::where('idProduct','=',$id)->update($data);
                session()->flash('success', 'Sửa sản phẩm thành công');
                return redirect()->back();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////
    function delete($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $product=product::find($id);
                $product->delete();
                session()->flash('success', 'Xóa sản phẩm thành công');
                return redirect()->back();
            }
            else
            {
                Auth::logout();
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}
