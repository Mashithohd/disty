<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function store(Request $request)
    {
        // Debug request data
         dd($request->all());

        // Validate the form input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'phone' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{4}/',
            'file' => 'nullable|mimes:svg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload (if any)
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        } else {
            $filePath = null;
        }

        // Create a new Sekolah entry
        Sekolah::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'kecamatan' => $request->input('kecamatan'),
            'kota' => $request->input('kota'),
            'phone' => $request->input('phone'),
            'file' => $filePath,
        ]);

        return redirect()->route('atursekolah.index')->with('success', 'Sekolah settings saved successfully!');
    }
}

