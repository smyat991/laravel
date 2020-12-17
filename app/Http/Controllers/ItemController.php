<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Brand;
use App\Subcategory;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $brands=Brand::all();
       $subcategories=Subcategory::all();
       return view('backend.items.create',compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation
        $request->validate([
            'codeno' => 'required',
            'name' => 'required|min:5',
            'photo' => 'required|mimes:jpeg,jpg,png', 
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'subcategory_id' => 'required'
            
        ]);

       
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        // store data
        $item = new Item;
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo = $path;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand_id;
        $item->subcategory_id = $request->subcategory_id;
        $item->save();

        // redirect
        return redirect()->route('items.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $brands=Brand::all();
        $subcategories=Subcategory::all();
        return view('backend.items.edit',compact('brands','subcategories','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'codeno' => 'required',
            'name' => 'required|min:5',
            'photo' => 'sometimes|mimes:jpeg,jpg,png', 
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'subcategory_id' => 'required'
            
        ]);

       
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('itemimg', $fileName, 'public');

            $path = '/storage/'.$filePath;
            $item->photo = $path;
        }

       
       
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand_id;
        $item->subcategory_id = $request->subcategory_id;
        $item->save();

        // redirect
        return redirect()->route('items.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
       $item->delete();
        // delete old image

        // redirect
        return redirect()->route('items.index');
    }
}
