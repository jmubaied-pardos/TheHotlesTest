<?php

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = factory(Hotel::class, 5)
            ->create()
            ->each(function ($hotel){
                $rooms = factory(Room::class, rand(5,10))->make()->toArray();
                $hotel->rooms()->createMany( $rooms );
            });
    }
}
