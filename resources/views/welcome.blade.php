<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
    
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-1/2">
        <h1 class="text-2xl mb-4">Create Task</h1>
        <a href="{{ route('tasks.index') }}" class="text-blue-500">Back to Task List</a>
        <form action="{{ route('tasks.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title:</label>
                <input type="text" name="title" id="title" required class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description:</label>
                <textarea name="description" id="description" rows="3" required class="form-textarea mt-1 block w-full"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Task</button>
        </form>
    </div>
</body>
</html>
