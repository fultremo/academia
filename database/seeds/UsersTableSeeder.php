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
        factory(User::class)->create([
            'first_name'   =>  'Fulgencio',
            'last_name' =>  'Valera',
            'email'  =>  'fulgencio.valera@gmail.com',
            'nickname'  =>  'fulgen'
        ]);

        factory(User::class, 49)->create();

    }
}
