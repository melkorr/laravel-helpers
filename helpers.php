<?php

use Illuminate\Support\Debug\Dumper;

if (! function_exists('d')) {
    /**
     * Dump the passed variables and continue the script.
     *
     * @param  mixed
     * @return void
     */
    function d()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());
    }
}
