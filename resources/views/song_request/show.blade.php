<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🎵 Song Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-tr from-black via-purple-900 to-gray-900 text-white p-8">

    <!-- Back & Navigation -->
    <div class="flex justify-between items-center mb-8">
        <a href="/songs" class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-lg shadow-md">
            ⬅ Back to Songs
        </a>
        <div class="space-x-4">
            <a href="/" class="bg-pink-500 hover:bg-pink-600 px-4 py-2 rounded-lg shadow-md">➕ Add Song</a>
            <a href="/feedback" class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg shadow-md">💬 Add Feedback</a>
        </div>
    </div>

    <!-- Song Details -->
    <div class="max-w-3xl mx-auto bg-gray-800 rounded-2xl shadow-lg p-8 text-center">
        <h1 class="text-4xl font-extrabold text-pink-400 mb-4">
            🎶 {{ $song->song_title }}
        </h1>
        <p class="text-gray-300 text-lg">
            Requested by <span class="font-semibold text-white">{{ $song->name }}</span>
        </p>
        @if($song->message)
            <p class="mt-3 italic text-yellow-300">"{{ $song->message }}"</p>
        @endif
    </div>

    <!-- Feedback Section -->
    <div class="max-w-4xl mx-auto mt-10">
        <h2 class="text-2xl font-bold text-yellow-400 mb-6">💬 Feedback</h2>

        @forelse($song->feedbacks as $feedback)
            <div class="bg-gray-700 rounded-xl p-5 mb-4 shadow-md">
                <p class="text-lg text-white">"{{ $feedback->message }}"</p>
                <p class="text-sm text-gray-400 mt-2">— {{ $feedback->name }}</p>
            </div>
        @empty
            <p class="text-gray-400 italic">No feedback yet for this song. Be the first!</p>
        @endforelse
    </div>

</body>
</html>
