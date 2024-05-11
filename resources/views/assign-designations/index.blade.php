<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Designations</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-gray-800 text-white w-64 py-6 px-4 fixed top-0 left-0 h-full">
        <div class="flex items-center mb-8">
            <a href="#" class="text-2xl font-bold">Employee Management</a>
        </div>
        <ul class="space-y-4">
        <li><a href="{{ route('employees.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Add New Employee</a></li>
        <li><a href="{{ route('employees.details') }}" class="block hover:bg-black text-white font-bold py-2 px-2">View Employee</a></li>
        <li><a href="{{ route('leaves.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Request</a></li>
        <li><a href="{{ route('leaves.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Status</a></li>
        <li><a href="{{ route('signatories.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Add Signatories</a></li>
        <li><a href="{{ route('signatories.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">View Signatories</a></li>
        <li><a href="{{ route('payroll.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Payroll</a></li>
    </ul>
    </nav>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Employee Number
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Designation ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Employee Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Loop through assignDesignations and display each row -->
                        @foreach($assignDesignations as $assignDesignation)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $assignDesignation->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $assignDesignation->emp_num }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $assignDesignation->designation_id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $assignDesignation->employee_type }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $assignDesignation->status }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <!-- Edit Link -->
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
