<?php
/**
 * Created by PhpStorm.
 * User: ihara-kenta
 * Date: 2016/09/08
 * Time: 13:14
 */

namespace App\Service;


class WhetherUvService
{
// My code.
    function getUvLevel($data)
    {
        $uvIndex[$this->handle($data)] = true;
        return $uvIndex;
    }

    function handle($data)
    {

        switch ($data) {
            case 0 <= $data && $data < 3;
                return 'low';
                break;
            case 3 <= $data && $data < 6;
                return 'moderate';
                break;
            case 6 <= $data && $data < 8;
                return 'high';
                break;
            case 8 <= $data && $data < 11;
                return 'veryhigh';
                break;
            case 11 < $data;
                return 'extreme';
                break;
            default;
                return null;
                break;
        }
    }

    function roundLocation($locale)
    {
        return round($locale, 1);
    }
}