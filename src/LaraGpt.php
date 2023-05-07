<?php

namespace LaraGpt\App;

use Illuminate\Support\Facades\Http;

class LaraGpt {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}