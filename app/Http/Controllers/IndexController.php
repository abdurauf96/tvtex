<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

    	$products=\App\Product::withTranslation(\App::getLocale())->get();
    	$progress=\App\Progress::withTranslation(\App::getLocale())->get();
    	$advantages=\App\Advantage::withTranslation(\App::getLocale())->get();
    	$partners=\App\Partner::all();
    	$thoughts=\App\Thought::withTranslation(\App::getLocale())->get();
    	$page=\App\Page::withTranslation(\App::getLocale())->first();

    	return view('index', compact('products', 'progress', 'advantages', 'partners', 'thoughts', 'page'));
    }
}
