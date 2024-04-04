<!-- resources/views/employee_details.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Employee Details</h1>
    <a href="{{ route('employees.index') }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 mb-4">Back to Employee List</a>

    <form action="{{ route('employees.details') }}" method="GET" class="mb-4">
    @csrf
        <label for="employee_id" class="block text-sm font-medium text-gray-700">Enter Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Employee ID" required>
        <button type="submit" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">View Details</button>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th>ID</th>
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address Line</th>
                    <th>Barangay</th>
                    <th>Province</th>
                    <th>Country</th>
                    <th>Zip Code</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @if(isset($employee))
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->emp_num }}</td>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->middlename ?? '-' }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->address_line }}</td>
                    <td>{{ $employee->brgy }}</td>
                    <td>{{ $employee->province }}</td>
                    <td>{{ $employee->country }}</td>
                    <td>{{ $employee->zipcode }}</td>
                    <td>
                        @if ($employee->assignDesignation)
                            {{ $employee->assignDesignation->designation->designation_name }} ({{ $employee->assignDesignation->employee_type }})
                        @else
                            No Designation Assigned
                        @endif
                    </td>
                    <!-- Check if assignDesignation relationship exists and display department -->
                    <td>
                        @if ($employee->assignDesignation)
                            {{ $employee->assignDesignation->designation->department->department_name }}
                        @else
                            No Department Assigned
                        @endif
                    </td>
                    <!-- Check if assignDesignation relationship exists and display department status -->
                    <td>
                        @if ($employee->assignDesignation)
                            {{ $employee->assignDesignation->designation->department->status }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
                @else
                <p>Employee details not found.</p>
                @endisset
            </tbody>
        </table>
    </div>
</body>
</html>
