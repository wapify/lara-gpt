<?php

namespace LaraGpt\App\Controllers;

use Illuminate\Http\Request;
use LaraGpt\App\LaraGpt;

class LaraGptController extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('laragpt::index', compact('quote'));
    }
}