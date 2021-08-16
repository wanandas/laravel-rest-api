<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all() ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'rate' => 'required',
            'comment' => 'required',  
            'price' => 'required',
            'categories' => 'required',  
            'name' => 'required',  
            'picture' => 'required',
        ]);
        
        return Post::create([
            'discount' => request('discount'),
            'rate' => request('rate'),
            'comment' => request('comment'),  
            'price' => request('price'),
            'categories' => request('categories'),  
            'name' => request('name'),  
            'picture' => request('picture'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'rate' => 'required',
            'comment' => 'required',  
            'price' => 'required',
            'categories' => 'required',  
            'name' => 'required',  
            'picture' => 'required',
        ]);

        $success = $id->update([
            'discount' => request('discount'),
            'rate' => request('rate'),
            'comment' => request('comment'),  
            'price' => request('price'),
            'categories' => request('categories'),  
            'name' => request('name'),  
            'picture' => request('picture'),
        ]);

        return [
            'success' => $success
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
