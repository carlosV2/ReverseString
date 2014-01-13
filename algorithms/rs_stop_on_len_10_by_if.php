<?php

    /**
     * Function to reverse an string by caching some predefined lengths.
     * It uses conditionals to choose the length.
     * 
     * @param string $string String to be reversed
     * 
     * @return string The reversed string
     */
    function rs_stop_on_len_10_by_if($string)
    {
        // Compute the length
        $length = strlen($string);

        // Choose the predefined length and to the handwrited switch
        if ($length <= 1) {
            return $string;
        } else if ($length === 2) {
            return $string[1] . $string[0];
        } else if ($length === 3) {
            return $string[2] . $string[1] . $string[0];
        } else if ($length === 4) {
            return $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 5) {
            return $string[4] . $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 6) {
            return $string[5] . $string[4] . $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 7) {
            return $string[6] . $string[5] . $string[4] . $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 8) {
            return $string[7] . $string[6] . $string[5] . $string[4] . $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 9) {
            return $string[8] . $string[7] . $string[6] . $string[5] . $string[4] . $string[3] . $string[2] . $string[1] . $string[0];
        } else if ($length === 10) {
            return $string[9] . $string[8] . $string[7] . $string[6] . $string[5] . $string[4] . $string[3] . $string[2] . $string[1] . $string[0];

        // If no predefined length found, cut the string by one and call it again
        } else {
            return rs_stop_on_len_10_by_if(substr($string, 1)) . $string[0];
        }
    }