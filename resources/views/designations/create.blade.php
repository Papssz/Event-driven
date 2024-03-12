<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Designation</title>
</head>
<body>
    <h1>Add New Designation</h1>

    <!-- Designation creation form -->
    <form action="{{ route('designations.store') }}" method="POST">
        @csrf
        <label for="designation_name">Designation Name:</label>
        <input type="text" id="designation_name" name="designation_name" required><br><br>

        <label for="department_id">Department:</label>
        <select id="department_id" name="department_id" required>
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
        </select><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>

        <button type="submit">Create Designation</button>
    </form>

    <a href="{{ route('designations.index') }}">Back to Designations</a> <!-- Back button -->
</body>
</html>
