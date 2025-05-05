<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('sheet.download') }}" class="btn btn-primary">
    Download Sheet Data
</a>

<form method="POST" action="form-submit">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="message" placeholder="Message" required></textarea><br>
    <button type="submit">Send</button>
</form>

</body>
</html>