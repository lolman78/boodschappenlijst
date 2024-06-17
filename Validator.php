<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min = 0, $max = INF)
    {
        // kijk of het een heel nummer is
        if(!is_numeric($value)){
            return false;
            exit;
        }
        $value = trim($value);

        return $value > $min;
    }

    public static function decimal($value, $min, $max)
    {
        // Controleer of het een numerieke string is
        if (!is_numeric($value)) {
            return false;
        }

        // Trim eventuele spaties rondom de waarde
        $value = trim($value);

        // Controleer of de waarde overeenkomt met het patroon voor twee decimalen
        if (!preg_match('/^\d+(\.\d{2})?$/', $value)) {
            return false;
        }

        // Controleer of de waarde binnen het gegeven bereik valt
        if ($value < $min || $value > $max) {
            return false;
        }

        return true;
    }

    // public static function decimal($value, $min, $max)
    // {
    //     // kijk of het een nummer is met een decimaal 
    //     if(!is_numeric($value)){
    //         return false;
    //         exit;
    //     }

    //     $value = trim($value);
        
    //     return strlen($value) >= $min && strlen($value) <= $max;
    // }
}