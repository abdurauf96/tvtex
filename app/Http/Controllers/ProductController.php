<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_view(Request $request)
    {
    	$product=\App\Towel::withTranslation(\App::getLocale())->find($request->id);
        $colors=\App\Color::all();
    	return view('product_view', compact('product', 'colors'));
    }

    public function sort_product(Request $request)
    {
    	$tkan_id=$request->tkan;
    	$type_id=$request->type;
        $size_id=$request->size;
        $plot_id=$request->plot;

    	$tovels=\App\Towel::withTranslation(\App::getLocale())
    	->when(!is_null($tkan_id), function($query) use ($tkan_id){
            return $query->where('tkan_id', $tkan_id);
        })
        ->when(!is_null($type_id), function($query) use ($type_id){
            return $query->where('type_id', $type_id);
        })
        ->when(!is_null($size_id), function($query) use ($size_id){
            return $query->where('size_id', $size_id);
        })
        ->when(!is_null($plot_id), function($query) use ($plot_id){
            return $query->where('plotnost_id', $plot_id);
        })
    	->get();

        $res=view('ajax.sortTowel', compact('tovels'));

    	return $res;
    }

    public function more_product()
    {
        $tovels=\App\Towel::withTranslation(\App::getLocale())->get();
        $res=view('ajax.sortTowel', compact('tovels'));
        return $res;
    }

    public function getImage(Request $request)
    {
        $image=\App\Color::find($request->id);
        $res=view('ajax.getImage', compact('image'));
        return $res;
    }
}
