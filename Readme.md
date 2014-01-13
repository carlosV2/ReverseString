# Reverse String

This project helps to test the feasibility of some reversing-string functions.
Please, note that as a requirement, the functions must not use any string or array reversal nor sort functions built into PHP (such as strrev, array_reverse, etc.). Also may not use any of the standard looping constructs (for, while, foreach...).

## Running the project

To run the project just browse to the folder within the command line and execute:

	$ php index.php

## Results

You will see how the algorithms are tested and the time taken per algorithm. An example result is shown:

	Generate data:
	1000000 strings generated.


	rs_divide_on_middle:
	40.4279 seconds

	rs_stop_in_middle:
	11.8895 seconds

	rs_stop_in_middle_with_pointer:
	12.5251 seconds

	rs_stop_on_len_1:
	23.8343 seconds

	rs_stop_on_len_10_by_if:
	12.6121 seconds

	rs_stop_on_len_10_by_switch:
	13.5073 seconds

	rs_with_arrays:
	39.7664 seconds

	strrev:
	1.887 seconds