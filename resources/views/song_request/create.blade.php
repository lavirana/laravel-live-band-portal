<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Song Request - Live Band</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
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
        <h1 class="text-4xl text-yellow-400 font-bold mb-6 text-center">🎵 Request a Song</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/request-song" class="space-y-5">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Your Name" required
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div>
                <input type="email" name="email" placeholder="Your Email (Optional)"
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div>
                <input type="text" name="song_title" placeholder="Song Title" required
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div>
                <textarea name="message" placeholder="Message (Optional)" rows="4"
                    class="w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-yellow-400 text-black font-bold p-3 rounded-lg hover:bg-yellow-500 transition-all">
                    Submit Request
                </button>
            </div>
        </form>
        <p class="text-center mt-4 text-white">
    Want to give feedback on songs?  
    <a href="/feedback" class="text-pink-400 hover:underline font-semibold">Click here</a>
</p>

<p class="text-center mt-2 text-white">
    Check all song requests:  
    <a href="/songs" class="text-yellow-400 hover:underline font-semibold">View Songs</a>
</p>


    </div>
</div>
</body>
</html>
