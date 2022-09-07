<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CompanySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(UserSeeder::class);
    }
}
