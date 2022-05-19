<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admissions extends BasePageModel
{
    protected $table = 'admissions';

    protected $casts = ['jupas_details' => 'array','jupas_timeline' => 'array'];

    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
