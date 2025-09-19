<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SongRequest;
use App\Models\Feedback;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $song1 = SongRequest::create([
            'name' => 'John',
            'song_title' => 'Shape of You',
            'message' => 'My favorite party song 🎉'
        ]);

        $song2 = SongRequest::create([
            'name' => 'Alice',
            'song_title' => 'Bohemian Rhapsody',
            'message' => 'Classic rock vibes 🎸'
        ]);

        Feedback::create([
            'song_request_id' => $song1->id,
            'name' => 'Mike',
            'feedback' => 'This song is always a hit on stage!'
        ]);

        Feedback::create([
            'song_request_id' => $song2->id,
            'name' => 'Sophia',
            'feedback' => 'Love this song, timeless classic!'
        ]);
    }
}
