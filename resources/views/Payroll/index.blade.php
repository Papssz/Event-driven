<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

    </style>

    <script src="https://cdn.tailwindcss.com"></script>
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
    <div class="container mt-5">
        <h2 class="mb-4">Payroll List</h2>
        <a href="{{ route('payroll.create') }}" class="btn btn-info mb-3">Add Payroll</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Start of Cutoff</th>
                    <th>End of Cutoff</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payrolls as $payroll)
                    <tr>
                        <td>{{ $payroll->employee_id }}</td>
                        <td>
                            @php
                                $employee = \App\Models\Employee::find($payroll->employee_id);
                                if ($employee) {
                                    echo $employee->firstname . ' ' . $employee->middlename . ' ' . $employee->lastname;
                                } else {
                                    echo 'Employee not found';
                                }
                            @endphp
                        </td>
                        <td>{{ $payroll->start_of_cutoff }}</td>
                        <td>{{ $payroll->end_of_cutoff }}</td>
                        <td>
                            <a href="{{ route('payroll.viewPayslip', $payroll->id) }}" class="btn btn-info">View Payslip</a>
                            <form action="{{ route('payroll.destroy', $payroll->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-black" onclick="return confirm('Are you sure you want to delete this payroll?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-3 text-black">No payroll records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
