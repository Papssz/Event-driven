<!-- resources/views/payrolls/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Generate Payroll</h2>
        <form action="{{ route('payroll.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="employee_id" class="labelname block text-gray-700 text-sm font-semibold mb-2">Employee Name:</label>
                <select id="employee_id" name="employee_id" class="form-control" required>
                    <option value=""></option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_of_cutoff">Start of Cutoff:</label>
                <input type="date" class="form-control" id="start_of_cutoff" name="start_of_cutoff" required>
            </div>
            <div class="form-group">
                <label for="end_of_cutoff">End of Cutoff:</label>
                <input type="date" class="form-control" id="end_of_cutoff" name="end_of_cutoff" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Payroll</button>
        </form>
    </div>
</body>
</html>
