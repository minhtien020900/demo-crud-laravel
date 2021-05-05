<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {

        return view('products.list-product')->with(['products' => Product::all(), 'product_row' => null,'categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        return view('products.list-product', ['product_row' => null, 'products' => Product::all(), 'nameModal' => 'addModal','categories'=>Category::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
        ]);
        $fileName = time() . '-' . $request->file('product_image')->getClientOriginalName();
        $product = new Product([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => basename($request->file('product_image')->storeAs('public/images', $fileName))
        ]);

        $product->save();
        return redirect()->route('list-product.index')->with('success', "Add product success");

    }
    public function showModalDelete($id){

    }
//    public function tes1Request ($request)
//    {
//        return $request->all();
//    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //

        $nameModal = 'modalConfirm';
        $products = Product::all();
        $product_row = $products->find($id);
        return view('products.list-product', compact('id','nameModal','products','product_row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.list-product', ['products' => Product::all(), 'product_row' => $product, 'nameModal' => 'addModal']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_name' => 'required',
            'category_name' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required',
//            'product_image' => 'required',
        ]);
        if ($request->file('product_image')->isValid()) {
            $fileName = time() . '-' . $request->file('product_image')->getClientOriginalName();
        }

        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->product_desc = $request->product_desc;
        $product->product_image = basename($request->file('product_image')->storeAs('public/images', $fileName));
        $product->product_price = $request->product_price;
        $product->save();
        return redirect()->route('list-product.index')->with('success', 'Update product successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $product->delete();
        return redirect()->route('list-product.index');
    }


}
