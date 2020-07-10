<?php

use App\Profile;
use App\Question;
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
        factory(User::class, 10)->create()->each(function ($user) {

            $questions = factory(Question::class, rand(0,3))->make();
            $user->questions()->saveMany($questions);

            
        });
    }
}
