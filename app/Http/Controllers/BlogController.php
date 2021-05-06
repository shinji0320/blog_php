<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     *
     * @return view
     */
    public function showList()
    {
        return view('blog.list');
    }
}