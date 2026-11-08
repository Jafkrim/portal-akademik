<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat akun statis penguji dosen
        $dosen = User::factory()->create([
            'name' => 'Dosen Penguji',
            'email' => 'dosenpbkk@its.ac.id',
            'password' => Hash::make('password'),
            'role' => 'dosen',
        ]);

        Project::factory()->count(2)->create([
            'user_id' => $dosen->id,
        ]);

        // 2. Membuat akun statis mahasiswa
        $mahasiswaStatis = User::factory()->create([
            'name' => "Ja'far Balyan Al Karim",
            'email' => 'mahasiswapbkk@student.its.ac.id',
            'nrp' => '5025241040',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
        ]);

        Project::factory()->count(2)->create([
            'user_id' => $mahasiswaStatis->id,
        ]);

        // 3. Membuat 15 user mahasiswa acak, masing-masing memiliki 2 proyek
        User::factory()->count(15)->create(['role' => 'mahasiswa'])->each(function ($user) {
            Project::factory()->count(2)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}