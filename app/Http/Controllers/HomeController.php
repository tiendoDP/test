<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $data['products'] = Product::listProducts();
         //dd($data['products']);
        return View('home', $data);
    }

    public function createProduct() {  
        return View('admin/product/create');
    }

    public function handleCreateProduct(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|decimal:0,2',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ], [
            'required' => 'The :attribute field is required',
        ]);

        //dd('hi');

        $fileName = time().'.'.$request->image->getCLientOriginalExtension();
        $request->image->move(public_path('assets/images'), $fileName);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $fileName;
        $product->save();
        return redirect()->route('home')->with('messages', "Product Successfully Created");
    }

    public function updateProduct($id) {
        $data['product'] = Product::find($id);
        //dd($data['product']);
        return View('admin/product/update', $data);
    }

    public function handleUpdateProduct(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|decimal:0,2',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ], [
            'required' => 'The :attribute field is required',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        if($request->image == null) {
            $product->image = $request->imageOld;
        }
        else {
            $fileName = time().'.'.$request->image->getCLientOriginalExtension();
            $request->image->move(public_path('assets/images'), $fileName);
            $product->image = $fileName;
        }
        $product->save();
        return redirect()->route('home')->with('messages', "Product Successfully Updated");
    }

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('home')->with('messages', "Product Successfully Deleted");
    }
}
