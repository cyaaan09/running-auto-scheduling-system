<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
        	[
        		'name' => 'Dr Christian Matangcas'
        	],

        	[
        		'name' => 'Dr Carl Yap',
        	],

        	[
        		'name' => 'Dr John Rosales',
        	],

        	[
        		'name' => 'Dr Jaymar Bajala',
        	],

        	[
        		'name' => 'Dr Jessa Rosales',
        	],

        	[
        		'name' => 'Dr Pamela Rosales'
        	],

        	[
        		'name' => 'Mr Ghost Saruman',
        	],

        	[
        		'name' => 'Miss Shark Bait',
        	],

        	[
        		'name' => 'Miss Pennylane Samgyupsal',
        	],

        	[
        		'name' => 'Miss Sylvia',
        	],

        	[
        		'name' => 'Mr Latortuga Shellby'
        	],

        	[
        		'name' => 'Mr Steve',
        	],

        	[
        		'name' => 'Mr Stark',
        	],

        	[
        		'name' => 'Mrs Mika Tiu',
        	],

        	[
        		'name' => 'Ms Adi',
        	],

        	[
        		'name' => 'Mr Luke'
        	],

        	[
        		'name' => 'Mr Digong',
        	],

        	[
        		'name' => 'Mr Pipoy',
        	],

        	[
        		'name' => 'Mrs Mikay',
        	],

        	[
        		'name' => 'Mr Kaspersking Tunay',
        	],

        	[
        		'name' => 'Mr Zemzem',
        	],

        ]);
    }
}
