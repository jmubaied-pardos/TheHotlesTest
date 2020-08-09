<?php

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            $randomRoom->customer_id = $customer->id;
            $randomRoom->save();
        }
    }
}
