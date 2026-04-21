<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $articles = [
            [
                'title' => 'Getting Started with Laravel',
                'content' => 'Laravel is a powerful PHP framework that simplifies web development with elegant syntax.',
                'status' => 'published',
                'published_date' => '2024-01-10 10:30:00',
                'author' => 'John Smith',
            ],
            [
                'title' => 'Understanding MVC in Web Development',
                'content' => 'MVC architecture helps separate logic, UI, and data for better code organization.',
                'status' => 'published',
                'published_date' => '2024-02-05 14:15:00',
                'author' => 'Emily Johnson',
            ],
            [
                'title' => 'Why Laravel Factories Are Powerful',
                'content' => 'Factories allow developers to quickly generate fake data for testing applications.',
                'status' => 'published',
                'published_date' => '2024-02-20 09:00:00',
                'author' => 'Michael Brown',
            ],
            [
                'title' => 'Database Relationships in Laravel',
                'content' => 'Laravel supports one-to-one, one-to-many, and many-to-many relationships.',
                'status' => 'published',
                'published_date' => '2024-03-12 09:00:00',
                'author' => 'Sarah Williams',
            ],
            [
                'title' => 'How to Use Seeders in Laravel',
                'content' => 'Seeders help you populate your database with test or default data quickly.',
                'status' => 'published',
                'published_date' => '2024-03-20 16:45:00',
                'author' => 'David Miller',
            ],
            [
                'title' => 'Building REST APIs with Laravel',
                'content' => 'Laravel makes it easy to build secure and scalable REST APIs.',
                'status' => 'published',
                'published_date' => '2024-04-01 11:20:00',
                'author' => 'Chris Anderson',
            ],
            [
                'title' => 'Authentication in Laravel Explained',
                'content' => 'Laravel provides built-in authentication scaffolding for login and registration.',
                'status' => 'published',
                'published_date' => '2024-04-10 10:00:00',
                'author' => 'Jessica Taylor',
            ],
            [
                'title' => 'Working with Eloquent ORM',
                'content' => 'Eloquent ORM makes database interactions simple and expressive.',
                'status' => 'published',
                'published_date' => '2024-04-15 13:10:00',
                'author' => 'Daniel Wilson',
            ],
        ];

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
