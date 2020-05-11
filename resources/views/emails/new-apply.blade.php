<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <h2>Új jelentkező adatai:</h2>
    <hr>
    <p><strong>Rendeléai azonosító:</strong>{{ $appointment['order_number'] }}</p>
    <p><strong>Feladó:</strong>{{ $appointment['last_name'] . ' ' . $appointment['first_name'] }}</p>
    <p><strong>Email cím:</strong>{{ $appointment['email'] }}</p>
    <p><strong>Telefonszám:</strong> {{ $appointment['phone_number'] }}</p>
    <p><strong>Születési idő:</strong> {{ $appointment['birthday'] }}</p>
    <p><strong>Taj vagy útlevélszám:</strong> {{ $appointment['social_security_number'] }}</p>
    <p><strong>COVID-19 tesztet:</strong> {{ $appointment['piece'] }} db</p>
    <p><strong>Fizetési mód:</strong> {{ $appointment['pay_method'] }}</p>
    <p><strong>Védekezésben dolgozó:</strong> {{ $appointment['is_nurse'] ? 'Igen' : 'Nem' }}</p>
    <p><strong>Számlázási cím</strong></p>
    <p><strong>Város:</strong> {{ $appointment['city'] }}</p>
    <p><strong>Irányítószám:</strong> {{ $appointment['zip_code'] }}</p>
    <p><strong>Utca, házszám :</strong> {{ $appointment['address'] }}</p>
    <hr>
</body>
</html>
