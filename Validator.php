<?php
class Validator
{
    public static function string($value, $min = 1, $max = 1000)
    {
        $result = trim($value);
        $len = strlen($result);

        return $len >= $min && $len <= $max;
    }
}
