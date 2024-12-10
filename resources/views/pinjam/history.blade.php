<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
/* Apply Poppins font */
body, html {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #529277, #ffffff); /* Gradient background */
    color: #333; /* Dark grey text color */
    margin: 0;
    padding: 0;
    min-height: 100vh; /* Ensure the background covers the full height of the page */
}

h1 {
    font-weight: 600; /* Bold title */
    color: #529277; /* Dark green color for the title */
    text-align: center;
    margin-top: 40px;
    margin-bottom: 20px;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse; /* Removes spacing between borders */
    background-color: #fff; /* White background for the table */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for the table */
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd; /* Light border for the table cells */
}

th {
    background-color: #529277; /* Dark green background for headers */
    color: white; /* White text for headers */
    font-weight: bold;
}

td {
    background-color: #f9f9f9; /* Light grey background for table rows */
}

tr:nth-child(even) td {
    background-color: #f1f1f1; /* Alternating row colors for better readability */
}

tr:hover td {
    background-color: #e2e2e2; /* Highlight row on hover */
}

@media (max-width: 768px) {
    table {
        font-size: 14px; /* Reduce font size for smaller screens */
    }

    th, td {
        padding: 8px; /* Reduce padding for smaller screens */
    }
}

    </style>
</head>
<body>
    <h1>Riwayat Peminjaman</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Alat</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Perulangan data peminjaman -->
            @foreach ($loans as $loan)
            <tr>
                <td>{{ $loan->tool->name }}</td>
                <td>{{ $loan->start_date }}</td>
                <td>{{ $loan->end_date }}</td>
                <td>{{ $loan->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
