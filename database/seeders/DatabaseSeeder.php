<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat akun statis penguji dosen
        $dosen = User::factory()->create([
            'name' => 'Dosen Penguji',
            'email' => 'dosenpbkk@its.ac.id',
            'password' => bcrypt('password'),
            'role' => 'dosen',
        ]);

        Project::factory()->count(2)->create([
            'user_id' => $dosen->id,
        ]);

        // 2. Membuat 15 user mahasiswa acak, masing-masing memiliki 2 proyek
        User::factory()->count(15)->create(['role' => 'mahasiswa'])->each(function ($user) {
            Project::factory()->count(2)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}