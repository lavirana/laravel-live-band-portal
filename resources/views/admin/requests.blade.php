<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Song Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-6">Song Requests</h1>

<table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Song Title</th>
            <th class="px-4 py-2">Message</th>
            <th class="px-4 py-2">Submitted At</th>
        </tr>
    </thead>
    <tbody>
        @forelse($requests as $request)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $request->id }}</td>
            <td class="px-4 py-2">{{ $request->name }}</td>
            <td class="px-4 py-2">{{ $request->email ?? 'N/A' }}</td>
            <td class="px-4 py-2">{{ $request->song_title }}</td>
            <td class="px-4 py-2">{{ $request->message ?? '-' }}</td>
            <td class="px-4 py-2">{{ $request->created_at->format('d-m-Y H:i') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="px-4 py-2 text-center">No requests found</td>
        </tr>
        @endforelse
    </tbody>
</table>
<p class="text-center mt-4 text-white">
    Want to give feedback? 
    <a href="/feedback" class="text-pink-400 hover:underline font-semibold">Click here</a>
</p>

</body>
</html>
