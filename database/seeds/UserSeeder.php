<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,5)
            ->create()
            ->each(function ($user){
                $user->roles()->attach(Role::where('name', 'user')->first());
            });
    }
}
