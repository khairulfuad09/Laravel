<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Khairul Fuad',
            'email' => 'kfuad9977@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Car::create([
            'plat' => 'DA 0017 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0018 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0019 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0020 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0021 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0022 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0023 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0024 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0025 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
        Car::create([
            'plat' => 'DA 0026 BA',
            'nama_motor' => 'avanza',
            'alamat' => 'Mandiangin',
            'image' => 'gambar.png'
        ]);
    }
}
