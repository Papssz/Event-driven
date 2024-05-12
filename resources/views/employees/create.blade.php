<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
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

        input#emp_num {
            background-color: #f3f4f6;
            cursor: not-allowed;
        }

        /* Navbar CSS */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 15rem; /* Adjust width as needed */
            background-color: #4a5568; /* Adjust background color */
            padding: 1rem;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 1rem;
        }

        nav ul li a {
            display: block;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
        }

        nav ul li a:hover {
            background-color: #2d3748; /* Adjust hover background color */
        }
    </style>
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
    <div class="my-5">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold mb-3">Add Employee</h1>
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="emp_num" class="block text-sm font-medium text-gray-700">Employee Number:</label>
                    <input type="text" id="emp_num" name="emp_num" value="{{ session('randomEmpNum') }}" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">First Name:</label>
                    <input type="text" id="firstname" name="firstname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="middlename" class="block text-sm font-medium text-gray-700">Middle Name:</label>
                    <input type="text" id="middlename" name="middlename" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="address_line" class="block text-sm font-medium text-gray-700">Address Line:</label>
                    <input type="text" id="address_line" name="address_line" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="brgy" class="block text-sm font-medium text-gray-700">Barangay:</label>
                    <input type="text" id="brgy" name="brgy" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="province" class="block text-sm font-medium text-gray-700">Province:</label>
                    <input type="text" id="province" name="province" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country:</label>
                    <input type="text" id="country" name="country" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="zipcode" class="block text-sm font-medium text-gray-700">Zip Code:</label>
                    <input type="text" id="zipcode" name="zipcode" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="sss_no" class="block text-sm font-medium text-gray-700">SSS No:</label>
                    <input type="text" id="sss_no" name="sss_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="philhealth_no" class="block text-sm font-medium text-gray-700">Philhealth No:</label>
                    <input type="text" id="philhealth_no" name="philhealth_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="tin_no" class="block text-sm font-medium text-gray-700">Tin No:</label>
                    <input type="text" id="tin_no" name="tin_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="employment_start_date" class="block text-sm font-medium text-gray-700">employment Start Date:</label>
                    <input type="date" id="employment_start_date" name="employment_start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Employee</button>
            </form>
        </div>
    </div>
</body>
</html>
