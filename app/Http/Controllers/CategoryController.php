<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::with('subcategories')->whereNull('parent_id')->get();

        return $categories;

    }

}
