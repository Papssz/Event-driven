<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <!-- Include any CSS files or frameworks here -->
</head>
<body>
    <h1>Departments</h1>
    <a href="/departments/create">Add New Department</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through the departments and display each one -->
            <!-- Example: -->
            <tr>
                <td>1</td>
                <td>Finance</td>
                <td>Active</td>
                <td>
                    <a href="/departments/1/edit">Edit</a>
                    <form action="/departments/1" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
