<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            color: #2d3748;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            padding-left: 10px;
        }
        .message-box {
            background-color: #f7fafc;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            padding: 15px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Form Submission</h2>
        
        <div class="field">
            <span class="label">Name:</span>
            <div class="value">{{ $formData['fullname'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Phone:</span>
            <div class="value">{{ $formData['phone'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email:</span>
            <div class="value">{{ $formData['email'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Message:</span>
            <div class="value message-box">{{ $formData['message'] }}</div>
        </div>
    </div>
</body>
</html>