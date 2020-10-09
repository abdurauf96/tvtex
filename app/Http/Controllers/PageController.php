<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Message;

class PageController extends Controller
{
    public function about($slug)
    {   
        $page=\App\Page::withTranslation(\App::getLocale())->where('slug', $slug)->first();
        $images=\App\Image::all();

    	return view('about', compact('page', 'images'));
    }

    public function view(Request $request)
    {
    	$product=\App\Product::where('id', $request->id)->withTranslation(\App::getLocale())->first();
    	
    	return view('view', compact('product'));
    }

    public function connect(Request $request)
    {
        $message=new Message();
        $message->number=$request->number;
        $message->name=$request->name;
        $message->save();
        session()->flash('msg', 'Принято!');
        $data=array(
            'name'=>$request->name,
            'phone'=>$request->number,
        );
        
        \Mail::to('saydaliyevabdurauf@mail.ru')->send(new \App\Mail\Message($data));
        
        return back();
    }

    public function faq(Request $request)
    {
        
        $categories=\App\Category::withTranslation(\App::getLocale())
        ->get();
        $faqs=\App\Faq::withTranslation(\App::getLocale())->get();
        return view('faq', compact('faqs', 'categories'));
    }

    public function vacancy()
    {

        $vacancies=\App\Vacancy::withTranslation(\App::getLocale())->get();
        $vac=\App\Vacancy::withTranslation(\App::getLocale())->first();
        $infos=$vac->vacancyinfos;
        return view('vacancy', compact('vacancies', 'infos'));
    }

    public function sortFaq()
    {
        $id=$_POST['id'];
        $faqs=\App\Faq::where('category_id', $id)->withTranslation(\App::getLocale())->get();
        $res=view('ajax.sortFaq', compact('faqs'));
        return $res;
    }
    public function sortVac()
    {
        $id=$_POST['vac_id'];
        $infos=\App\VacancyInfo::where('vacancy_id', $id)->withTranslation(\App::getLocale())->get();

        $vacancy=\App\Vacancy::withTranslation(\App::getLocale())->find($id);
   
        $res=view('ajax.sortVakancy', compact('infos', 'vacancy'));
        return $res;
    }

    public function resume(Request $request)
    {

        $zayafka=new \App\MessageVacancy();
        if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $name = str_slug('resume_'.$request->name).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('storage/'), $name);
        $zayafka->resume = $name;
        }

        $zayafka->name=$request->name;
        $zayafka->phone=$request->phone;
        $zayafka->email=$request->email;
        $zayafka->decription=$request->about;
        $zayafka->vacancy_name=$request->vacancy;
        $zayafka->save();

        $data=array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'description'=>$request->about,
            'vacancy_name'=>$request->vacancy,
            'document' => $name,
        );

       
        \Mail::to('saydaliyevabdurauf@mail.ru')->send(new \App\Mail\Vacancy($data));
        session()->flash('msg', 'Принято!');
         return back();
    }

    public function excurse()
    {
        $infos=\App\Info::withTranslation(\App::getLocale())->get();
        return view('excurs', compact('infos'));
    }

    public function excurse_view(Request $request)
    {
        $info=\App\Info::withTranslation(\App::getLocale())->find($request->id);
        return view('excurse_view', compact('info'));
    }
}
