<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('admin.category.category', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $req){

        Category::create([
            'name'=>$req->name
        ]);

        return redirect('category');
    }

    public function show($id){
        $category= Category::find($id);
        return view('admin.category.show', compact('category'));
    }

    public function edit($id){
        $category=Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $req, $id)
    {
        $category= Category::findOrFail($id);
        
        $category->name=$req->name;
        $category->update();
     
        return redirect('category');
     }

     

}
