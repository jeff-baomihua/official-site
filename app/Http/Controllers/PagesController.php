<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        $carousels = Image::where('type', Image::CAROUSEL_INDEX)->orderBy('sort', 'asc')->get();
        $games = Product::orderBy('sort', 'asc')->get();
        $articles = Article::with('articleType')->orderBy('created_at', 'desc')->paginate(10);
        return view('pages.index', compact('carousels','games', 'articles', 'page'));
    }

    public function contractUs()
    {
        return view('pages.contract-us');
    }

    public function rechargeChannels()
    {
        return view('pages.recharge-channels');
    }
}
