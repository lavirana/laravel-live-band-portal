<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🎵 Song Requests & Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-purple-900 text-white p-8">

    <!-- Page Title -->
    <h1 class="text-4xl font-extrabold text-center text-pink-400 mb-10">
        🎶 All Song Requests
    </h1>

    <!-- Navigation Links -->
    <div class="flex justify-center space-x-6 mb-10">
        <a href="/" class="bg-pink-500 hover:bg-pink-600 px-5 py-2 rounded-lg font-semibold shadow-lg transition">
            ➕ Add Song
        </a>
        <a href="/feedback" class="bg-yellow-500 hover:bg-yellow-600 px-5 py-2 rounded-lg font-semibold shadow-lg transition">
            💬 Add Feedback
        </a>
    </div>

    <!-- Song List -->
    <div class="max-w-4xl mx-auto space-y-6">
        @forelse($songs as $song)
            <div class="bg-gray-800 rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-pink-300">
                    {{ $song->song_title }}
                </h2>
                <p class="text-gray-400">Requested by: <span class="text-white">{{ $song->name }}</span></p>
                @if($song->message)
                    <p class="mt-2 italic">"{{ $song->message }}"</p>
                @endif

                <!-- Feedback Count + Link -->
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-gray-300">
                        {{ $song->feedbacks->count() }} Feedback(s)
                    </span>
                    <a href="{{ url('/song/'.$song->id) }}"
                       class="text-yellow-400 hover:underline font-semibold">
                        View Feedback
                    </a>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-400">No songs have been requested yet.</p>
        @endforelse
    </div>

</body>
</html>
