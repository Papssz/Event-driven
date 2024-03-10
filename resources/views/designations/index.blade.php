<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designations</title>
    <!-- Include any CSS files or frameworks here -->
</head>
<body>
    <h1>Designations</h1>
    <a href="/designations/create">Add New Designation</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Designation Name</th>
                <th>Department ID</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample data for designations -->
            @foreach($designations as $designation)
            <tr>
                <td>{{ $designation->id }}</td>
                <td>{{ $designation->designation_name }}</td>
                <td>{{ $designation->department_id }}</td>
                <td>{{ $designation->status }}</td>
                <td>
                    <a href="/designations/{{ $designation->id }}/edit">Edit</a>
                    <form action="/designations/{{ $designation->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Assign Designation Form -->
    <h2>Assign Designation to Employee</h2>
    <form action="/assign-designation" method="POST">
        @csrf
        <label for="designation_id">Designation ID:</label>
        <select name="designation_id" id="designation_id">
            @foreach($designations as $designation)
            <option value="{{ $designation->id }}">{{ $designation->id }} - {{ $designation->designation_name }}</option>
            @endforeach
        </select>
        <!-- Other form fields -->
        <button type="submit">Assign Designation</button>
    </form>
</body>
</html>
