<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Leave</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Add Employee Leave</h1>
    <form action="{{ route('leaves.store') }}" method="POST" class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <!-- input emp id -->
        <div class="mb-4">
            <label for="employee_id" class="block text-gray-700 text-sm font-bold mb-2">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- start leave -->
        <div class="mb-4">
            <label for="start_leave" class="block text-gray-700 text-sm font-bold mb-2">Start Date:</label>
            <input type="date" id="start_leave" name="start_leave" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <!-- end leave -->
        <div class="mb-4">
            <label for="end_leave" class="block text-gray-700 text-sm font-bold mb-2">End Date:</label>
            <input type="date" id="end_leave" name="end_leave" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        
        <!-- Leave type -->
        <div class="mb-4">
            <label for="leave_type" class="block text-gray-700 text-sm font-bold mb-2">Leave Type:</label>
            <select name="leave_type" id="leave_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value=""></option>
                <option value="Vacation">Vacation</option>
                <option value="Sick">Sick</option>
                <option value="Maternity">Maternity</option>
                <option value="Paternity">Paternity</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            <a href="{{ route('employees.index') }}" class="text-gray-600 font-bold hover:text-blue-600">Back</a>
        </div>
    </form>
</body>
</html>
