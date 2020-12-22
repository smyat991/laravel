<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Brand;
use App\Item;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index($value='')
  {
  	$categories=Category::all();
  	$subcategories=Subcategory::all();
  	$brands=Brand::all();
  	$items=Item::all();
  	$flash_items=Item::orderBy('created_at','desc')->get();
    return view('frontend.index',compact('categories','subcategories','brands','items','flash_items'));
  }

   public function itemdetail($value='')
  {
  	$categories=Category::all();
  	$subcategories=Subcategory::all();
  	$brands=Brand::all();
  	$items=Item::all();
    return view('frontend.item_detail',compact('categories','subcategories','brands','items'));
  }
 
}
