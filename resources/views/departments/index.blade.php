<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Departments</title>
</head>
<body>
    <h1>List of Departments</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->department_name }}</td>
                <td>{{ $department->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>
    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> <!-- Back button -->
</body>
</html>
