<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Signatories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Add Signatories</h1>
        <form action="{{ route('signatories.store') }}" method="POST" class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- employee ID -->
            <div class="mb-4">
                <label for="employee_id" class="block text-gray-700 text-sm font-bold mb-2">Employee ID:</label>
                <input type="text" id="employee_id" name="employee_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Highersuperior -->
            <div class="mb-4">
                <label for="highersuperior" class="block text-gray-700 text-sm font-bold mb-2">Higher Superior:</label>
                <input type="text" id="highersuperior" name="highersuperior" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value=""></option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            
            <!-- submit -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                <a href="{{ route('employees.index') }}" class="text-gray-600 font-bold hover:text-blue-600">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
