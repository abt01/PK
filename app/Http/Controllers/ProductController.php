<?php

namespace App\Http\Controllers;
use App\Helpers\FileHelper;

use App\Http\Resources\ProductCollection;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new Product($request->all());

        $file = $request->file('picture');
        if ($file) {
            $filename = $product->name . '.' . 'jpg';
            $picname = FileHelper::saveFile($file, 'Image', $filename);
            $product->picture = strtolower(trim($product->name));
        }

        $product->save();
        $products = Product::all();
        return view('admin/products', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = new ProductCollection($product);
        return view('admin/editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if (Input::get('submit') == 'update') {
            try {
                $this->validate($request, [
                    'picture' => ' mimes:jpeg,jpg,png | max:1000'
                ]);
            } catch (ValidationException $e) {
            }

            $file = $request->file('picture');
            if ($file) {
                $filename = $product->name . '.' . 'jpg';
                $picname = FileHelper::saveFile($file, 'Image', $filename);
                $product->picture = strtolower(trim($product->name));
            }

            if ($request->name != null) {
                $product->name = strtolower(trim($request->name));
            }
            if ($request->description != null) {
                $product->description = strtolower(trim($request->description));
            }
            if ($request->availability != null) {
                $product->availability = strtolower(trim($request->availability));
            }
            if ($request->price != null) {
                $product->price = strtolower(trim($request->price));
            }
            if ($request->category != null) {
                $product->category = strtolower(trim($request->category));
            } if ($request->size != null) {
                $product->size = strtolower(trim($request->size));
            }if ($request->quantity != null) {
                $product->quantity = strtolower(trim($request->quantity));
            }
            $product->update();
            $products = Product::all();
            return view('admin/products', compact('products'));
        } else if (Input::get('submit') == 'delete') {
            try {
                $product->delete();
                $products = Product::all();
                return view('admin/products', compact('products'));
            } catch (\Exception $e) {
                return response([
                    'message' => 'Product could not delete at this moment.Something wrong happened'
                ], Response::HTTP_EXPECTATION_FAILED);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
