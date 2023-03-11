<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    public static function img (){
        $data =[
        "assets/img/portfolio/thumbnails/1.jpg",
        "assets/img/portfolio/thumbnails/2.jpg",
        "assets/img/portfolio/thumbnails/3.jpg",
        "assets/img/portfolio/thumbnails/4.jpg",
        "assets/img/portfolio/thumbnails/5.jpg",
        "assets/img/portfolio/thumbnails/6.jpg"
         ];

         return $data;
        
    }
}
