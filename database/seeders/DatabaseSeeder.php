<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Device;
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

        $this->call([
            UserSeeder::class,
            HomeSeeder::class,
            ServicesSeeder::class,
            //RoomsSeeder::class,
            //DeviceTypesSeeder::class,
            //DevicesSeeder::class,
            ParamsSeeder::class,
            DevicesTypesRoomsSeeder::class,
        ]);
    }
}
