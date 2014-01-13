<?php

    /**
     * Function to reverse an string by cutting it one by one until
     * its length is less than 2.
     * 
     * @param string $string String to be reversed
     * 
     * @return string The reversed string
     */
    function rs_stop_on_len_1($string)
    {
    	// If the length is less than 2, the output is equals to the input
        if (strlen($string) <= 1) {
            return $string;
        }

        return rs_stop_on_len_1(substr($string, 1)) . $string[0];
    }