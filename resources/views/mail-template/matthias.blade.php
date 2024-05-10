<!DOCTYPE html>
<html lang="en">
<head>
    <title>Neue Nachrict</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit" />
</head>
<body>

<h4>Sehr geehrte Frau / Herr {{ $name }}</h4>
<p>Wir haben Ihre Nachricht erhalten und werden uns so schnell wie möglich bei Ihnen melden.</p>
<p>Vielen Dank, dass Sie mit uns Kontakt aufgenommen haben.</p>
<br>
<p>Liebe grüße,</p>

<div>Matthias Dachdecker</div>
<div>https://matthiasdachdecker.de/</div>
<div>+49 157 7871 7283</div>


<div style="border-bottom: 1px dashed #555; padding-bottom: 20px; margin-bottom: 20px;"></div>

<p>Originale Nachricht:</p>
<br>

<div>Name: {{ $name }}</div>
<div>E-Mail: {{ $email }}</div>
<div>Telefon: {{ $phone }}</div>
<div>Nachricht: {{ $mailMessage }}</div>

</body>

</html>