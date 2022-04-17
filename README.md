# Modulopgave 2

Vi har i denne del af opgave oprettet en database og et table til at vise
hvordan man kan tilføje, opdatere, slette og vise data.

Følgende kode er blevet brugt til at oprette databasen og tablet.




## Database & Table / Eksempel

```php
<?php
//Database oprettelse
$servername = "localhost";
$username = "root";
$password = "";
/* Her oprettes forbindelsen, dette er dog flyttet efterfølgende til filen addConnect.php */
$conn = new mysqli($servername, $username, $password);
/* Et simpelt check til at se om der nu er oprettet forbindelse */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
/* Create database */
$sql = "CREATE DATABASE visitfynDB";
if ($conn->query($sql) === TRUE) {
    echo "Database oprettet";
}
else
{
    echo "Fejl i oprettelse af database: " . $conn->error;
}
$conn->close();

?>

<?php
//Table oprettelse
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitfynDB";
//Her opretter vi forbindelsen, denne gang er databasens navn også en del af forbindelsen.
$conn = new mysqli($servername, $username, $password, $dbname);
/* Endnu en gang tjekker vi om der er oprettet forbindelse */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
/* Opret table */
$sql = "CREATE TABLE users";
if ($conn->query($sql) === TRUE) {
    echo "Table oprettet";
}
else
{
    echo "Fejl i oprettelse af table: " . $conn->error;
}
$conn->close();


?>

## Video Eksempel
https://user-images.githubusercontent.com/55433479/163717227-7c0bfbc5-e77f-4e27-a17d-55bc4f493184.mp4

## ER over database/table Eksempel
![ER](https://user-images.githubusercontent.com/55433479/163719348-09661b05-d941-4355-8337-f0aafea6785d.png)

