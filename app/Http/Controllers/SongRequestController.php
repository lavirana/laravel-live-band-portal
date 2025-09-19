<?php

namespace App\Http\Controllers;

use App\Models\SongRequest;
use Illuminate\Http\Request;

class SongRequestController extends Controller
{
    public function index() {
        // Admin: list all song requests
        $requests = SongRequest::with('feedbacks')->latest()->get();
        return view('admin.requests', compact('requests'));
    }

    public function create() {
        // Public form to submit a song
        return view('song_request.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'song_title' => 'required'
        ]);

        SongRequest::create($request->only(['name','email','song_title','message']));
        return redirect()->back()->with('success', 'Song request submitted!');
    }

    public function show($id) {
        // Show single song request with feedbacks
        $song = SongRequest::with('feedbacks')->findOrFail($id);
        return view('song_request.show', compact('song'));
    }
    public function list() {
        $songs = SongRequest::with('feedbacks')->latest()->get();
        return view('song_request.list', compact('songs'));
    }
    
}

