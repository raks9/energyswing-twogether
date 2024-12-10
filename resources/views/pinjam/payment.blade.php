<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Pembayaran</title>

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Apply Poppins font and background gradient */
        body, html {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #529277, #ffffff); /* Gradient background */
            color: #333; /* Dark grey text color */
            margin: 0;
            padding: 0;
            height: 100%; /* Ensure full height */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h1 {
            font-weight: 600; /* Bold title */
            color: #529277; /* Dark green color for the title */
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            font-size: 16px;
            margin-bottom: 30px;
        }

        ul li {
            margin-bottom: 10px;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8); /* White background with opacity */
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px; /* Limit form width */
            margin-top: 20px;
        }

        label {
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
            font-size: 16px;
        }

        input[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            font-weight: 600;
            background-color: #529277; /* Green button color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3d6e53; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div>
        <h1>Upload Bukti Pembayaran</h1>
        <p>Silakan transfer ke rekening berikut:</p>
        <ul>
            <li>Bank: BCA</li>
            <li>Nomor Rekening: 123456789</li>
            <li>Atas Nama: Nama Anda</li>
        </ul>

        <form action="{{ route('loans.payment.upload', $loan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="payment_proof">Upload Bukti Pembayaran:</label>
            <input type="file" id="payment_proof" name="payment_proof" accept="image/*" required>
            <button type="submit">Submit Bukti Pembayaran</button>
        </form>
    </div>
</body>
</html>
