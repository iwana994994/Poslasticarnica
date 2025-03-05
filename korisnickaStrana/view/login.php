<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Poslasticarnica/korisnickaStrana/public/login.css">
    <title>Document</title>
</head>
<body>
<div id="loginModal" >
        <div id="login-box">
           
            
            <h1 id="login-title">Prijava</h1>


     <form id="form-login" method="POST" action="/Poslasticarnica/korisnickaStrana/model/LoginModel.php">
            <input id="input-login"type="text" name="username" placeholder="Korisničko ime" required>
            <input  id="input-login" type="password" name="password" placeholder="Lozinka" required>
            <button id="posalji" name="login">Prijavi se</button>
       </form>
       <a href="/Poslasticarnica/index.php?page=registracija">
            <button id="posalji" name="login">Registruj se
            </button>
            </a>

        </div>
    </div>
</body>
</html>