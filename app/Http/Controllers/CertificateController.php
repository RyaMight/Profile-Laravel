<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function create()
    {
        return view('admin.certificates.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        // Simpan gambar ke folder storage/app/public/certificates
        $imagePath = $request->file('image')->store('certificates', 'public');

        Certificate::create([
            'title'       => $request->title,
            'image'       => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Sertifikat berhasil ditambahkan!');
    }
}