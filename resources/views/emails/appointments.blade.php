<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <h2>Tisztelt {{ $appointment['last_name'] . ' ' . $appointment['first_name'] }}</h2>
    <p>Sikeresen elküldte a Koronavírus (COVID-19) tesztre történő jelentkezését.</p>
    <p>Bejelentkezéséhez tartozó regisztrációs száma: {{$appointment['order_number']}}</p>
    <p>Kollégánk hamarosan felveszi Önnel a kapcsolatot, az ön által megjelölt telefonszámon.
További kérdéseivel nyugodtan keressen bennünket  regisztrációs számának megjelölésével az info@covidvirusteszt.hu email cimen.</p>
    <p>Amennyiben atutalással szeretne fizetni, kérjuk abban az esetben a megjegyzés rovatban az általunk küldött regisztrációs számot legyen szives feltüntetni.</p>
    <p><strong>Bankszámlaszám:</strong> 14100141-74358149-02000001</p>
    <hr>
    <p><strong>Feladó:</strong>{{ $appointment['last_name'] . ' ' . $appointment['first_name'] }}</p>
    <p><strong>Email cím:</strong>{{ $appointment['email'] }}</p>
    <p><strong>Telefonszám:</strong> {{ $appointment['phone_number'] }}</p>
    <hr>
    <p>Üdvözlettel:</p>
    <p>Labordiagnosztika Kecskemét</p>
    <p>6000 Kecskemét, <br>
Piaristák Tere  7.    (Oldalt a Fogászati Ügyelet felöli bejáratnál)</p>
    <img src="http://staging-kinder-doktor.lara-dev.com/covid/image/logo-red.png">
</body>
</html>
