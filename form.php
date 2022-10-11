<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/form.css">
    <title>Input Form</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])) {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $hp = $_POST["nohp"];
            $password = $_POST["password"];
        }
    ?>
    <form method="post" class="form" action="output.php">
        <h2>Masuk</h2>
        <p type="Name:"><input type="text" name = "nama" placeholder="Tuliskan nama anda"></input></p>
        <p type="Email:"><input type="email" name = "email" placeholder="Email"></input></p>
        <p type="No HP: "><input type="number" name = "nohp" placeholder="Nomor hp anda"></p>
        <p type="Password:"><input type="password" name = "password" placeholder="Password anda"></input></p>
        <button type='submit' value='submit' name='submit'>Submit</button>
    </form>
</body>
</html>