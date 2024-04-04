<!-- resources/views/employee_details.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
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
            font-family: 'IBM Plex Mono', monospace;
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

<body class="font-sans antialiased">
    <div class="my-5">
        <div class="container mx-auto">
            <div class="col-start-2 my-[2.36rem] mx-[3rem] col-span-4 bg-[#FFFFFF] py-[2.81rem] px-[2.84rem] mt-[2.38rem]" style="background-size: contain;">
                <div>
                    <div class="grid gap-5">

                        <h1 class="text-[1.875rem] uppercase font-bold ibm-plex-mono" style="color: black; text-shadow: 0 0 2px #888888;">Search Employee Details</h1>
                        <form action="{{ route('employees.details') }}" method="GET" class="mb-4">
                            @csrf
                            <input type="text" id="employee_id" name="employee_id" class="border border-black rounded-md pl-5 w-[42.9375rem] py-4 px-2 leading-tight bg-gray-200 focus:outline-none searchBarPlaceHolder" placeholder="Employee ID" required>
                            <button type="submit" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                                    <path fill="#616161" d="M34.6 28.1H38.6V45.1H34.6z" transform="rotate(-45.001 36.586 36.587)"></path><path fill="#616161" d="M20 4A16 16 0 1 0 20 36A16 16 0 1 0 20 4Z"></path><path fill="#37474F" d="M36.2 32.1H40.2V44.400000000000006H36.2z" transform="rotate(-45.001 38.24 38.24)"></path><path fill="#64B5F6" d="M20 7A13 13 0 1 0 20 33A13 13 0 1 0 20 7Z"></path><path fill="#BBDEFB" d="M26.9,14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2,1.2-6.9,3.2c-0.4,0.4-0.3,1.1,0.1,1.4c0.4,0.4,1.1,0.3,1.4-0.1C16,13.9,17.9,13,20,13s4,0.9,5.4,2.5c0.2,0.2,0.5,0.4,0.8,0.4c0.2,0,0.5-0.1,0.6-0.2C27.2,15.3,27.2,14.6,26.9,14.2z"></path>
                                </svg>
                            </button>
                        </form>

                        <div class="flex flex-col gap-4">
                            <div class="flex space-x-4">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                                    <table class="w-full text-sm text-left rtl:text-right text-blue-black dark:text-blue-100">
                                        <thead class="text-xs text-white bg-black border-b border-blue-400 dark:text-white">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    ID
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Employee Number
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    First Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Middle Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Last Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Address Line
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Barangay
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Province
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Country
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Zip Cope
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Designation
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Department
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @if(isset($employee))
                                            <tr class="text-black" style="text-transform: capitalize;">
                                                <td scope="col" class="px-6 py-3">{{ $employee->id }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->emp_num }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->firstname }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->middlename ?? '-' }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->lastname }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->address_line }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->brgy }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->province }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->country }}</td>
                                                <td scope="col" class="px-6 py-3">{{ $employee->zipcode }}</td>
                                                <td scope="col" class="px-6 py-3">
                                                    @if ($employee->assignDesignation)
                                                        {{ $employee->assignDesignation->designation->designation_name }} ({{ $employee->assignDesignation->employee_type }})
                                                    @else
                                                        No Designation Assigned
                                                    @endif
                                                </td>
                                                <!-- Check if assignDesignation relationship exists and display department -->
                                                <td scope="col" class="px-6 py-3">
                                                    @if ($employee->assignDesignation)
                                                        {{ $employee->assignDesignation->designation->department->department_name }}
                                                    @else
                                                        No Department Assigned
                                                    @endif
                                                </td>
                                                <!-- Check if assignDesignation relationship exists and display department status -->
                                                <td scope="col" class="px-6 py-3">
                                                    @if ($employee->assignDesignation)
                                                        {{ $employee->assignDesignation->designation->department->status }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            @else
                                            <p>Employee details not found.</p>
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-row justify-start gap-2.5 mt-[2.12rem]">
                        <a href="{{ route('employees.index') }}" class="buttonFormat border rounded-md border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-3 px-3 text-sm">BACK TO EMPLOYEE LIST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>
