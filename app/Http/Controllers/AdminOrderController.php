<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\order;
class AdminOrderController extends Controller
{
    private function indexOrderprivate(){
        $Listorder = order::all();
        $Listorder = order::paginate(5);
        $data = ['ListOrder'  => $Listorder,];
        return view('admin/order/list_order', $data);
    }
    public function indexOrder()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                return $this->indexOrderprivate();
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

    function deleteOrder($id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if ($user->role == 1 && $user->status == 1 )
            {
                $order=order::find($id);
                $order->delete();
                session()->flash('success', 'Xóa đơn hàng thành công');
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
