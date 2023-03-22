<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        DB::table('employees')->insert([
            'name'           =>  'Calypso',
            'email'          =>  'cal@gmail.com',
            'address'        =>  'Rome',
            'phone'          =>  '09387561726'
        ]);
    }
}
