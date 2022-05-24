<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentVoicesController extends BaseFrontendController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        return parent::output(function($data){
            $data['student_voices'] = \App\StudentHighlight::online()->arrange()->get();
            $data['student_voices_page'] = \App\StudentVoicesPages::firstOrFail();
            $query = \App\StudentHighlight::online()->arrange();
            $query->where('show_highlight', '1');
            $data['student_highlight'] = $query->get();
            $data['seo'] = $this->getSeo($data['student_voices_page']);
            return view('frontend.student_voices', $data);
        });
    }

    public function details()
    {
        return parent::output(function($data){
            $query = \App\StudentHighlight::online()->arrange();
            if($post_ids = request('id')){
                $query->where('id', $post_ids);
            }
            $data['student_voices_details'] = $query->get();
            $data['student_voices'] = \App\StudentHighlight::online()->arrange()->limit(4)->get()->shuffle();
            return view('frontend.student_voices_details', $data);
        });
    }
}
