<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['home_page'] = \App\HomePage::withDescription()->first();
            $data['home_banner'] = \App\HomeBanner::withDescription()->online()->arrange()->get();
            $data['home_data'] = \App\HomePage::withDescription()->online()->firstOrFail();
            $data['home_data']->initRepeater();
            $data['seo'] = $this->getSeo($data['home_page']);
            return view('frontend.index', $data);
        });
    }
}
