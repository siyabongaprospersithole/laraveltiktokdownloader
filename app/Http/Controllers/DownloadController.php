<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadwatermarkedvideo($id = null){
        if(!$id)
        return abort(404);

        $tiktok = \App\Models\TiktokVideo::FindOrFail(\AppHelper::decrypt($id));


        $id = $tiktok->data->ItemList->video->list[0];
        $video = $tiktok->data->ItemModule->$id->video->downloadAddr;



        return redirect($video);
    }


    public function downloadsound($id = null){
        if(!$id)
        return abort(404);

        $tiktok = \App\Models\TiktokVideo::FindOrFail(\AppHelper::decrypt($id));


        $id = $tiktok->data->ItemList->video->list[0];
        $music = $tiktok->data->ItemModule->$id->music->playUrl;



        return redirect($music);
    }
}
