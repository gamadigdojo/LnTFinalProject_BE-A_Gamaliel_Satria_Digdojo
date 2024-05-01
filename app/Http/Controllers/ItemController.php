<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Orderlist;

class ItemController extends Controller
{
    public function index(){
        $items=Item::all();
        $orderlists=Orderlist::all();
        return view('admin.item.item', compact('items'),compact('orderlists'));
    }

    public function create(){
        $categories=Category::all();
        return view('admin.item.create',compact('categories'));
    }

    public function store(Request $req){
        $file_upload=$req->url_cover_buku;
        $url=$file_upload->store('public/download');
     
        
        //$url=$file_upload->store($file_upload->getClientOriginalName());
        //dd($url);
        $category=Category::findOrFail($req->category_id);

        $category->items()->create([
            'nama'=>$req->nama,
            'harga'=>$req->harga,
            'jumlah'=>$req->jumlah,
            'url_cover_buku'=>$url
        ]);

        return redirect('/');
    }

    public function show($id){
        $item= Item::find($id);
        return view('admin.item.show', compact('item'));
    }

    public function edit($id){
        $item= Item::find($id);
        $categories=Category::all();
        
        return view('admin.item.edit', compact('item'), compact('categories'));
    }

    public function update(Request $req, $id)
    {
        $item= Category::findOrFail(Item::find($id)->category_id)
            ->items()->where('id',$id)->first();

        $item->nama=$req->nama;
        $item->harga=$req->harga;
        $item->jumlah=$req->jumlah;
        $item->url_cover_buku=$req->url_cover_buku;

        $item->update();
        
     
        return redirect('item');
        //ini kategori nya belom keubah ya.
    }

    
    public function destroy($id)
    {
        Item::destroy($id);
        // $msg = "User Deleted successful! ";
        //return redirect('user')->with('msg', $msg);
        return redirect('item');
    }

    public function order($id){
        $orderlist=Orderlist::find($id);
        return view('admin.item.orderdetail',compact('orderlist'));
    }

    public function orderDestroy($id){
        Orderlist::destroy($id);

        return redirect('/');
    }
}
