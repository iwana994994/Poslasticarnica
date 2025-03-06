<?php
include_once(__DIR__ ."/../view/message-session2.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/registracija.css">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/message-session.css">

    <title>Registracija</title>
</head>
<body>

<div id="loginModal" >
        <div id="login-box">
           
            
            <h1 id="login-title">Registracija</h1>


     <form id="form-login" method="POST" action="/Poslasticarnica/korisnickaStrana/model/RegisterModel.php">
        <label for="ime">Ime*</label>
        <input id="input-login"type="text" name="ime" placeholder="Vaše ime" required>
        <label id="opis">moze imati i mala i velika slova, najmanje 2 <br></label>
        <label for="prezime">Prezime*</label>
        <input id="input-login"type="text" name="prezime" placeholder="Vaše prezime" required>
        <label id="opis">moze imati i mala i velika slova, najmanje 2 <br></label>

        <label for="email">E-mail*</label>
        <input id="input-login"type="email" name="email" placeholder="ime-123@gmail.com" required>
        <label id="opis">Standardna e-mail validacija npr. ime-123@gmail.com <br></label>

        <label for="username">username*</label>
        <input id="input-login"type="text" name="username" placeholder="Korisničko ime" required>
        <label id="opis">najmanje 5 karaktera sa slovima ili brojevima<br></label>
        
        <label for="password">password*</label>
        <input  id="input-login" type="password" name="password" placeholder="Lozinka" required>
        <label id="opis">sifra najmanje 8 karaktera , slova i brojeva<br></label>

        <label for="confirm_password">confirm password*</label>
        <input  id="input-login" type="password" name="confirm_password" placeholder="Potvrda lozinke" required>
            
            
            <button id="posalji" name="register">Napravi nalog</button>
       </form>

        </div>
    </div>
    
</body>
</html>