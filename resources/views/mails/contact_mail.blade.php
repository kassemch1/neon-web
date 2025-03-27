<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        strong {
            color: #007bff;
        }

    </style>
</head>
<body>
<h2>New Contact Message</h2>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>
</body>
</html>
