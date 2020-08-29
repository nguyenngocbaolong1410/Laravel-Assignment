<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\catalog;
class AdminCatalogController extends Controller
{
////////////////////////////////////////////////////////////////////////////////////////////////////////
// CATALOG MODEL
////////////////////////////////////////////////////////////////////////////////////////////////////////
    private function indexCatalogprivate(){
        $ListCatalog = catalog::all();
        $ListCatalog = catalog::paginate(5);
        $data = ['ListCatalog'  => $ListCatalog,];
        return view('admin/catalog/List_catalog', $data);
    }
    public function indexCatalog()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->indexCatalogprivate();
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
    private function createCatalogprivate()
    {   
        $ListCatalog = catalog::all();
        $ListCatalog = catalog::paginate(5);
        $data = ['ListCatalog'  => $ListCatalog,];
        return view('/admin/catalog/add_catalog', $data);
    }
    public function createCatalog()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->createCatalogprivate();
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
    function storeCatalog(Request $request)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $request->validate([
                    'idParentCatalog'=>['required'],
                    'nameCatalog'=>['required'],
                ]);
                //get data form
                $data=array(
                    'idParentCatalog'=>$request->idParentCatalog,
                    'nameCatalog'=>$request->nameCatalog,
                );
                //them vao database
                catalog::create($data);
                session()->flash('success', 'Thêm danh mục thành công');
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
    function editCatalog($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $ListCatalog = catalog::all();
                $ListCatalog = catalog::paginate(5);
                $data = ['ListCatalog'  => $ListCatalog,];
                $catalog=catalog::find($id);
                return view('admin/catalog/edit_catalog',['EditCatalog'=>$catalog], $data);
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
    function updateCatalog(Request $request,$id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $data=array(
                    'idParentCatalog'=>$request->idParentCatalog,
                    'nameCatalog'=>$request->nameCatalog,
                );
        
                $catalog=catalog::where('idCatalog','=',$id)->update($data);
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
    function deleteCatalog($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $catalog=catalog::find($id);
                $catalog->delete();
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
