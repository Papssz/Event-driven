<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    
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

            <div class="rounded-t bg-[#292E37] mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold uppercase text-white cabin">Edit Employee</h6>
                </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 border border-[#15151D] rounded-b">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <h6 class="text-blueGray-400 text-sm mt-6 mb-6 font-bold uppercase">Employee Number</h6>
                    <div class="mt-3 mb-6"></div>
                    
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/4 px-4">
                            <div class="relative w-full mb-3">
                                <input type="text" id="emp_num" name="emp_num" value="{{ $employee->emp_num }}" readonly class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 text-gray-500">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-6 border-b-1 border-blueGray-300">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">User Information</h6>

                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/3 px-4">
                            <div class="relative w-full mb-3">
                                <label for="firstname" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    First Name
                                </label>
                                <input type="text" id="firstname" name="firstname" value="{{ $employee->firstname }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>
                        
                        <div class="w-full lg:w-1/3 px-4">
                            <div class="relative w-full mb-3">
                                <label for="middlename" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Middle Name
                                </label>
                                <input type="text" id="middlename" name="middlename" value="{{ $employee->middlename }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/3 px-4">
                            <div class="relative w-full mb-3">
                                <label for="lastname" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Last Name
                                </label>
                                <input type="text" id="lastname" name="lastname" value="{{ $employee->lastname }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-6 border-b-1 border-blueGray-300">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Contact Information</h6>

                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                                <label for="address_line" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Address
                                </label>
                                <input type="text" id="address_line" name="address_line" value="{{ $employee->address_line }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="brgy" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Barangay
                                </label>
                                <input type="text" id="brgy" name="brgy" value="{{ $employee->brgy }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="province" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Province
                                </label>
                                <input type="text" id="province" name="province" value="{{ $employee->province }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="country" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Country
                                </label>
                                <input type="text" id="country" name="country" value="{{ $employee->country }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 px-4">
                            <div class="relative w-full mb-3">
                                <label for="zipcode" label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    Zip Code
                                </label>
                                <input type="text" id="zipcode" name="zipcode" value="{{ $employee->zipcode }}" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            </div>
                        </div>
                    </div>

                    <hr class="mt-6 border-b-1 border-blueGray-300">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Designation</h6>

                    <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/4 px-4">
                        <div class="relative w-full mb-3">
                            <select name="designation_id" id="designation_id" class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 text-gray-500">
                                <option value=""></option>
                                @foreach($designations as $designation)
                                    <option value="{{ $designation->id }}" {{ $employee->assignDesignation ? ($employee->assignDesignation->designation_id == $designation->id ? 'selected' : '') : '' }}>{{ $designation->designation_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <hr class="mt-6 border-b-1 border-blueGray-300">
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Department</h6>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/4 px-4">
                        <div class="relative w-full mb-3">
                            <select name="department_id" id="department_id" class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 text-gray-500">
                                <option value=""></option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ $employee->assignDesignation ? ($employee->assignDesignation->designation->department_id == $department->id ? 'selected' : '') : '' }}>{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                    <hr class="mt-6 border-b-1 border-gray-500">

                    <div class="flex flex-row justify-end gap-2.5 mt-[1.12rem]">
                        <button type="submit" class="buttonFormat border rounded-md border-black bg-[#292E37] text-white hover:bg-[#15151D] text-black hover:text-white font-bold py-3 px-5">SUBMIT</button>
                    </div>

                </form>
            </div>

        </div>

    </div>
</body>
</html>
