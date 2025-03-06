

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/table-style.css">
    <title>Lista korisnika</title>
</head>
<body>
    <h1>Lista korisnika</h1>
    
    <table >
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>e-mail</th>
            <th>username</th>
            <th>Datum kreiranja naloga</th>
            <th> </th>
        </tr>
        <?php foreach ($korisnici as $korisnik): ?>
        <tr>
            <td><?=($korisnik['id']) ?></td>
            <td><?= ($korisnik['ime']) ?></td>
            <td><?= ($korisnik['prezime']) ?></td>
            <td><?= ($korisnik['email']) ?> </td>
            <td><?= ($korisnik['username']) ?> </td>
            <td><?= ($korisnik['created_at']) ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
