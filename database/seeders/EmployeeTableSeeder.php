<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'Sreejith',
            'email' => 'sreejith"gmail.com',
            'phone' => '1986532313',          
            'gender' => 'male',
        ]);
        Employee::create([
            'name' => 'Anupama',
            'email' => 'anupama@gmail.com',
            'phone' => '654654654',          
            'gender' => 'female',
        ]);
    }
}
