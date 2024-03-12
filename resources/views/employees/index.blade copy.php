<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="my-5">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold mb-3">Employee List</h1>
            <a href="{{ route('employees.create') }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 mb-4">Add New Employee</a>
            <a href="{{ route('employees.details', ['id' => $employees->first()->id]) }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 mb-4">View Employee</a>
            <a href="{{ route('departments.create') }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 mb-4">Add New Department</a>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee Number</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Middle Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address Line</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barangay</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Province</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Country</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Zip Code</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>

                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assign Designation</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($employees as $employee)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->emp_num }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->firstname }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->middlename }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->lastname }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->address_line }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->brgy }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->province }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->country }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $employee->zipcode }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('employees.assign-designation.create', ['emp_num' => $employee->emp_num]) }}" class="text-green-600 hover:text-green-900">Assign Designation</a>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
