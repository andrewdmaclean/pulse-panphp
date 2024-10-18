<?php

if (! function_exists('toHumanReadableNumber')) {
    /**
     * Convert a number to a human-readable version
     */
    function toHumanReadableNumber(int $number): string
    {
        return \Illuminate\Support\Number::format($number);
    }
}

if (! function_exists('toHumanReadablePercentage')) {
    /**
     * Divide 2 values and present them as a human-readable percentage
     */
    function toHumanReadablePercentage(int $total, int $part): string
    {
        if ($total === 0) {
            return 'Infinity%';
        }

        return \Illuminate\Support\Number::percentage($part / $total * 100, 0, 1);
    }
}
