<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\SongRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
// FeedbackController.php
public function create() {
    $songs = SongRequest::all(); // needed for dropdown
    return view('feedback.create', compact('songs'));
}

    public function store(Request $request) {
        $request->validate([
            'song_request_id' => 'required|exists:song_requests,id',
            'feedback' => 'required'
        ]);

        Feedback::create($request->only(['song_request_id','name','feedback']));
        return redirect()->back()->with('success', 'Feedback submitted!');
    }
}
