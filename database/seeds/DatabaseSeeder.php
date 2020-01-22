<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(Subject_DetailsTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        
        $this->call(Meeting_TimesTableSeeder::class);

    }
}
