<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalProyek = Project::count();
        $totalMahasiswa = User::where('role', 'mahasiswa')->count();
        $totalAdmin = User::role('admin')->count(); // Menghitung user dengan peran Spatie 'admin'

        return view('admin.dashboard', compact('totalProyek', 'totalMahasiswa', 'totalAdmin'));
    }
}