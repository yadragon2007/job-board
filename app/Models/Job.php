<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job // extends Model
{
    public static function all(){
      return [
        [
          "title" => "Software Engineer",
          "salary" => "1000$"
        ],
          [
          "title" => "graphic deisgner",
          "salary" => "500$"
        ],
      ];
    }
}
