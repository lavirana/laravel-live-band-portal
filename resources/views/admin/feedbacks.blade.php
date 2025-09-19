<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Feedbacks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-6">User Feedbacks</h1>

<table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Feedback</th>
            <th class="px-4 py-2">Submitted At</th>
        </tr>
    </thead>
    <tbody>
        @forelse($feedbacks as $fb)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $fb->id }}</td>
            <td class="px-4 py-2">{{ $fb->name ?? 'N/A' }}</td>
            <td class="px-4 py-2">{{ $fb->feedback }}</td>
            <td class="px-4 py-2">{{ $fb->created_at->format('d-m-Y H:i') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="px-4 py-2 text-center">No feedback found</td>
        </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
