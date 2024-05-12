<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
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
        #blocky{
            color:rgb(226, 226, 226);
            font-family:Nunito;
            font-size:.75em;
            font-weight:900;
        }

        #blocky:hover{
            background-color:#292E37;
            border: 3px #313843 solid;
            border-radius:10px;
        }
    </style>
</head>
<body>
      <!-- Sidebar -->
      <nav class="bg-gray-800 text-white w-64 py-6 px-4 fixed top-0 left-0 h-full" style="background-color:#21262D;  color:rgb(226, 226, 226); justify-content:center;  min-width:15vw">
        <div class="flex items-center mb-8" style="justify-content:center; text-align:center; border: 3px rgb(75, 78, 82) solid; background-color:#292E37; padding:2vh; border-radius:10px; margin-top:4vh; margin-bottom:6vh; ">
            <a href="#" class="text-2xl font-bold" style=" text-align:center; font-family:Inter; font-size:2em; font-weight:bold">E.D.P</a>
        </div>
        <ul class="space-y-4"  >
        <li><a href="{{ route('employees.create') }}" id="blocky" class=" block hover:bg-black text-white font-bold py-2 px-2" >Add New Employee</a></li>
        <li><a href="{{ route('employees.details') }}" id="blocky"class="block hover:bg-black text-white font-bold py-2 px-2">View Employee</a></li>
        <li><a href="{{ route('leaves.create') }}" id="blocky"class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Request</a></li>
        <li><a href="{{ route('leaves.index') }}" id="blocky"class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Status</a></li>
        <li><a href="{{ route('signatories.create') }}" id="blocky"class="block hover:bg-black text-white font-bold py-2 px-2">Add Signatories</a></li>
        <li><a href="{{ route('signatories.index') }}" id="blocky"class="block hover:bg-black text-white font-bold py-2 px-2">View Signatories</a></li>
        <li><a href="{{ route('payroll.index') }}"id="blocky" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Payroll</a></li>
    </ul>
    </nav>
    <div class="my-5">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold mb-3">Edit Employee</h1>
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="emp_num" class="block text-sm font-medium text-gray-700">Employee Number:</label>
                    <input type="text" id="emp_num" name="emp_num" value="{{ $employee->emp_num }}" readonly class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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


                <!-- Designation Drop Down Bar -->
                <div class="mb-4">
                    <label for="designation_id" class="block text-sm font-medium text-gray-700">Designation:</label>
                    <select name="designation_id" id="designation_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Select Designation</option>
                        @foreach($designations as $designation)
                            <option value="{{ $designation->id }}" {{ $employee->designation_id == $designation->id ? 'selected' : '' }}>{{ $designation->designation_name }}</option>
                        @endforeach
                    </select>
                </div>  

                <!-- Department Drown Down Bar -->
                <div class="mb-4">
                <label for="department_id" class="block text-sm font-medium text-gray-700">Department:</label>
                <select name="department_id" id="department_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>{{ $department->department_name }}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Employee</button>
            </form>
        </div>
    </div>
</body>
</html>
