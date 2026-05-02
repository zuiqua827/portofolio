<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Full stack e-commerce website built with Laravel, Vue.js, and modern UI/UX design. Features include product catalog, shopping cart, payment integration, and admin dashboard.',
                'image' => 'projects/ecommerce.jpg',
                'link' => 'https://ecommerce.example.com',
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Modern task management application with real-time collaboration, drag & drop interface, team management, and analytics dashboard. Built with Next.js and Tailwind CSS.',
                'image' => 'projects/task-app.jpg',
                'link' => 'https://tasks.example.com',
            ],
            [
                'title' => 'Personal Portfolio',
                'description' => 'This very portfolio website! Responsive design with dark mode, admin CRUD for projects, contact form, and smooth animations. Laravel + TailwindCSS powered.',
                'image' => 'projects/portfolio.jpg',
                'link' => '#',
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather dashboard with forecasts, maps, historical data, and location-based predictions. React app consuming multiple weather APIs.',
                'image' => 'projects/weather.jpg',
                'link' => 'https://weather.example.com',
            ],
            [
                'title' => 'Social Media Analytics',
                'description' => 'Advanced analytics platform for social media managers. Track engagement, growth metrics, competitor analysis, and generate beautiful reports.',
                'image' => 'projects/analytics.jpg',
                'link' => 'https://analytics.example.com',
            ],
            [
                'title' => 'Fitness Tracker',
                'description' => 'Complete fitness tracking PWA with workout logging, progress charts, nutrition tracking, and community challenges. Progressive Web App.',
                'image' => 'projects/fitness.jpg',
                'link' => 'https://fit.example.com',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

