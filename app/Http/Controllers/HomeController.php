<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Image::orderBy('id', 'desc')->paginate(5);
        return view('home', [
            'images' => $images
        ]);

    }
}