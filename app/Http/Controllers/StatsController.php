<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function test()
    {
        $test = 'こんにちは';
        return view('stats.test');
    }
}
