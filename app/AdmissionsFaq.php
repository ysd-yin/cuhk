<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdmissionsFaq extends BasePageModel
{
    protected $table = 'admissions_faq';

    protected $casts = ['admissions' => 'array','prospects_recognitions' => 'array'];

    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
