<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM faqs");



        for($i=1;$i<=9;$i++){

        	if ( $i%2 != 0 ) {  
        	      		
		        DB::table('faqs')->insert([
		            'id' => $i,
		            'question' => 'How many lessons will I need to learn to drive?',
		            'answer' => 'Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae sequi.',
		            'is_active' => 1,
		        ]);

        	}else{
        		  		
		        DB::table('faqs')->insert([
		            'id' => $i,
		            'question' => 'Should I learn to drive in an automatic or manual car?',
		            'answer' => 'Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae sequi.',
		            'is_active' => 1,
		        ]);

        	}

        }

    }
}
