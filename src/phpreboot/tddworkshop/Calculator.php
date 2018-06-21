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

        $numbersArray = explode(",", $numbers);

        return array_sum($numbersArray);
    }

}