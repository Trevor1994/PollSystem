<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Poll;

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
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

        // Create a new poll using the request data
        $poll = new Poll;

        $poll->title = request('title');

        $poll->body = request('body');

        // Save it to the database
        $poll->save();

        // redirect to the home page
        return redirect('/');
    }

}
