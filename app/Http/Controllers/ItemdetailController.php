<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Item;


use Illuminate\Http\Request;

class ItemdetailController extends Controller
{
    public function itemdetail($value='')
    {
    	$categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $items = Item::all();                
        return view('frontend.itemdetail', compact('categories', 'subcategories', 'brands', 'items'));
    }
}
