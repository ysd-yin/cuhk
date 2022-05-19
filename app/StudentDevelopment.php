<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentDevelopment extends BasePageModel
{
    protected $table = 'student_development';

    protected $casts = ['content' => 'array'];
    
    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
