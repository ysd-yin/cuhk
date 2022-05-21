<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutNewsController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_news'] = \App\AboutNewsEvent::online()->arrange()->get();
            $data['news_page'] = \App\NewsPage::withDescription()->online()->firstOrFail();
            $data['seo'] = $this->getSeo($data['news_page']);
            return view('frontend.about_news', $data);
        });
    }

    public function details()
    {
        $query = \App\AboutNewsEvent::online()->arrange();
        if($post_ids = request('id')){
            $query->where('id', $post_ids);
        }
        $data['news'] = $query->get();
        return view('frontend.about_news_details', $data);
    }
}
