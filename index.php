<?php
//Inkludere forbindelsen til databasen
include_once("addConnect.php");

//Querier databasen at vælge "alt" fra tablet users
$info = mysqli_query($dbconnect, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datavisning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //Hvis der er flere rækker i tablet users så bliver tabellen oprettet.
    if (mysqli_num_rows($info) > 0) {
    ?>
    <table id="users">

        <tr>
            <th>ID</th>
            <th>Fornavn</th>
            <th>Efternavn</th>
            <th>Email</th>
            <th>Telefonnummer</th>
        </tr>
        <?php
            //Bruger while loop til at iterere igennem de forskellige rows.
            $i = 0;
            while ($row = mysqli_fetch_array($info)) {
            ?>
        <tr>
            <!--- tager hver række med det tilsvarende row=["???"]--->
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["firstname"]; ?></td>
            <td><?php echo $row["lastname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <!--- Knapper til at opdatere og slette laves--->
            <td><a id="upBtn" href="update.php?id=<?php echo $row["ID"]; ?>">Opdater</a></td>
            <td><a id="delBtn" href="deleteUser.php?id=<?php echo $row["ID"]; ?>">Slet</a></td>
        </tr>
        <?php
                $i++;
            }
            ?>
    </table>
    <?php
    } else {
        echo "Ingen brugere i systemet";
    }
    ?>
    <a id="addBtn" href="form.php">+ Tilføj</a>
</body>

</html>