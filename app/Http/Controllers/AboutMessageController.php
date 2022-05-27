<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMessageController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_message'] = \App\AboutMessage::first();
            $data['seo'] = $this->getSeo($data['about_message']);
            return view('frontend.about_message', $data);
        });
    }
}
