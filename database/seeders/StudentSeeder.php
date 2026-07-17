<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;
//bai4
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //bai4
        // Student::factory()->count(10)->create();
        //bai9
        Student::factory()->count(20)->create();
    }
}
