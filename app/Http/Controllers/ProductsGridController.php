<?php

namespace App\Http\Controllers;

class ProductsGridController extends Controller
{
    public function index()
    {
        return view('admin.products-grid');
    }
}
