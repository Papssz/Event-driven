<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Designation</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-6">Assign Designation to Employee Number: {{ $emp_num }}</h1>
        
        <form action="{{ route('assign-designations.store', $emp_num) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            
            <!-- Designation ID Dropdown -->
            <!-- Designation ID Dropdown -->
            <div class="mb-4">
                <label for="designation_id" class="block text-gray-700 text-sm font-bold mb-2">Designation:</label>
                <select name="designation_id" id="designation_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($designations as $designation)
                        <option value="{{ $designation->id }}">{{ $designation->id }} - {{ $designation->designation_name }}</option>
                    @endforeach
                </select>
            </div>


            
            <!-- Employee Type Dropdown -->
            <div class="mb-4">
                <label for="employee_type" class="block text-gray-700 text-sm font-bold mb-2">Employee Type:</label>
                <select name="employee_type" id="employee_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="R">Regular (R)</option>
                    <option value="PT">Part-Time (PT)</option>
                    <option value="PB">Probationary (PB)</option>
                    <option value="D">Daily (D)</option>
                </select>
            </div>
            
            <!-- Status Dropdown -->
            <div class="mb-4">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                <select name="status" id="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="active">Active</option>
                    <option value="resigned">Resigned</option>
                    <option value="AWOL">AWOL</option>
                </select>
            </div>
            
            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Assign Designation</button>
            </div>
        </form>
    </div>
</body>
</html>
