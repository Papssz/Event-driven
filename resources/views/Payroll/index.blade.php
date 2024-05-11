<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-gray-800 {
            background-color: #1a202c;
        }
        .text-white {
            color: #ffffff;
        }
        .w-64 {
            width: 16rem;
        }
        .py-6 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .fixed {
            position: fixed;
        }
        .top-0 {
            top: 0;
        }
        .left-0 {
            left: 0;
        }
        .h-full {
            height: 100%;
        }
        .flex {
            display: flex;
        }
        .items-center {
            align-items: center;
        }
        .mb-8 {
            margin-bottom: 2rem;
        }
        .text-2xl {
            font-size: 1.5rem;
        }
        .font-bold {
            font-weight: 700;
        }
        .block {
            display: block;
        }
        .hover\:bg-black:hover {
            background-color: #000000;
        }
        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .mt-5 {
            margin-top: 1.25rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
        .thead-dark {
            color: #ffffff;
            background-color: #343a40;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn-info {
            color: #ffffff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            color: #ffffff;
            background-color: #138496;
            border-color: #117a8b;
        }
    </style>
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
                            <a href="#" class="btn btn-info">View Payslip</a>
                            <form action="{{ route('payroll.destroy', $payroll->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this payroll?')">Delete</button>
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
