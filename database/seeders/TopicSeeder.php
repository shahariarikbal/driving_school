<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM questions");
        DB::statement("DELETE FROM topics");

        for($i=1;$i<=9;$i++){

        	if ($i%2==0) {
        		
		        DB::table('topics')->insert([
		            'id' => $i,
		            'name' => 'Segnali di obbligo',
		            'slug' => 'Segnali-di-obbligo',
		            'image' => 'sample1.jpg',
		        ]);
        	}elseif($i%3==0){
        		
		        DB::table('topics')->insert([
		            'id' => $i,
		            'name' => 'Strada, Veicoli Doveri',
		            'slug' => 'Segnali-di-obbligo'. $i,
		            'image' => 'sample2.jpg',
		        ]);

        	}else{
        		
		        DB::table('topics')->insert([
		            'id' => $i,
		            'name' => 'Safety distance',
		            'slug' => 'Segnali-di-obbligo' . $i,
		            'image' => 'sample2.jpg',
		        ]);
        	}

        }

    }
}
