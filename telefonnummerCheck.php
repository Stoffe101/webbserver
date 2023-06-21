<?php
$select = mysqli_query($conn, "SELECT * FROM 'lanare' WHERE 'lanare' = '".$_POST['telefonnummer']."'");
if(mysqli_num_rows($select)) {
    exit('telefonnummret finns redan');
}
?>