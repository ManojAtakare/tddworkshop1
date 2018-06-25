<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 21/6/18
 * Time: 2:56 PM
 */

namespace Phpreboot\tddworkshop;


class Calculator
{
    public function add($numbers)
    {

        if (empty($numbers)) {
            return 0;
        }
        if (!is_string($numbers)) {
            throw new \InvalidArgumentException('Parameters must be a string');
        }
        $numbers = stripslashes($numbers);
        $numbers = explode(",", $numbers);


        $numbersArray = array_filter($numbers, function ($v) {
            return $v < 1000;
        });


        if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
        }

        return array_sum($numbersArray);
    }

}

