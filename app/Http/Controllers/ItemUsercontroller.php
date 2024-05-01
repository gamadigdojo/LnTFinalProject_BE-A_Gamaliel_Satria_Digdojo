<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\ItemUser;
use App\Models\Orderlist;


class ItemUsercontroller extends Controller
{
    public function index(){
        $items=Auth::user()->items;
        return view('order',compact('items'));
    }
    public function store(Request $req){
        // ItemUser::create([
        //     'user_id'=>Auth::user()->id,
        //     'item_id'=>$req->item_id
        // ]);
        $user=Auth::user();
        $item=$user->items()->find($req->item_id);
        
        if($item == null){
            $user->items()->attach($req->item_id);
        }
         return redirect('/order');
     }

     public function checkout(){
        $user=Auth::user()->name;
        $items=Auth::user()->items;
        return view('checkout',compact('user'), compact('items'));
     }

     public function delete(Request $req){
//         $lastRole = $user->roles()
//     ->orderBy( $user->roles()->getTable() .'id', 'desc')
//     ->first();
// $user->roles()->detach($lastRole);

        
        $user=Auth::user();

        // $user=Auth::user();
        // $item=$user->items()->find($req->item_id)->first();
        // $user->items()->detach($item);

         $user->items()->detach($req->item_id);
         //   $user->items()->where('id', $req->item_id)->detach();
          
        return redirect('/order');
     }

     public function final(Request $req){
        Orderlist::create([
            'user'=>$req->user,
            'invoice'=>$req->invoice,
            'total_price'=>$req->total_price,
            'alamat'=>$req->alamat,
            'kodepos'=>$req->kodepos,
            'order_lists'=>$req->items
        ]);
        $user=Auth::user();
        $user->items()->detach();

        return redirect('/');
     }
}
