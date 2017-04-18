<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller

{
    public function index()

    {
      return view('pages.home');
    }

    public function create()

    {
      return view('pages.create');
    }

    public function store()

    {
        // Create a new post using the request data
        dd(request()->all());

        // Save it to the database

        // And then redirect to the home page
    }

}
