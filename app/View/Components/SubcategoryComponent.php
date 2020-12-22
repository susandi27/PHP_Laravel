<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Category;
use App\Subcategory;


class SubcategoryComponent extends Component
{
    public $categories;
    public $subcategories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categories= Category::all();
        $this->subcategories= Subcategory::all();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.subcategory-component');
    }
}
