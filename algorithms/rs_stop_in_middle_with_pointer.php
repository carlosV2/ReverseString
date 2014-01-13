<?php

    /**
     * Function to wrap the call to the real function.
     * As call_user_func needs to call all functions in the same
     * way, this function is needed to supply the right values to
     * the real function.
     * 
     * @param string $string String to be reversed
     * 
     * @return string The reversed string
     */
    function rs_stop_in_middle_with_pointer($string) {
        rs_stop_in_middle_with_pointer_do_work($string, 0, strlen($string) - 1);
        return $string;
    }

    /**
     * Real algorithm. This function switches the position of the
     * characters under the indexes. This function uses pointers.
     * 
     * @param string $string String to be reversed
     * @param int $left Left index of the string
     * @param int $right Right index of the string
     */
    function rs_stop_in_middle_with_pointer_do_work(&$string, $left, $right)
    {
        // While the left index is less than the right index, do...
        if ($left < $right) {
            // Switch the characters under the indexes
            $char = $string[$right];
            $string[$right] = $string[$left];
            $string[$left] = $char;

            // Call the function again
            rs_stop_in_middle_with_pointer_do_work($string, $left + 1, $right - 1);
        }
    }