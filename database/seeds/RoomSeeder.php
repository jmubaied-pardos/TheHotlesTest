<?php

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();
        foreach ($customers as $customer){
            $randomRoom = Room::inRandomOrder()->first();
            $randomRoom->customers()->attach($customer->id);
        }
    }
}
