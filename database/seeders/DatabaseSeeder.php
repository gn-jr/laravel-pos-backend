<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ganjar Nugraha',
            'email' => 'g.nugraha@gmail.com',
            'password' => Hash::make('12341234'),
            'roles' => 'ADMIN',
            'phone' => '08561542014',
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
