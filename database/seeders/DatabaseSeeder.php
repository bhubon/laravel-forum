<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        User::factory()->create([
            'name' => 'Nil Sd',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class);



        $this->call([
                // Users can be seeded after categories
            ThreadSeeder::class,    // Threads after users
            ReplySeeder::class,     // Replies last
        ]);


    }
}
