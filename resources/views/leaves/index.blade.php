<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request Status</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Leave Request Status</h1>
    <div class="max-w-md bg-white shadow-md rounded px-8 py-6 mb-4">
        <!-- Display leave request status -->
        @foreach ($leaveRequests as $leaveRequest)
        <div class="mb-4">
            <p class="text-gray-800 font-bold">Employee ID: {{ $leaveRequest->employee_id }}</p>
            <p class="text-gray-700">Start Date: {{ $leaveRequest->start_leave }}</p>
            <p class="text-gray-700">End Date: {{ $leaveRequest->end_leave }}</p>
            <p class="text-gray-700">Leave Type: {{ $leaveRequest->leave_type }}</p>
        </div>
        @endforeach
    </div>
    <a href="{{ route('employees.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
</body>
</html>
