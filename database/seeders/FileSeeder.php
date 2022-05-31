<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM files");
        		
        DB::table('files')->insert([
            'file' => 'sample.mp4',
            'image' => 'intro.jpg',
            'title' => 'Traffic lights, Signaling of Traffic Agents',
            'description' => 'In this lesson we will see the various types of traffic lights that we can find on the road and.            ',
            'type' => 'intro',
            'is_active' => '1',
        ]);

        for($i=1;$i<=25;$i++){
        	if ($i%2==0) {
        		
		        DB::table('files')->insert([
		            'file' => 'sample2.mp4',
		            'image' => 'sample2.jpg',
		            'title' => 'Traffic lights, Signaling of Traffic Agents',
		            'description' => 'In this lesson we will see the various types of traffic lights that we can find on the road and.            ',
		            'type' => $i,
		            'is_active' => '1',
		        ]);
        	}else{

		        DB::table('files')->insert([
		            'file' => 'sample.mp4',
		            'image' => 'sample.jpg',
		            'title' => 'Essential Definitions (Road, Vehicles, Behaviors)',
		            'description' => 'This lesson takes you in the first steps in the driving environment.            ',
		            'type' => $i,
		            'is_active' => '1',
		        ]);
        	}
        }
    }
}
