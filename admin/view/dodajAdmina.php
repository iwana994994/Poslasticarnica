<?php 
include "message-session.php";
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
        <label for="ime">Ime:</label>
        <input type="text" name="ime" >
        
        <label for="prezime">Prezime</label>
        <input type="text" name="prezime" >
        
        <label for="email">E-mail</label>
        <input type="text" name="email" >

        <label for="username">username</label>
        <input type="text" name="username" >

        <label for="password">password</label>
        <input type="text" name="password" >
        
       
        
        <button type="submit" name="add-admin">Dodaj admina</button>
    </form>
</div>
<div></div>
    
</body>
</html>


