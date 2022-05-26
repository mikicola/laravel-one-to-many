<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\UserInfo;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user){
            userInfo::create(
                [
                    'user_id'           => $user->id,
                    'phone'             => $faker->phoneNumber(),
                    'address'           => $faker->address(),
                    'date_of_birth'     => $faker->date()
                ]
            );
        }
    }
}
