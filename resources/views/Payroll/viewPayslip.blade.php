<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

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

        .cabin {
            font-family: "Cabin", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .cabin-sketch-regular {
            font-family: "Cabin Sketch", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .cabin-sketch-bold {
            font-family: "Cabin Sketch", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        h1 {
            font-family: 'Grand Hotel', cursive;
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
<body>
    
    <!-- Canvas -->
    <div class="grid grid-cols-5 bg-[#FFFFFF] grid-row-4">

        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 py-6 px-4 fixed top-0 left-0 h-full" style="background-color:#15151D;  color:rgb(226, 226, 226); justify-content:center;  min-width:15vw">
            <div class="flex items-center mb-8" style="justify-content:center; text-align:center; border: 3px rgb(75, 78, 82) solid; background-color:#292E37; padding:2vh; border-radius:10px; margin-top:4vh; margin-bottom:6vh; ">
                <a href="#" class="uppercase text-xl font-bold cabin-sketch-bold" style=" text-align:center; font-weight:bold">Employee Manager</a>
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
        </div>

        <!-- Main Content -->
        <div class="col-start-2 my-[2.36rem] mx-[3rem] col-span-4 bg-[#FFFFFF] py-[2.81rem] px-[2.84rem] mt-[2.38rem]" style="background-size: contain;">
            <div>
                <h1 class="text-2xl uppercase font-bold cabin" style="color: black;">Payslip for {{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</h1>
                <div class="grid gap-5">

                    <div></div>

                    <div class="flex flex-col gap-4">
                        <div class="flex space-x-4">
                            <div class="flex flex-row border-black border rounded py-4 px-4 w-full leading-tight focus:outline-none focus:border-black relative">
                                <div class="flex items-center">
                                    <!-- <div style="background-color: black; height: 85px; width: 85px; border-radius: 100%;"></div> -->
                                    <div>
                                        <p class="text-left mb-2 font-bold">Personal Information</p>
                                        <p class="text-left mb-2">Employee Name: {{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</p>
                                        <p class="text-left mb-2">SSS no: {{ $employee->sss_no }}</p>
                                        <p class="text-left mb-2">PAG-IBIG no: {{ $employee->pag_ibig }}</p>
                                        <p class="text-left mb-2">Philhealth no: {{ $employee->philhealth_no }}</p>
                                        <p class="text-left mb-6">Tin no: {{ $employee->tin_no }}</p>

                                        <p class="text-left mb-2 font-bold">Employment Information</p>
                                        <p class="text-left mb-2">Payroll Date: {{ date('Y-m-d') }}</p>
                                        <p class="text-left mb-2">Pay Period: {{ $payroll->start_of_cutoff }} to {{ $payroll->end_of_cutoff }}</p>
                                        <p class="text-left mb-2">
                                            Department:  
                                            @if ($employee->assignDesignation)
                                                {{ $employee->assignDesignation->designation->department->department_name }}
                                            @else
                                                No Department Assigned
                                            @endif
                                        </p>
                                        <p class="text-left mb-2">Date of Hire: {{ $employee->employment_start_date }}</p>
                                        <p class="text-left mb-6">Net Hourly Rate @ P52</p>

                                        <p class="text-left mb-2 font-bold">Deductions</p>
                                        <p class="text-left mb-2">Fixed Deduction: ${{ $fixedDeduction }}</p>
                                        <p class="text-left mb-2">Withholding Tax: ${{ $withholdingTax }}</p>
                                        <p class="text-left mb-2">SSS - </p>
                                        <p class="text-left mb-6">Philhealth -</p>

                                        <p class="text-left mb-2 font-bold">Earnings</p>
                                        <p class="text-left mb-6">Total Earnings: ${{ $totalEarnings }}</p>

                                        <p class="text-left mb-2 font-bold">Net Pay</p>
                                        <p class="text-left mb-2">Total Deductions: ${{ $fixedDeduction + $withholdingTax }}</p>
                                        <p class="text-left mb-2">Net Pay: ${{ $netPay }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-start gap-2.5 mt-[1.12rem]">
                            <a href="{{ route('employees.index') }}" class="buttonFormat border rounded-md border-black bg-[#292E37] text-white hover:bg-[#15151D] text-black hover:text-white font-bold py-3 px-4">BACK</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>

</body>
</html>
