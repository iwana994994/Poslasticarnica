<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Admini</title>
</head>
<body>
    <h1>Lista admina</h1>
    <a id="dodajProizvod" href="admin-dashboard.php?page=dodajAdmina">Dodaj novog admina</a>
    <table>
        <tr>
            <th>id</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>e-mail</th>
            <th>username</th>
            <th>password</th>
            <th>akcija</th>
        </tr>
        <tr>
            <?php foreach($admini as $admin): ?>
            <td><?= $admin['id']?></td>
            <td><?= $admin['ime']?></td>
            <td><?= $admin['prezime']?></td>
            <td><?= $admin['email']?></td>
            <td><?= $admin['username']?></td>
            <td><?= $admin['password']?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>