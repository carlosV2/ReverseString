<?php

    /**
     * Function to reverse an string by dividing it on the middle.
     * Given the string "abcdef", it generates two strings "abc" and "def"
     * and feeds the function again. It stops when just 1 character per time
     * is supplied.
     * 
     * @param string $string String to be reversed
     * 
     * @return string The reversed string
     */
    function rs_divide_on_middle($string)
    {
        // Compute the length
        $length = strlen($string);

        // If length is 0 or 1, return the input string
        if ($length <= 1) {
            return $string;

        // If lenght is divisible by 2, divide the string by the middle,
        // switch the parts and call to the function per part.
        } else if ($length % 2 === 0) {
            $middle = $length / 2;

            $str1 = substr($string, 0, $middle);
            $str2 = substr($string, $middle);

            return rs_divide_on_middle($str2) . rs_divide_on_middle($str1);

        // If lenght is not divisible by 2, divide the string into two same-length
        // parts and the residual part, switch them and call to the function per part.
        } else {
            $middle = intval($length / 2);

            $str1 = substr($string, 0, $middle);
            $str2 = $string[$middle];
            $str3 = substr($string, $middle + 1);

            return rs_divide_on_middle($str3) . $str2 . rs_divide_on_middle($str1);
        }
    }