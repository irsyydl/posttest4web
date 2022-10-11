<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/output.css">
    <title>Output</title>
</head>
<body>
    <p>
        <h2>Informasi Anda</h2> <br>
        Halo <?php echo $_POST["nama"];?> !<br> <br>
        Email anda : <?php echo $_POST["email"];?> <br> <br>
        No Hp anda : <?php echo $_POST["nohp"];?> <br> <br>
        Password anda : <?php echo $_POST["password"];?> <br> <br>
    </p>
</body>
</html>