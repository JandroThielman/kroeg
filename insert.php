<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<script>alert('Fiets is Toegevoegd')</script>";
    echo "<script> location.replace('home.php');</script>";

    print_r($_POST);

    // connect database
    include "connect.php";

    // maak een query
    $sql = "INSERT INTO bieren (Merk, Type, Prijs) VALUES (:Merk, :Type, :Prijs);";
    
    // prepare
    $query = $conn->prepare($sql);
    
    // uitvoeren
    $status = $query->execute(
        [
            ':Merk' => $_POST['Merk'],
            ':Type' => $_POST['Type'],
            ':Prijs' => $_POST['Prijs']
        ]
    );

    if ($status) {
        echo 'toegevoegd';
    } else {
        echo 'fail: ' . implode(" ", $query->errorInfo());
    }
    
    
    // ophalen alle data
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fietsen Formulier</title>
</head>
<body>

<h2>Toevoegen</h2>

<form action="" method="post">

  <label>Naam:</label>
  <input type="text" name="naam" required><br>

  <label>Addres:</label>
  <input type="text" name="adress" required><br>

  <label>Plaats:</label>
  <input type="text" name="plaats" required><br>

  <input type="submit" value="Voeg toe">
</form>

</body>
</html>