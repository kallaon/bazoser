<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use fabpot\Goutte;

class TestBotController extends Controller
{
    function show() { 
        $html = file_get_contents(
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://www.your_external_website.com");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            curl_close($ch);
        );
    }
}
