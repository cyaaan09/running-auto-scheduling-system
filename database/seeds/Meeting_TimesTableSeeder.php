<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meeting_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meeting_times')->insert([
        	[
        		'day' => 'M',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '10:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '1:00 PM',
        		'end' => '2:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'M',
        		'start' => '5:30 PM',
        		'end' => '6:30 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'T',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '1:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'W',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'TH',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '7:30 AM',
        		'end' => '9:00 AM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'F',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	
        	
        ]);
    }
}
