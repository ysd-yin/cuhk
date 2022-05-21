<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutLearningController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_learning'] = \App\AboutLearning::withDescription()->firstOrFail();
            $data['about_learning']->initRepeater();
            $data['seo'] = $this->getSeo($data['about_learning']);
            return view('frontend.about_learning', $data);
        });
    }
}
