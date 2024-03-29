<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Signatories</title>
    <!-- Link to Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        /* Add your custom styles here */
        /* Example: */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .signatory-card {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .signatory-card h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .signatory-card p {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">View Signatories</h1>
        <!-- Display list of signatories -->
        @foreach ($signatories as $signatory)
        <div class="signatory-card">
            <h2>{{ $signatory->name }}</h2>
            <p><strong>Employee ID:</strong> {{ $signatory->employee_id }}</p>
            <p><strong>Higher Superior:</strong> {{ $signatory->highersuperior }}</p>
            <p><strong>Status:</strong> {{ $signatory->status }}</p>
            <!-- Add more signatory details here -->
        </div>
        @endforeach
        <!-- Back button -->
        <a href="{{ route('employees.index') }}" class="block mt-4 text-blue-600 hover:underline">Back to Home</a>
    </div>
</body>
</html>
