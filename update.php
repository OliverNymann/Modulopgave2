<?php
//inkludere forbindelsesfilen
include_once 'addConnect.php';
//Her bliver der queriet til hvordan opdateringen skal forgå
if (count($_POST) > 0) {
    mysqli_query($dbconnect, "UPDATE users set ID='" . $_POST['ID'] . "', firstname='" . $_POST['firstname'] . "
    ', lastname='" . $_POST['lastname'] . "
    ', email='" . $_POST['email'] . "' ,phone='" . $_POST['phone'] . "' WHERE ID='" . $_POST['ID'] . "'");
    $message = "Bruger opdateret";
}
//Her bliver der queriet til hvor opdateringen skal forgå
$query = mysqli_query($dbconnect, "SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($query);
?>
<html>

<head>
    <title>Opdater bruger</title>
    <link rel="stylesheet" href="backStyle.css">
    <link rel="stylesheet" href="update.css">
</head>

<body>
    <form id="updateForm" name="updateForm" method="post" action="">
        <?php if (isset($message)) {
            echo $message;
        } ?>
        <input type="hidden" name="ID" class="txtField" value="<?php echo $row["ID"]; ?>">
        <br>
        Fornavn:
        <input type="text" name="firstname" class="txtField" value="<?php echo $row["firstname"]; ?>">
        <br>
        Efternavn :
        <input type="text" name="lastname" class="txtField" value="<?php echo $row["lastname"]; ?>">
        <br>
        Email:
        <input type="text" name="email" class="txtField" value="<?php echo $row["email"]; ?>">
        <br>
        Telefonnummer:
        <input type="text" name="phone" class="txtField" value="<?php echo $row["phone"]; ?>">
        <br>
        <input type="submit" name="submit" value="Submit" class="buttom">

        <a href="index.php">Tilbage</a>
    </form>
</body>

</html>