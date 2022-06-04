<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM subscriptions");


        DB::table('subscriptions')->insert([
            'duration' => 3,
            'features' => '<ul class="pricing-table__list">
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24.99 € per month</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 on-demand video lessons</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiz tutorial</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unlimited access to the full course</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Access on mobile device, </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desktop computer</font></font></li>
    </ul>',
            'price' => 300.00,
            'title' => 'Silver',
        ]);


        DB::table('subscriptions')->insert([
            'duration' => 6,
            'features' => '<ul class="pricing-table__list">
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24.99 € per month</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 on-demand video lessons</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiz tutorial</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unlimited access to the full course</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Access on mobile device, </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desktop computer</font></font></li>
    </ul>',
            'price' => 600.00,
            'title' => 'Platinum',
        ]);


        DB::table('subscriptions')->insert([
            'duration' => 12,
            'features' => '<ul class="pricing-table__list">
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24.99 € per month</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25 on-demand video lessons</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quiz tutorial</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unlimited access to the full course</font></font></li>
      <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Access on mobile device, </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">desktop computer</font></font></li>
    </ul>',
            'price' => 900.00,
            'title' => 'Gold',
        ]);
    }
}
