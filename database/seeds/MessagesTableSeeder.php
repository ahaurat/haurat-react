<?php

use App\Message;
use App\User;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::truncate();

        foreach(User::all() as $user) {
            for ($i = 0; $i < 3; $i++) {

                /** @var Message $message */
                $message = Factory(Message::class)->create();
                $message->user()->associate($user);
                $message->save();
            }
        }
    }
}
