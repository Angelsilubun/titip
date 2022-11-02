<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerifikasiLayananVendorController extends Controller
{
    public function index()
    {
        return view('admin.vendor.verifikasi_layanan');
    }

}
