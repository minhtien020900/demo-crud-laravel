<?php

namespace App\Http\Controllers;

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

        return view('products.list-product')->with(['products' => Product::all(), 'product_row' => null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        return view('products.list-product', ['product_row' => null, 'products' => Product::all(),'nameModal'=>'addModal']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        Product::create($request->all());
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
     * @return Response
     */
    public function show($id)
    {
        //
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
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->category_name = $request->category_name;
        $product->product_desc = $request->product_desc;
        $product->product_image = $request->product_image;
        $product->product_price = $request->product_price;
        $product->save();
        return redirect()->route('list-product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('list-product.index');
    }
}
