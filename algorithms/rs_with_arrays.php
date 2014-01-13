<?php

    /**
     * Function to reverse an string by using array_reduce as the loop.
     * 
     * @param string $string String to be reversed
     * 
     * @return string The reversed string
     */
    function rs_with_arrays($string)
    {
        // Split the string into an array and reduce it into a single string
        return array_reduce(str_split($string, 1), function(&$result, $item) {
            // Concatenate the item before the already-computed string
            return $item . $result;
        }, '');
    }