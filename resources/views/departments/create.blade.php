<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Add Department</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <label for="department_name">Department Name:</label><br>
        <input type="text" id="department_name" name="department_name"><br>
        
        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        
        <button type="submit">Add Department</button>
    </form>
    <div style="margin-top: 20px;">
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">View Department List</a> <!-- Button to view department list -->
    </div>

    <div style="margin-top: 10px;">
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a> <!-- Back button -->
    </div>
</body>
</html>
