<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pesan dari Formulir Kontak</h1>

    <p>Email Pengirim: </p>
    <a href="mailto:{{ $email }}">{{ $email }}</a>

    <p>Pesan: {{ $mail }}</p>
</body>
</html>

