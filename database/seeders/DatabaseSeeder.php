<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('tests')->truncate();
        DB::table('courses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('users')->truncate();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            FaqSeeder::class,
        ]);

        DB::table('posts')->truncate();
        $this->call([
            PostSeeder::class,
        ]);


        $this->call([
            DashboardSeeder::class,
        ]);
    }
}
