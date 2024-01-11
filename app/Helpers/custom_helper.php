<?php


if (!function_exists('elapsed_time')) {
    /**
     * Calculate elapsed time.
     *
     * @param float $start_time The start time.
     * @return float|string Elapsed time or an error message if $start_time is not numeric.
     */
    function elapsed_time($start_time)
    {
        // Check if $start_time is numeric
        if (!is_numeric($start_time)) {
            return 'Error: $start_time is not a numeric value.';
        }

        // Calculate elapsed time
        $elapsed = microtime(true) - $start_time;

        return number_format($elapsed, 4);
    }
}
