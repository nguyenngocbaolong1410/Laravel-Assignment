<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
class AdminUserController extends Controller
{
    private function indexUserprivate(){
        $ListUser = User::all();
        $ListUser = User::paginate(5);
        $data = ['ListUser'  => $ListUser,];
        return view('admin/user/List_user', $data);
    }
    public function indexUser()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->indexUserprivate();
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

    function deleteuser($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $User=User::find($id);
                $User->delete();
                session()->flash('success', 'Xóa người dùng thành công');
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
