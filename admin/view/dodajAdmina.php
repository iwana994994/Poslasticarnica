<?php 
include_once "message-session.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/dodajProizvod.css">
    <link rel="stylesheet" href="./public/message-session.css">
    <title>Dodaj Admina</title>
</head>
<body>
<div class="container">
    <h2 id="dodaj-proizod">Dodaj novog admina</h2>
    <form action="./model/dodajAdminaModel.php" method="POST">
        <label for="ime">Ime: *</label>
        <input type="text" name="ime" >
        <label id="opis">moze imati i mala i velika slova, najmanje 2 <br></label>
        
        <label for="prezime">Prezime: *</label>
        <input type="text" name="prezime" >
        <label id="opis">moze imati i mala i velika slova, najmanje 2 <br></label>
        
        <label for="email">E-mail *</label>
        <input type="email" name="email" placeholder="ime-123@gmail.com" required >
        <label id="opis">Standardna e-mail validacija npr. ime-123@gmail.com <br></label>

        <label for="username">username *</label>
        <input type="text" name="username" >
        <label id="opis">najmanje 5 karaktera sa slovima ili brojevima<br></label>

        <label for="password">password *</label>
        <input type="password" name="password" >
        <label id="opis">sifra najmanje 8 karaktera , slova i brojeva<br></label>
        
       
        
        <button type="submit" name="add-admin">Dodaj admina</button>
    </form>
</div>
<div></div>
    
</body>
</html>


