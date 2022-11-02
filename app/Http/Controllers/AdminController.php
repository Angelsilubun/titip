<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_ad()
    {
        return view("admin.admin.dashboard_admin");
    }
}
