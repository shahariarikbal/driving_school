<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM users");
        DB::table('users')->insert([
            'subscription_id' => null,
            'name' => 'User',
            'email' => 'user@biipatente.com',
            'password' => bcrypt('11'),
            'phone' => '34534535',
            'is_active' => 1,
            'is_paid' => false,
        ]);
    }
}
