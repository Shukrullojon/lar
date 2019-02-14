<?php

namespace App\Http\Controllers;

use App\Product_model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product_model::all();
        return view('products.index',['products'=>$product]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
        ]);
        Product_model::create($request->all());
        return redirect()->route('products.index')->with('success','Product add');
    }
    public function show($id)
    {
        $product=Product_model::find($id);
        return view('products.show',['product'=>$product]);
    }
    public function edit($id)
    {
        $product=Product_model::find($id);
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
        ]);
        Product_model::findOrFail($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Product success update');
    }
    public function destroy($id)
    {
        Product_model::find($id)->delete();
        return redirect()->route('products.index')->with('success','Product success delete');
    }
}
