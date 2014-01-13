<?php

    // Define some constants
    define('ALGORITHMS_FOLDER',     'algorithms/');
    //define('NUMBER_OF_TESTS',       1000000);
    define('NUMBER_OF_TESTS',       10000);
    define('MAX_STRING_LENGTH',     20);
    define('MAX_TIME_PRECISION',    10000);

    // Array to place all the algorithms' names.
    // It is prefilled with the reference function.
    $algorithms = array('strrev');

    // Load all the algorithms 
    $handle = opendir(ALGORITHMS_FOLDER);
    if ($handle !== false) {

        // Read the directory
        while (false !== ($entry = readdir($handle))) {
            if ($entry[0] !== '.') {

                // Register and load the algorithm
                $algorithms[] = substr($entry, 0, -4);
                require_once ALGORITHMS_FOLDER . $entry;
            }
        }
    } else {
        // Inform and exit
        echo 'Sorry, could not open the algorithms folder.' . PHP_EOL;
        die;
    }

    // Sort algorithms to have the similar ones together
    sort($algorithms);

    // Generate the bunch of data we are going to use for testing
    echo 'Generate data:' . PHP_EOL;
    $data = array();
    for ($i = 0; $i < NUMBER_OF_TESTS; $i++) {
        $string = '';

        // Generate a random string with a random length
        $length = rand(0, MAX_STRING_LENGTH);
        for ($l = 0; $l < $length; $l++) {
            $string .= chr(rand(97, 122));
        }

        $data[] = $string;
    }
    echo count($data) . ' strings generated.' . PHP_EOL . PHP_EOL . PHP_EOL;

    // Start testing the algorithms
    foreach ($algorithms as $algorithm) {
        echo $algorithm . ':' . PHP_EOL;

        // Start the timer
        $ts_start = microtime(true);
        foreach ($data as $string) {
            // Call the algorithm
            $result = call_user_func($algorithm, $string);

            // Call the reference algorithm
            $reference = strrev($string);

            // Validate both results
            if ($result !== $reference) {
                echo 'Sorry but "' . $result . '" is not "' . $reference . '".' . PHP_EOL;
                die;
            }
        }
        // Stop the timer
        $ts_stop = microtime(true);

        // Show the elapsed time
        echo (intval(($ts_stop - $ts_start) * MAX_TIME_PRECISION) / MAX_TIME_PRECISION) . ' seconds' . PHP_EOL . PHP_EOL;
    }