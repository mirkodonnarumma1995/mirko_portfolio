<!-- resources/views/emails/contact.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Contact Mail</title>
</head>
<body>
    <p><strong>Nome:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $details['message'] }}</p>
</body>