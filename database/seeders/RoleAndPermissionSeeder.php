<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat izin spesifik
        $permHapus = Permission::firstOrCreate(['name' => 'hapus-proyek']);

        // 2. Membuat peran (role)
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleStaf = Role::firstOrCreate(['name' => 'staf']);

        // 3. Menautkan izin ke peran Admin
        $roleAdmin->givePermissionTo($permHapus);

        // 4. Menugaskan peran Admin ke akun dosenpbkk@its.ac.id
        $user = User::where('email', 'dosenpbkk@its.ac.id')->first();
        if ($user) {
            $user->assignRole('admin');
        }
    }
}