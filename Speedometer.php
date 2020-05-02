<?php


class Speedometer{

const MILE=0.621;


public static function convertKmToMiles(float $value){
    $res=$value*self::MILE;
    return "$value Km vaut $res Miles.";

}

public static function convertMilesToKm(float $value){
    $res=$value/self::MILE;
    return "$value Miles vaut $res Km.";

}

}