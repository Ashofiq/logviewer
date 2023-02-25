<?php

namespace Ashofiq\LogViewer;

use Illuminate\Support\Facades\Http;

class LogViewer {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}