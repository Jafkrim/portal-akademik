<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profil($nrp)
    {
        $nama = "Ja'far Balyan Al Karim";
        return view('profil_detail', compact('nrp', 'nama'));
    }

    public function project($tema = 'General Assistant Agent')
    {
        return view('project', compact('tema'));
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function storeFeedback(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama mahasiswa wajib diisi.',
            'nama.min' => 'Nama mahasiswa minimal 3 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.ends_with' => 'Email wajib berakhiran @student.its.ac.id.',
            'kategori.required' => 'Kategori masukan wajib dipilih.',
            'pesan.required' => 'Isi pesan wajib diisi.',
            'pesan.min' => 'Isi pesan minimal 15 karakter.'
        ];

        $validated = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email|ends_with:@student.its.ac.id',
            'kategori' => 'required',
            'pesan' => 'required|min:15'
        ], $messages);

        return back()->with('success', 'Terima kasih, masukan Anda berhasil dikirim!');
    }
}