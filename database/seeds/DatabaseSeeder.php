<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Blog;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => str_random(10),
            ]
        ); 
        
        User::create(
            [
                'name' => 'alex',
                'email' => 'alex@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'user',
                'remember_token' => str_random(10),
            ]
        );

        // Teacher model
        Teacher::create(
            [
                'name' => 'Bianca Wilson',
                'job' => 'TEACHER',
                'about' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'image' => 'teacher-1.jpg',
            ]
        ); 

        Teacher::create(
            [
                'name' => 'Mitch Parker',
                'job' => 'ENGLISH TEACHER',
                'about' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'image' => 'teacher-2.jpg',
            ]
        ); 

        Teacher::create(
            [
                'name' => 'Stella Smith',
                'job' => 'ART TEACHER',
                'about' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'image' => 'teacher-3.jpg',
            ]
        ); 

        Teacher::create(
            [
                'name' => 'Monshe Henderson',
                'job' => 'SCIENCE TEACHER',
                'about' => 'I am an ambitious workaholic, but apart from that, pretty simple person.',
                'image' => 'teacher-4.jpg',
            ]
        ); 
        // Course model
        Course::create(
            [
                'lesson' => 'Arts Lesson',
                'time' => '9:00am - 10am',
                'title' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'image' => 'course-1.jpg',
            ]
        );

        Course::create(
            [
                'lesson' => 'Language Lesson',
                'time' => '9:00am - 10am',
                'title' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'image' => 'course-2.jpg',
            ]
        ); 

        Course::create(
            [
                'lesson' => 'Music Lesson',
                'time' => '9:00am - 10am',
                'title' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'image' => 'course-3.jpg',
            ]
        ); 

        Course::create(
            [
                'lesson' => 'Sports Lesson',
                'time' => '9:00am - 10am',
                'title' => 'Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.',
                'image' => 'course-4.jpg',
            ]
        ); 
        // Blog madel
        Blog::create(
            [
                'title' => 'Skills',
                'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => 'image_1.jpg',
                'day' => '01',
                'month' => 'July',
                'year' => '2020',
                
            ]
        );

        Blog::create(
            [
                'title' => ' Dvelop Your Child Memory',
                'image' => 'image_2.jpg',
                'day' => '02',
                'month' => 'August',
                'year' => '2020',
                'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                
            ]
        );

        Blog::create(
            [
                'title' => 'Child Memory',
                'image' => 'image_3.jpg',
                'day' => '03',
                'month' => 'September',
                'year' => '2020',
                'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                
            ]
        );

       Blog::create(
            [
                'title' => 'Develop',
                'image' => 'image_4.jpg',
                'day' => '04',
                'month' => 'October',
                'year' => '2020',
                'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                
            ]
        );

        Blog::create(
            [
                'title' => 'Memory',
                'image' => 'image_5.jpg',
                'day' => '05',
                'month' => 'November',
                'year' => '2020',
                 'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                
            ]
        );

        Blog::create(
            [
                'title' => 'Child',
                'image' => 'image_6.jpg',
                'day' => '06',
                'month' => 'December',
                'year' => '2020',
                'information' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                
            ]
        );
                    
    }
}
