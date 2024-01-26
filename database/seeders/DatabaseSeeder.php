<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Appointment;
use App\Models\Teacher;
use App\Models\Classroom;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::factory(1)->create();
        Testimonial::factory(10)->create();
        Contact::factory(20)->create();
        Appointment::factory(20)->create();
        Teacher::factory(15)->create();
        Classroom::factory(20)->create();
    }
}



