<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
</head>
<body>
    <h2>Hello {{ $userName }},</h2>

    <p>Your OTP for account verification is:</p>

    <h1>{{ $otp }}</h1>

    <p>This OTP will expire in 10 minutes.</p>

    <p>Thank you.</p>
</body>
</html>