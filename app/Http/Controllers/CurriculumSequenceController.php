<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumSequenceController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['curriculum_sequence'] = \App\CurriculumSequence::first();
            $data['curriculum_structure'] = \App\CurriculumStructure::first();
            $data['curriculum_sequence_year_1'] = \App\CurriculumCourseYear1::firstOrFail();
            $data['curriculum_sequence_year_1']->initRepeater();
            $data['curriculum_sequence_year_2'] = \App\CurriculumCourseYear2::firstOrFail();
            $data['curriculum_sequence_year_2']->initRepeater();
            $data['curriculum_sequence_year_3'] = \App\CurriculumCourseYear3::firstOrFail();
            $data['curriculum_sequence_year_3']->initRepeater();
            $data['curriculum_sequence_year_4'] = \App\CurriculumCourseYear4::firstOrFail();
            $data['curriculum_sequence_year_4']->initRepeater();
            $data['curriculum_sequence_year_5'] = \App\CurriculumCourseYear5::firstOrFail();
            $data['curriculum_sequence_year_5']->initRepeater();
            $data['seo'] = $this->getSeo($data['curriculum_sequence']);
            return view('frontend.curriculum_sequence', $data);
        });
    }
}
