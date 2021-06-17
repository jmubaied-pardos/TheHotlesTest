<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('customers')->truncate();
        DB::table('hotels')->truncate();
        DB::table('rooms')->truncate();
        DB::table('room_customer')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(RoomSeeder::class);
    }
}
