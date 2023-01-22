<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiktokVideo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['link','data'];

    public function getLinkAttribute(){
        return \AppHelper::encrypt($this->id);
    }


    public function getDataAttribute(){
        return unserialize($this->tiktok_data);
    }
}
