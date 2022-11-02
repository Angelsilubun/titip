<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Models\LayananSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LayananSliderController extends Controller
{
    public function index()
    {
        $data_slider_slider = [
            "layanan_slider" => LayananSlider::get()
        ];

        return view('superadmin.slider.layanan_slider.tambah', $data_slider);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'status' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image")) {
            $data_slider = $request->file("image")->store("layananslider");
        }

        LayananSlider::create([
            'image' => $data_slider,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        return back()->with('berhasil', 'Slider baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data_slider = [
            "edit" => LayananSlider::where("id", $request->id)->first()
        ];

        return view("superadmin.slider.layanan_slider.edit", $data_slider);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'status' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data_slider = $request->file("image_new")->store("layananslider");
        } else {
            $data_slider = $request->gambarLama;
        }

        LayananSlider::where("id", $request->id)->update([
            'image' => $data_slider,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data_slider = [
            "detail" => LayananSlider::where("id", $request->id)->first()
        ];

        return view("superadmin.slider.layanan_slider.detail", $data_slider);
    }

    public function destroy(LayananSlider $layanan_slider)
    {
        Storage::delete('layanan_slider'. $layanan_slider->image);

        $layanan_slider->delete();
        return back()->with('berhasil');
    }
}
