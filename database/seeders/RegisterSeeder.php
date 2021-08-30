<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Register;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Register::create(['id'=>'1','support' => 'HR']);
        Register::create(['id'=>'2','support' => 'TEAM LEAD']);
        Register::create(['id'=>'3','support' => 'MANAGER']);
        Register::create(['id'=>'4','support' => 'ADMIN']);
       
    }
}
