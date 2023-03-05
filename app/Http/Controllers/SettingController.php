<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SettingController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
       // echo "test";
       return view('admin.setting.index');
    }
}
