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
                    <th>Designation (Employee Type)</th>
                    <th>Department (Department Name)</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->emp_num }}</td>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->middlename }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->address_line }}</td>
                    <td>{{ $employee->brgy }}</td>
                    <td>{{ $employee->province }}</td>
                    <td>{{ $employee->country }}</td>
                    <td>{{ $employee->zipcode }}</td>
                    <!-- Access the assignDesignation relationship instead -->
                    <td>
                        @if ($employee->assignDesignation)
                            {{ $employee->assignDesignation->designation->designation_name }} ({{ $employee->assignDesignation->employee_type }})
                        @else
                            No Designation Assigned
                        @endif
                    </td>
                    <td>
                        @if ($employee->assignDesignation)
                            {{ $employee->assignDesignation->designation->department->department_name }}
                        @else
                            No Department Assigned
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
