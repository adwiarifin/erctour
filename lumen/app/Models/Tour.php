<?php

# app/Models/Tour.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Tour extends Model {

    public function galleries(){
        return $this->belongsToMany('App\Gallery');
    }

    public static function tags(){
        $tours = Tour::all();
        $tags = array();
        foreach($tours as $tour){
            $tmp = explode(" ", $tour->tag);
            foreach($tmp as $t){
                if(!in_array($t, $tags)){
                    $tags[] = $t;
                }
            }
        }

        return $tags;
    }
}
