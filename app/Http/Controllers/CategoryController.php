<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function getCategories ()
    {
        return new ProductResource(category::all());
    }

}
