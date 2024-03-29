<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
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
                    <h1 class="text-[1.875rem] uppercase font-bold ibm-plex-mono" style="color: black; text-shadow: 0 0 2px #888888;">Employee List</h1>
                    <div class="grid gap-5">

                        <div></div>
                        <!-- <div id="selectedEmployeeID"></div> -->

                        <div class="flex flex-col gap-4" >
                            @php
                                $counter = count($employees);
                            @endphp
                            @foreach ($employees as $employee)
                                    <div class="flex space-x-4" onclick="selectedID(this, '{{ $employee->id }}')">
                                    <div class="flex flex-row border-black border rounded py-4 px-4 w-full leading-tight focus:outline-none focus:border-black relative">
                                        <div class="flex items-center">
                                            <!-- <div style="background-color: black; height: 85px; width: 85px; border-radius: 100%;"></div> -->
                                            <div class=>
                                                <p class="text-left mb-2 font-bold">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</p>
                                                <p class="text-left mb-2">ID: {{ $employee->id }}</p>
                                                <p class="text-left mb-2">Employment Number: {{ $employee->emp_num }}</p>
                                                <p class="text-left mb-2">Address Line: {{ $employee->address_line }}</p>
                                                <p class="text-left mb-2">Barangay: {{ $employee->brgy }}</p>
                                                <p class="text-left mb-2">Province: {{ $employee->province }}</p>
                                                <p class="text-left mb-2">Country: {{ $employee->country }}</p>
                                                <p class="text-left mb-2">Zip Code: {{ $employee->zipcode }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-center items-center">
                                        <a href="{{ route('employees.assign-designation.create', ['emp_num' => $employee->emp_num]) }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-shrink">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="flex flex-col justify-center items-center">
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-shrink">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    </div>

                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="flex flex-col justify-center items-center">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline flex-shrink" onclick=>
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                

                            @endforeach
                        </div>
                    </div>

                    <div class="flex flex-row justify-start gap-2.5 mt-[2.12rem]">
                        <a href="{{ route('employees.create') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">ADD NEW EMPLOYEE</a>
                        <a href="{{ route('employees.details') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">VIEW EMPLOYEE DETAILS</a>
                        <a href="{{ route('leaves.create') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">EMPLOYEE LEAVE REQUEST</a>
                        <a href="{{ route('signatories.create') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">ADD SIGNATORIES</a>
                        <a href="{{ route('signatories.index') }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">VIEW SIGNATORIES</a>
                        <!--<a href="{{ route('employees.assign-designation.create', ['emp_num' => $employee->emp_num]) }}" class="buttonFormat border-2 border-black bg-rgba(165, 42, 42, 0) hover:bg-black text-black hover:text-white font-bold py-4 px-4">ASSIGN DESIGNATION</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        function selectedID(clickedElement, employeeID) {

            var allCards = document.querySelectorAll('.flex.space-x-4');
            allCards.forEach(function(card) {
                if (card !== clickedElement) {
                    card.classList.remove('selected');
                }
            });

            // clickedElement.classList.toggle('selected');

            var assignDesignation = document.querySelector('a[href*="edit-detainee"]');
            if (assignDesignation) {
                assignDesignation.href = employeeID ? editButton.href.replace('detainee_id_placeholder', detaineeId) : 'javascript:void(0);';
            }

            var selectedEmployeeIdBox = document.getElementById('selectedEmployeeID');
            selectedEmployeeIdBox.textContent = employeeID ? 'Selected Employee ID: ' + employeeID : 'No Employee Selected'; // For Checking lang if nakuha yung ID

        }
    </script> -->
    
</body>
</html>
