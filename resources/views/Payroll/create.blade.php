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
        <form action="{{ route('payrolls.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
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
