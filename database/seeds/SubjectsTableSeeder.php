<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
        	[
        		'name' => 'Math 101'
        	],

        	[
        		'name' => 'Science 101',
        	],

        	[
        		'name' => 'Rizal',
        	],

        	[
        		'name' => 'Philosohy',
        	],

        	[
        		'name' => 'Discrete Math',
        	],

        	[
        		'name' => 'Algorithm 101'
        	],

        	[
        		'name' => 'Microeconomics',
        	],

        	[
        		'name' => 'PE 1',
        	],

        	[
        		'name' => 'Programming 101',
        	],

        	[
        		'name' => 'Physics',
        	],
        	
        ]);

    }
}
