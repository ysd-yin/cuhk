<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutMessage extends BasePageModel
{
    protected $table = 'about_message';
    
    // protected $casts = ['left_post' => 'array','right_post' => 'array'];

    public function getListingUrl($params = []){
        return false;
    }

    public function getDetailUrl($params = []){
        return false;
    }

}
