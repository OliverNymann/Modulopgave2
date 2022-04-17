<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret bruger</title>
    <link rel="stylesheet" href="addFormStyle.css">
</head>

<body>
    <center>
        <form method="post" action="add_user.php">
            Fornavn: <br>
            <input type="text" name="firstname">
            <br>
            Efternavn: <br>
            <input type="text" name="lastname">
            <br>
            Email: <br>
            <input type="text" name="email">
            <br>
            Telefonnummer: <br>
            <input type="text" name="phone">
            <br>
            <input type="submit" name="save" value="Opret">
        </form>
    </center>
</body>

</html>