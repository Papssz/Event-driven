<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request Status</title>
    @vite('resources/css/app.css')

    <!-- Font Styles via googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Commissioner:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Sarabun&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        .navigation-text {
            font-family: 'Bebas Neue', sans-serif;
        }

        .placeholder-black::placeholder {
            color: black;
        }

        .buttonFormat {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 12px; /* Adjust the font size as needed */
        }

        .searchBarPlaceHolder {
            font-family: 'Roboto', sans-serif;
        }

        .circle {
            width: 40px;
            border-radius: 5rem;
        }

        .labelname {
            font-size: 1.15rem;
            font-family: 'Poppins', monospace;
        }

        .placeholderfont {
            /* color: #F8861E; */
            font-size: 1rem;
            font-family: 'IBM Plex Mono', monospace;
        }

        .sections {
            font-size: 1.5rem;
            font-family: 'Sarabun', sans-serif;
            color: #686576; 
        }

        h1 {
            font-family: 'IBM Plex Mono', monospace;
        }

        h3 {
            color: #686576;
            font-family: 'Castoro', serif;
        }

        input[type=text], input[type=date], input[type=email], input[type=password], textarea {
            background-color: rgba(165, 42, 42, 0);
            color: black;
            font-family: 'Nunito', sans-serif;
        }

        /* input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(46%) sepia(24%) saturate(2944%) hue-rotate(10deg) brightness(91%) contrast(87%);
        }

        input[type="date"]:focus::-webkit-calendar-picker-indicator {
            filter: grayscale(100%);
        } */


        select {
            /* background-color: rgba(165, 42, 42, 0);
            color: #F8861E;
            font-family: 'IBM Plex Mono', monospace;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            padding-right: 20px; adjust the padding to create space for the arrow */
            /* background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='%23F8861E' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right center; */
        }

        .cropA { 
            -webkit-clip-path: polygon(0 , 100% 0%, 80% 100%, 0% 100%);
            /* clip-path: polygon(0 0, 100% 0, 100% 66%, 0% 100%); */
        }

        /* select:focus {
            color: black;
        } */

        /* input[type=text]:focus {
            background-color: #F8861E;
            color: black;
            font-family: 'IBM Plex Mono', monospace;
        }

        input[type=text]::placeholder {
            color: #F8861E;
        }

        input[type=text]:focus::placeholder {
            color: black;
        }

        .form-control:focus {
            box-shadow: 0 0 0 2px #F8861E !important;
            outline: none !important;
        } */

        .selected {
            background-color: #e2e8f0; /* Change this to your desired background color */
        }

    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<nav class="bg-gray-800 text-white w-64 py-6 px-4 fixed top-0 left-0 h-full">
        <div class="flex items-center mb-8">
            <a href="#" class="text-2xl font-bold">Employee Management</a>
        </div>
        <ul class="space-y-4">
            <li>
                <a href="{{ route('employees.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Add New Employee</a>
            </li>
            <li>
                <a href="{{ route('employees.details') }}" class="block hover:bg-black text-white font-bold py-2 px-2">View Employee</a>
            </li>
            <li>
                <a href="{{ route('leaves.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Request</a>
            </li>
            <li>
                <a href="{{ route('leaves.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Leave Status</a>
            </li>
            <li>
                <a href="{{ route('signatories.create') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Add Signatories</a>
            </li>
            <li>
                <a href="{{ route('signatories.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">View Signatories</a>
            </li>
            <li>
                <a href="{{ route('leaves.index') }}" class="block hover:bg-black text-white font-bold py-2 px-2">Employee Payroll</a>
            </li>
        </ul>
    </nav>
    <div class="flex justify-center items-center min-h-screen">
        <div class="max-w-md bg-white shadow-md rounded px-8 py-6">
            <h1 class="text-3xl font-bold mb-6">Leave Request Status</h1>
            <!-- Display leave request status -->
            @foreach ($leaveRequests as $leaveRequest)
            <div class="mb-4">
                <p class="text-gray-800 font-bold">Employee ID: {{ $leaveRequest->employee_id }}</p>
                <p class="text-gray-700">Start Date: {{ $leaveRequest->start_leave }}</p>
                <p class="text-gray-700">End Date: {{ $leaveRequest->end_leave }}</p>
                <p class="text-gray-700">Leave Type: {{ $leaveRequest->leave_type }}</p>
            </div>
            @endforeach
            <a href="{{ route('employees.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
        </div>
    </div>
</body>
</html>
