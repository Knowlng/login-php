<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

<!-- 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, 
išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi" -->

<!--  *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
   *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php -->
<h1>Log in page</h1>
<form method="POST" action="login.php">
    <input required='required' name="username" placeholder="Username"/>
    <input required='required' name="password" placeholder="Password" input type="password"/>
    <button name="patvirtinti" type="submit">Patvirtinti</button>
</form>

<div>
    <?php
    if(isset($_POST["patvirtinti"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === "admin" && $password === "123456") {
            header("Location: myaccount.php");
            exit();
        } else {
            header("Location: 404.php");
            exit();
        }
    }
    ?>
</div>




</body>