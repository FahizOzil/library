<?php

class validation{

    static function require($string , $min , $max = INF){
     trim($string);
     return strlen($string) > $min && strlen($string) < $max;
    }

    static function confrimpassword($string1 , $string2){
         return $string1 !== $string2;            
    }

    static function CheckPass($string){
      trim($string);
      return strlen($string) < 8;
    }

}