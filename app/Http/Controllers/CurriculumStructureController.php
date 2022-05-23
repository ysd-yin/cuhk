<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumStructureController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['curriculum_structure'] = \App\CurriculumStructure::first();
            $data['home_data'] = \App\HomePage::withDescription()->online()->firstOrFail();
            $data['seo'] = $this->getSeo($data['curriculum_structure']);
            return view('frontend.curriculum_structure', $data);
        });
    }
}
