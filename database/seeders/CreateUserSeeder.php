<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name'=>'Admin',
                'email'=>'admin1@gmail.com',
                'is_admin'=>'1',
                'password'=>\Hash::make('19111122')
            ]
               ];
            foreach($users as $key => $value)
            {
                User::create($value);
            }
    }
}
