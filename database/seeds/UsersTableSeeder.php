<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $username = ['andryan','danang','admin'];
        $email = ['andryan','danang','admin'];
        $password = ['user1','user2','admin'];
        $role = ['user','user','admin'];
        foreach($username as $index => $item) {
            $data[] = [
            'name' => $item,
            'email' => $email[$index].'@gmail.com',
            'password' => $password[$index],
            'role' => $role[$index]
            ];
        }
            User::insert($data);
    }
}
