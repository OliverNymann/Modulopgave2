<?php
//inkludere forbindelsesfilen
include_once('addConnect.php');
//Her bliver der queriet til at slette en bruger
$query = "DELETE FROM users WHERE id='" . $_GET['id'] . "'";
if (mysqli_query($dbconnect, $query)) {
    echo "Bruger slettet.";
} else {
    echo "Fejl i sletning af bruger" . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slet bruger</title>
    <link rel="stylesheet" href="backStyle.css">
</head>

<body>
    <a href="index.php">Tilbage</a>
</body>

</html>