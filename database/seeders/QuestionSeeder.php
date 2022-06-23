<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM questions");



        for($i=1;$i<=9;$i++){

        	if ( $i%2 != 0 ) {        		
		        DB::table('questions')->insert([
		            'id' => $i,
		            'topic_id' => 1,
		            'question' => 'Does this sign means you can continue driving?',
		            'image' => 'sample.jpg',
		            'answer' => 0,
		            'explanation' => 'This sign means you have to stop while you are driving. May be some blockage ahead.',
		            'marks' => 1,
		            'is_active' => 1,
		        ]);

        	}else{
        		     		
		        DB::table('questions')->insert([
		            'id' => $i,
		            'topic_id' => 2,
		            'question' => 'Would you drive if there is a green signal ahead?',
		            'image' => null,
		            'answer' => 1,
		            'explanation' => 'Green signal means you can drive ahead',
		            'marks' => 1,
		            'is_active' => 1,
		        ]);

        	}

        }

    }
}
