<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentAchievementController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['student_achievement'] = \App\StudentAchievement::firstOrFail();
            $data['student_achievement_post'] = \App\StudentAchievementPost::online()->arrange()->get();
            foreach($data['student_achievement_post'] as $collection){
                $collection->initRepeater();
            }
            // $data['student_achievement_post'] = \App\StudentAchievementPost::firstOrFail();
            // $data['student_achievement_post']->initRepeater();
            $data['seo'] = $this->getSeo($data['student_achievement']);
            return view('frontend.student_achievement', $data);
        });
    }
}
