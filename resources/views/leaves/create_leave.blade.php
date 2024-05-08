<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Leave</title>
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
<body class="bg-gray-100 p-6">
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
    <!-- Canvas -->
    <div class="flex bg-[#f0f2f5] justify-center">

        <!-- Add Employee Leave -->
        <div class="col-start-2 my-[2.36rem] mx-[3rem] col-span-4 bg-[#FFFFFF] py-[2.81rem] px-[2.84rem] mt-[2.38rem]" style="background-image: url('logos/background-with-grid-bw.png'); background-size: contain;">
            <div>
                <h1 class="text-[1.875rem] uppercase font-bold ibm-plex-mono" style="color: black; text-shadow: 0 0 2px #888888;">ADD EMPLOYEE LEAVE</h1>
                <hr class="mt-[1.94rem] mb-[2.31rem]"/>
                <div class="grid gap-5">

                    @if(Session::has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif

                    <form action="{{ route('leaves.store') }}" method="POST">
                        @csrf

                        <!-- input emp id -->
                        <div class="mb-4">
                            <label for="employee_id" class="labelname block text-gray-700 text-sm font-semibold mb-2">Employee ID:</label>
                            <input type="text" id="employee_id" name="employee_id" class="form-control text-black border border-black rounded w-full py-3 px-3 input[type=text] text-base leading-tight focus:outline-none focus:border-black">
                        </div>

                        <!-- start leave -->
                        <div class="mb-4">
                            <label for="start_leave" class="labelname block text-gray-700 text-sm font-semibold mb-2">Start Date:</label>
                            <input type="date" id="start_leave" name="start_leave" class="form-control text-black border border-black rounded w-full py-3 px-3 input[type=text] text-base leading-tight focus:outline-none focus:border-black">
                        </div>

                        <!-- end leave -->
                        <div class="mb-4">
                            <label for="end_leave" class="labelname block text-gray-700 text-sm font-semibold mb-2">End Date:</label>
                            <input type="date" id="end_leave" name="end_leave" class="form-control text-black border border-black rounded w-full py-3 px-3 input[type=text] text-base leading-tight focus:outline-none focus:border-black">
                        </div>
                        
                        <!-- Leave type -->
                        <div class="mb-4">
                            <label for="leave_type" class="labelname block text-gray-700 text-sm font-semibold mb-2">Leave Type:</label>
                            <select name="leave_type" id="leave_type" class="form-control text-black border border-black rounded w-full py-3 px-3 input[type=text] text-base leading-tight focus:outline-none focus:border-black">
                                <option value=""></option>
                                <option value="Vacation">Vacation</option>
                                <option value="Sick">Sick</option>
                                <option value="Maternity">Maternity</option>
                                <option value="Paternity">Paternity</option>
                            </select>
                        </div>
                                        
                        <!-- Submit -->
                        <div class="flex flex-row justify-start gap-2.5 mt-[1.12rem]">
                            <button type="submit" class="buttonFormat border rounded-md border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-3 px-3">SUBMIT</button>
                            <a href="{{ route('employees.index') }}" class="buttonFormat border rounded-md border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-3 px-3">BACK</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
