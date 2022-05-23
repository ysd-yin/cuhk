<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDevelopmentController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['student_development'] = \App\StudentDevelopment::firstOrFail();
            $data['student_development']->initRepeater();
            $data['seo'] = $this->getSeo($data['student_development']);
            return view('frontend.student_development', $data);
        });
    }
}
