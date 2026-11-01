<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        
        // TODO 1 : Buat akun awal untuk Dosen.
        User::updateOrCreate(
            ['email' => 'dosen@lms.com'], // Pencarian berdasarkan email
            [
                'name'        => 'Dosen Pengampu',
                'password'    => Hash::make('password123'),
                'role'        => 'dosen',
                'nomor_induk' => '1234567890', // Sesuaikan nama kolom dengan tabel users (misal: nip / nomor_induk)
            ]
        );

        // Tambahan: Akun Mahasiswa (opsional)
        User::updateOrCreate(
            ['email' => 'mahasiswa@lms.com'],
            [
                'name'        => 'Mahasiswa LMS',
                'password'    => Hash::make('password123'),
                'role'        => 'mahasiswa',
                'nomor_induk' => '0987654321', // Sesuaikan nama kolom di database Anda (misal: nim / nomor_induk)
            ]
        );
    }
}