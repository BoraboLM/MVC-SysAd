<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

    
    </style>
<body >
    <h1>Edit Task</h1>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
    <div class="form-container">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required>{{ $task->description }}</textarea>
            <br>
            <button type="submit">Update Task</button>
        </form>
    </div>
</body>
</html>
