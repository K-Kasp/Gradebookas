<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User([
            'name' => 'Jonas.D',
            'email' => 'jonas@mail.com',
            'password' => bcrypt('secret'),
        ]);
        $user->save();

        $user = new User([
            'name' => 'Mantas.D',
            'email' => 'mantas@mail.com',
            'password' => bcrypt('secret'),
        ]);
        $user->save();
    }
}
