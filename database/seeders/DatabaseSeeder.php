<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            CollectionCenterSeeder::class,
            UserSeeder::class,
            ItemTypeSeeder::class,
            EwasteOrderSeeder::class,
        ]);
    }
}