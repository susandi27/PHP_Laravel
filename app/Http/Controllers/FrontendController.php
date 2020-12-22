<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Item;


class FrontendController extends Controller
{
    public function index($value = '')
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();
        
        $flash_items=Item::orderBy('created_at', 'desc')->get(); 
        $fresh_items=Item::orderBy('subcategory_id', 'desc')->get();   

        return view('frontend.index', compact('categories', 'subcategories', 'brands', 'items','flash_items','fresh_items'));
    }
    public function itemdetail($id)
    {
       $items = Item::find($id);
       return view('frontend.itemdetail', compact('items'));
    }

    //filter category
    public function filtercategory($id)
    {   
        
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        $category = Category::find($id);
        return view('frontend.filtercategory',compact('categories','subcategories','brands','items','category'));

    }

    //filter brand

    public function filterbrand($id)
    {   
        
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        $brand = Brand::find($id);
        return view('frontend.filterbrand',compact('categories','subcategories','items','brands','brand'));

    }

    //shoppingcart
    public function shoppingcart($value = '')
    {   
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        
        
        return view('frontend.shoppingcart', compact('categories', 'subcategories', 'brands', 'items'));

    }
}
