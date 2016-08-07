<?php

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
        DB::table('users')-> insert([
            'name' => 'pen2plier',
            'email' => 'pen2plier@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
