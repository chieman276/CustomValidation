<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = 'An';
        $student->age = '18';
        $student->address = 'Đông Hà';
        $student->phone = '012345678';
        $student->save();
    }
}
