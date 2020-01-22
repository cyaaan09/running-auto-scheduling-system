<?php

use Illuminate\Database\Seeder;

class Subject_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_details')->insert([
        	[
        		'id' 		=> 1,
        		'subject_id' => 1,
        		'teaching_type' => 1,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 3,
        		'subject_id' => 1,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 4,
        		'subject_id' => 2,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 6,
        		'subject_id' => 3,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 8,
        		'subject_id' => 4,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 10,
        		'subject_id' => 5,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 11,
        		'subject_id' => 6,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 12,
        		'subject_id' => 7,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 13,
        		'subject_id' => 8,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 14,
        		'subject_id' => 8,
        		'teaching_type' => 3,
        		'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 15,
        		'subject_id' => 9,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 16,
        		'subject_id' => 9,
        		'teaching_type' => 1,
        		'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 17,
        		'subject_id' => 10,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 18,
        		'subject_id' => 10,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 19,
        		'subject_id' => 6,
        		'teaching_type' => 2,
        		'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],
        	
        ]);

    }
}
