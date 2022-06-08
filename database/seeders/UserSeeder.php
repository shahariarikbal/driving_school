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
            'created_at' => now()->subDays(1)->setTime(0, 0, 0)->toDateTimeString(),
        ]);

        for($i=1;$i<=4;$i++){

            DB::table('users')->insert([
                'subscription_id' => null,
                'name' => 'User' . $i,
                'email' => 'user@biipatente.com'. $i,
                'password' => bcrypt('11'),
                'phone' => '34534535'.$i,
                'is_active' => 1,
                'is_paid' => false,
                'created_at' => now()->subDays($i)->setTime(0, 0, 0)->toDateTimeString(),
            ]);
        }
    }
}
