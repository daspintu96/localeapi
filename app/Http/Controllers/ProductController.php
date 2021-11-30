<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:sanctum')->except('index','show');
    }
   
    public function index()
    {
        // return ProductCollection::collection(Product::all());
       return ProductCollection::collection(Product::paginate(10));
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
      
       $product = new Product();
       $product->name = $request->name;
       $product->detail = $request->description;
       $product->price = $request->price;
       $product->stock = $request->stock;
       $product->discount = $request->discount;
       $product->save();

       return response([
           'data'=> new ProductResource($product)
       ],Response::HTTP_CREATED);
    }

 
    public function show(Product $product)
    {
        // return $product;
        return new ProductResource($product);
    }

   
    public function edit(Product $product)
    {
        //
    }

    
    public function update(Request $request, Product $product)
    {
        $request['detail'] = $request->description;
        unset($request['description']);
        return $product->update($request->all());
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
