<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Payslip for {{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</h2>

        <!-- 1st Group: Personal Information -->
        <div class="mb-4">
            <h4>Personal Information</h4>
            <p>Employee Name: {{ $employee->firstname }} {{ $employee->middlename }} {{ $employee->lastname }}</p>
            <p>SSS no: {{ $employee->sss_no }}</p>
            <p>Pag-ibig no: {{ $employee->pag_ibig }}</p>
            <p>Philhealth no: {{ $employee->philhealth_no }}</p>
            <p>Tin no: {{ $employee->tin_no }}</p>
        </div>

        <!-- 2nd Group: Employment Information -->
        <div class="mb-4">
            <h4>Employment Information</h4>
            <p>Payroll Date: {{ date('Y-m-d') }}</p>
            <p>Pay Period: {{ $payroll->start_of_cutoff }} to {{ $payroll->end_of_cutoff }}</p>
            <p>Department:  
                @if ($employee->assignDesignation)
                    {{ $employee->assignDesignation->designation->department->department_name }}
                @else
                    No Department Assigned
                @endif
            </p>
            <p>Date of Hire: {{ $employee->employment_start_date }}</p>
            <p>Net Hourly Rate @ P52</p>
        </div>

        <!-- 3rd Group: Deductions -->
        <div class="mb-4">
            <h4>Deductions</h4>
            <p>Fixed Deduction: ${{ $fixedDeduction }}</p>
            <p>Withholding Tax: ${{ $withholdingTax }}</p>
            <p>SSS -</p>
            <P>Philhealth -</P>
        </div>

        <!-- 4th Group: Earnings -->
        <div class="mb-4">
            <h4>Earnings</h4>
            <p>Total Earnings: ${{ $totalEarnings }}</p>
        </div>

        <!-- 5th Group: Net Pay -->
        <div class="mb-4">
            <h4>Net Pay</h4>
            <p>Total Deductions: ${{ $fixedDeduction }}</p>
            <p>Net Pay: ${{ $netPay }}</p>
        </div>

        <!-- Back Button -->
        <a href="{{ route('payroll.index') }}" class="btn btn-primary">Back</a>
    </div>
</body>
</html>
