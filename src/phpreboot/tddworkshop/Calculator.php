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
        $numbers = str_replace("n", ",", $numbers);
        $regex = ['@','$','!','%',"^",'&','*','(',')','_',';','{','}','[',']'];
        $numbers = stripslashes($numbers);
        $numbers = str_replace($regex, ",", $numbers);
        $numbers = trim($numbers,',');
        $numbers = explode(",", $numbers);

        $negative = array_filter($numbers, function ($v) {
            return $v < 0;
        });

        if(count($negative) > 0){
            $negativeNo = implode(',',$negative);
            throw new \InvalidArgumentException("Negative numbers (".$negativeNo.") not allowed.");
        }

        $numbersArray = array_filter($numbers, function ($v) {
            return $v < 1000;
        });


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
        $numbers = str_replace("n", ",", $numbers);
        $regex = ['@','$','!','%',"^",'&','*','(',')','_',';','{','}','[',']'];
        $numbers = stripslashes($numbers);
        $numbers = str_replace($regex, ",", $numbers);
        $numbers = trim($numbers,',');
        $numbers = explode(",", $numbers);


        $negative = array_filter($numbers, function ($v) {
            return $v < 0;
        });

        if(count($negative) > 0){
            $negativeNo = implode(',',$negative);
            throw new \InvalidArgumentException("Negative numbers (".$negativeNo.") not allowed.");
        }

        $numbersArray = array_filter($numbers, function ($v) {
            return $v < 1000;
        });


        if (array_filter($numbersArray, 'is_numeric') !== $numbersArray) {
            throw new \InvalidArgumentException('Parameters string must contain numbers');
        }

        return array_product($numbersArray);
    }

}

