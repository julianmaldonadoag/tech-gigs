<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => 'qwerty12'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);

        Listing::create([
            'title' => 'Frontend Developer',
            'tags' => 'javascript, react, css',
            'company' => 'Google',
            'location' => 'Mountain View, CA',
            'email' => 'email1@gmail.com',
            'website' => 'https://careers.google.com',
            'description' => 'We are looking for a talented frontend developer to join our team at Google. You will be responsible for building and maintaining user interfaces for our web applications using React and CSS. If you are passionate about creating beautiful and responsive user interfaces, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Full-Stack Developer',
            'tags' => 'php, laravel, vue, mysql',
            'company' => 'Amazon',
            'location' => 'Seattle, WA',
            'email' => 'email2@gmail.com',
            'website' => 'https://www.amazon.jobs',
            'description' => 'We are seeking a full-stack developer to join our team at Amazon. You will be responsible for developing and maintaining web applications using PHP, Laravel, Vue, and MySQL. If you are passionate about building scalable and reliable web applications, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Backend Engineer',
            'tags' => 'python, django, postgresql',
            'company' => 'Facebook',
            'location' => 'Menlo Park, CA',
            'email' => 'email3@gmail.com',
            'website' => 'https://www.facebook.com/careers',
            'description' => 'We are looking for a talented backend engineer to join our team at Facebook. You will be responsible for developing and maintaining our backend systems using Python, Django, and PostgreSQL. If you are passionate about building scalable and reliable backend systems, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Mobile App Developer',
            'tags' => 'swift, ios, android, java',
            'company' => 'Uber',
            'location' => 'San Francisco, CA',
            'email' => 'email4@gmail.com',
            'website' => 'https://www.uber.com/careers',
            'description' => 'We are seeking a mobile app developer to join our team at Uber. You will be responsible for developing and maintaining our mobile applications for iOS and Android using Swift and Java. If you are passionate about creating innovative and user-friendly mobile applications, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Data Scientist',
            'tags' => 'python, machine learning, data analysis',
            'company' => 'Microsoft',
            'location' => 'Redmond, WA',
            'email' => 'email5@gmail.com',
            'website' => 'https://careers.microsoft.com',
            'description' => 'We are seeking a data scientist to join our team at Microsoft. You will be responsible for analyzing large datasets and developing machine learning models using Python. If you are passionate about using data to drive business decisions, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'DevOps Engineer',
            'tags' => 'docker, kubernetes, aws',
            'company' => 'Netflix',
            'location' => 'Los Gatos, CA',
            'email' => 'email6@gmail.com',
            'website' => 'https://jobs.netflix.com',
            'description' => 'We are seeking a DevOps engineer to join our team at Netflix. You will be responsible for managing our cloud infrastructure using Docker, Kubernetes, and AWS. If you are passionate about building scalable and reliable cloud infrastructure, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Frontend Developer',
            'tags' => 'javascript, react, css',
            'company' => 'Google',
            'location' => 'Mountain View, CA',
            'email' => 'email7@gmail.com',
            'website' => 'https://careers.google.com',
            'description' => 'We are looking for a talented frontend developer to join our team at Google. You will be responsible for building and maintaining user interfaces for our web applications using React and CSS. If you are passionate about creating beautiful and responsive user interfaces, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Full-Stack Developer',
            'tags' => 'php, laravel, vue, mysql',
            'company' => 'Amazon',
            'location' => 'Seattle, WA',
            'email' => 'email8@gmail.com',
            'website' => 'https://www.amazon.jobs',
            'description' => 'We are seeking a full-stack developer to join our team at Amazon. You will be responsible for developing and maintaining web applications using PHP, Laravel, Vue, and MySQL. If you are passionate about building scalable and reliable web applications, we want to hear from you!',
            'user_id' => $user->id
        ]);

        Listing::create([
            'title' => 'Backend Engineer',
            'tags' => 'python, django, postgresql',
            'company' => 'Facebook',
            'location' => 'Menlo Park, CA',
            'email' => 'email9@gmail.com',
            'website' => 'https://www.facebook.com/careers',
            'description' => 'We are looking for a talented backend engineer to join our team at Facebook. You will be responsible for developing and maintaining our backend systems using Python, Django, and PostgreSQL. If you are passionate about building scalable and reliable backend systems, we want to hear from you!',
            'user_id' => $user->id
        ]);
    }
}
