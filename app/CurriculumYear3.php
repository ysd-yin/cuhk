<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CurriculumYear3 extends BaseModel
{
    protected $table = 'curriculum_year_3';

    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
