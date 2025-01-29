<!-- contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            margin: 10px 0;
            line-height: 1.6;
        }
        b {
            color: #666;
        }
        .separator {
            border-top: 1px solid #ccc;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .phone-link {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ $company }}</h2>

        <p><b>Name:</b> {{ $name }}</p>

        <p><b>Email:</b> {{ $email }}</p>
        <p><b>Phone:</b> <a href="tel:{{ $phone }}" class="phone-link">{{ $phone }}</a></p>

        <div class="separator"></div>

        <p>{!! nl2br(e($emailMessage)) !!}</p>
    </div>
</body>
</html>
