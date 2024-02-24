<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function show_product()
    {
        $data = Product::all();
        return view('product', compact('data'));
    }
    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update_product($id)
    {
        $data = Product::find($id);

        return view('product_update', compact('data'));
    }
    public function add_product(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6|email|unique:products',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg|max:2048'
        ], [
            'title.required' => 'title is required',
            'title.description' => 'description is required',
            'title.image' => 'image is required'
        ]);
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            # code...
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/show_product');
    }
    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            # code...
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $data->image = $imagename;
        }
        $data->save();

        return redirect('/show_product');
    }
}
