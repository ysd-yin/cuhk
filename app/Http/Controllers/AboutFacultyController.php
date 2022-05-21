<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutFacultyController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['about_faculty'] = \App\AboutFaculty::withDescription()->firstOrFail();
            $data['seo'] = $this->getSeo($data['about_faculty']);
            return view('frontend.about_faculty', $data);
        });
    }
}
