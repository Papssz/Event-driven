<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    
    @vite('resources/css/app.css')
    <style>
        /* Additional CSS for enhanced input styling */
        input[type="text"],
        textarea {
            border: 1px solid #d2d6dc;
            padding: 0.5rem;
            border-radius: 0.25rem;
            transition: border-color 0.3s ease;
            width: 100%;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="my-5">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold mb-3">Edit Employee</h1>
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="emp_num" class="block text-sm font-medium text-gray-700">Employee Number:</label>
                    <input type="text" id="emp_num" name="emp_num" value="{{ $employee->emp_num }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly>
                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">First Name:</label>
                    <input type="text" id="firstname" name="firstname" value="{{ $employee->firstname }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="middlename" class="block text-sm font-medium text-gray-700">Middle Name:</label>
                    <input type="text" id="middlename" name="middlename" value="{{ $employee->middlename }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" value="{{ $employee->lastname }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="address_line" class="block text-sm font-medium text-gray-700">Address Line:</label>
                    <input type="text" id="address_line" name="address_line" value="{{ $employee->address_line }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="brgy" class="block text-sm font-medium text-gray-700">Barangay:</label>
                    <input type="text" id="brgy" name="brgy" value="{{ $employee->brgy }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="province" class="block text-sm font-medium text-gray-700">Province:</label>
                    <input type="text" id="province" name="province" value="{{ $employee->province }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country:</label>
                    <input type="text" id="country" name="country" value="{{ $employee->country }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="zipcode" class="block text-sm font-medium text-gray-700">Zip Code:</label>
                    <input type="text" id="zipcode" name="zipcode" value="{{ $employee->zipcode }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Employee</button>
            </form>
        </div>
    </div>
</body>
</html>
