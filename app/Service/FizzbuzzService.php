<?php
namespace App\Service;

class FizzbuzzService
{
// My code.
    function handle($iterate)
    {
        $isFizz = ($iterate % 3 === 0);
        $isBuzz = ($iterate % 5 === 0);

        switch ($iterate) {
            case $isFizz && $isBuzz;
                return 'Fizz Buzz';
                break;
            case $isFizz;
                return 'Fizz';
                break;
            case $isBuzz;
                return 'Buzz';
                break;
            default;
                return $iterate;
                break;
        }
    }

    function Fizzbuzz($num)
    {
        for ($i = 1; $i <= $num; $i++) {
            $str = '';
            $str .= ' ' . $this->handle($i);
        }
        return trim($str);
    }
}