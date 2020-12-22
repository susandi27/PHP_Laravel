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
}