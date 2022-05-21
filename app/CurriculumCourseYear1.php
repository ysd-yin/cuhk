<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CurriculumCourseYear1 extends BasePageModel
{
    protected $table = 'curriculum_course_year_1';

    protected $casts = ['team_1' => 'array','team_2' => 'array','team_3' => 'array'];

    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
