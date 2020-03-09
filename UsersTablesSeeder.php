<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->delete();
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('123'),
        ]);
    }
}
