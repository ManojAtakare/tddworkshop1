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

        $numbersArray = explode(",", $numbers);

        if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
        }

        return array_sum($numbersArray);
    }


    public function mul($numbers)
    {

        if (empty($numbers)) {
            return 0;
        }
        if (!is_string($numbers)) {
            throw new \InvalidArgumentException('Parameters must be a string');
        }

        $numbersArray = explode(",", $numbers);

        if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
        }

        return array_product($numbersArray);
    }

}

