<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback - Live Band</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            background-color: rgba(0,0,0,0.7);
            min-height: 100vh;
        }
    </style>
</head>
<body>
<div class="overlay flex items-center justify-center">
    <div class="bg-black bg-opacity-70 p-10 rounded-3xl shadow-xl w-full max-w-lg">
        <h1 class="text-4xl text-pink-500 font-bold mb-6 text-center">💌 Give Feedback</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/feedback" class="space-y-5">
            @csrf
            <div>
            <select name="song_request_id" required
    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
    <option value="">-- Select Song --</option>
    @foreach($songs as $song)
        <option value="{{ $song->id }}">{{ $song->song_title }} by {{ $song->name }}</option>
    @endforeach
</select>

            </div>
            <div>
                <input type="text" name="name" placeholder="Your Name (Optional)"
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500">
            </div>
            <div>
                <textarea name="feedback" placeholder="Your Feedback" rows="5" required
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-pink-500 text-white font-bold p-3 rounded-lg hover:bg-pink-600 transition-all">
                    Submit Feedback
                </button>
            </div>
        </form>

        <p class="text-center mt-4 text-white">
    Want to request a song?  
    <a href="/" class="text-yellow-400 hover:underline font-semibold">Submit Song</a>
</p>

<p class="text-center mt-2 text-white">
    See all song requests with feedback:  
    <a href="/songs" class="text-pink-400 hover:underline font-semibold">View Songs</a>
</p>

    </div>
</div>
</body>
</html>
