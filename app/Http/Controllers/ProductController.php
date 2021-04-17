<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('products.list-product')->with(['products'=> Product::all(),'nameModal'=>'','product_row'=>null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
//        $product = new Product();
//        $product->product_name="";
//        $product->category_name="";
//        $product->product_desc="";
//        $product->product_price="";

//        return view('modal.modal-add',['product'=>$product]);
        return view('products.list-product',['product_row'=>null,'products'=>Product::all(),'nameModal'=>'addModal']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->product_desc = $request->product_desc;
        $product->product_image = $request->product_image;
        $product->product_price = $request->product_price;
        $product->save();
        return redirect()->route('list-product.index');

    }

    public function test(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);

        return view('products.list-product',['products'=>Product::all(),'product_row'=>$product,'nameModal'=>'addModal']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->product_desc = $request->product_desc;
        $product->product_image = $request->product_image;
        $product->product_price = $request->product_price;
        $product->save();
             return  redirect()->route('list-product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
