<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Portofolio</title>
</head>
<body>
    <p>Dapet Pesan nih dari <b>{{ $details['nama'] }}</b> :</p>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $details['nama'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $details['email'] }}</td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td>{{ $details['pesan'] }}</td>
        </tr>
    </table>
</body>
</html>