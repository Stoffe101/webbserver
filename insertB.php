<?php
include 'dbconn.php';
?>

<?php
$förnamn = $_POST['förnamn'];
$efternamn = $_POST['efternamn'];
$telefonnummer = $_POST['telefonnummer'];



$insert = "INSERT INTO lanare(fornamn, efternamn, Telefonnummer) VALUES ('$förnamn', '$efternamn', '$telefonnummer')";
mysqli_query($conn,$insert);

?>