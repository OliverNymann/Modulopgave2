<?php
//inkludere forbindelsesfilen
include_once("addConnect.php");
//Her checkes der hvis der er sat de forskellige felter
if (isset($_POST['save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //Her bliver der queriet til at indsætte en bruger
    $query = "INSERT INTO users (firstname, lastname, email, phone)
    VALUES ('$firstname', '$lastname', '$email', '$phone')";
    if (mysqli_query($dbconnect, $query)) {
        echo "Bruger tilføjet";
    } else {
        echo "Fejl i tilføjelse af bruger: " . $query . " " . mysqli_error($dbconnect);
    }
    mysqli_close($dbconnect);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruger tilføjet!</title>
    <link rel="stylesheet" href="backStyle.css">
</head>

<body>
    <a href="index.php">Tilbage</a>
</body>

</html>