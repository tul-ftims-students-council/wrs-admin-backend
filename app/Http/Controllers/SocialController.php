<?php

namespace App\Http\Controllers;

use App\Models\Social;

class SocialController extends Controller
{
    public function all()
    {
        return Social::all();
    }
}
