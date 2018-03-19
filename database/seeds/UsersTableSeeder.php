<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        // Create 5 user records
        for ($i = 0; $i < 5; $i++) {
            /** @var User $user */
            $user = Factory(User::class)->create();
            $user->save();
        }
    }
}
