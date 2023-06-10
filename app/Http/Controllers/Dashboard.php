<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Dashboard extends Controller
{
    public function getUserInfo(Request $request)
    {
        $user = $request->user();

        return 'success';
    }
}
