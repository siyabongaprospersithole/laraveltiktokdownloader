<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class URLDownloader extends Controller
{
   
    public function handle(Request $request)
    {

        $this->validate($request, [
             'link' => 'required|url'
        ]);

       
     //get video from curl function
    $data = $this->downloadVideo($request->link);

 
    // Load HTML to DOM Object
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);

    @$dom->loadHTML($data);
    libxml_clear_errors();


     $JsonDecode = json_decode(Str::between($dom->saveHTML($dom->getElementsByTagName('body')->item(0)), "window['SIGI_STATE']=", ";window['SIGI_RETRY']="), true);

     $xpath = new \DOMXPath($dom);
     $script_tags = $xpath->query("//*[@id='SIGI_STATE']")->item(0)->nodeValue;
     $script_tags = json_decode($script_tags);

     $id = $script_tags->ItemList->video->list[0];
     $video = $script_tags->ItemModule->$id->video;
     $downloadurl  =  $video->downloadAddr;


     $store_db = $this->storeresponse($script_tags);


       $tiktok = array(
        'link' => $store_db->link,
        'image' => $script_tags->ItemModule->$id->video->cover,
        'user' => $script_tags->ItemModule->$id->nickname,
        'description' => $script_tags->ItemModule->$id->desc,
       );
       


    return response()->json(['tiktok' => $tiktok]);
     //  return response()->json(['html' => $data]);
       // return dd($data);
    }

    public function storeresponse($json_data){
      $tok =  \App\Models\TiktokVideo::Create([
            'browser_info' => serialize(\AppHelper::getBrowser()),
            'tiktok_data' => serialize( $json_data),
        ]);

        return  $tok;

    }

    public function downloadVideo($link)
    {
        
        $url = $link;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, \AppHelper::browseragent());
        curl_setopt($ch, CURLOPT_REFERER, ' www.tiktok.com');
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($ch);
        curl_close($ch);


        return $data;

    }
}
