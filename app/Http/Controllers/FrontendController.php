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


   public function itemdetail($id)
    {

        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $items = Item::all();
        
        $item_detail = Item::find($id);
        return view('frontend.itemdetail',compact('categories','subcategories','brands','items','item_detail'));
        
    }



  public function categoryfilter($id)
  {
    
       $categories = Category::all();
       $subcategories = Subcategory::all();
       $brands = Brand::all();
       $items = Item::all();
       $category = Category::find($id);
      
        return view('frontend.categoryfilter',compact('categories','subcategories','brands','items','category'));

  }


  public function brandfilter($id)
  {
    
       $categories = Category::all();
       $subcategories = Subcategory::all();
       $brands = Brand::all();
       $items = Item::all();
       $brand = Brand::find($id);
      
        return view('frontend.brandfilter',compact('categories','subcategories','brands','items','brand'));
       
  }




  public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

}
