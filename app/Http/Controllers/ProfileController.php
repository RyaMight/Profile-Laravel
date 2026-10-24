<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class ProfileController extends Controller
{
    public function profile()
    {
        $certificates = Certificate::latest()->get();

        return view('profile', compact('certificates'));
    }
}
