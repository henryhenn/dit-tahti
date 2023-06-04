<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin Dit Tahti',
            'email' => 'admin@email.test',
            'password' => bcrypt('admin1234')
        ]);

        $user->assignRole('Administrator');

        Category::create([
            'kategori' => 'Barang Temuan',
        ]);

        Category::create([
            'kategori' => 'Barang Temuan Sebagai Barang Bukti',
        ]);
    }
}
