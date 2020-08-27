<?php
    $Username = "";
    $Email = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('localhost', 'sergior9_testDb01', 'Lolameras_123', 'guia');
    echo "database connected";

    // if the register button is clicked

    $RFname = $_POST['RFname'];
$RLname1 = $_POST['RLname1'];
$RLname2 = $_POST['RLname2'];
$RStreet = $_POST['RStreet'];
$Rnumber = $_POST['Rnumber'];
$Rcolonia = $_POST['Rcolonia'];
$Rcp = $_POST['Rcp'];
$Rciudad = $_POST['Rciudad'];
$Restado = $_POST['Restado'];
$Rtelefono = $_POST['Rtelefono'];
$DFname = $_POST['DFname'];
$DLname1 = $_POST['DLname1'];
$DLname2 = $_POST['DLname2'];
$DStreet = $_POST['DStreet'];
$Dnumber = $_POST['Dnumber'];
$Dcolonia = $_POST['Dcolonia'];
$Dcp = $_POST['Dcp'];
$Dciudad = $_POST['Dciudad'];
$Destado = $_POST['Destado'];
$Dtelefono = $_POST['Dtelefono'];
$Peso = $_POST['Peso'];
$largo = $_POST['largo'];
$alto = $_POST['alto'];
$ancho = $_POST['ancho'];
    echo "data is taken";

    // if there are no errors, save user to database



$sql = "INSERT INTO Users(RFname, RLname1, RLname2, RStreet, Rnumber, Rcolonia, Rcp, Rciudad, Restado, Rtelefono, DFname, DLname1, DLname2, DStreet, Dnumber, Dcolonia, Dcp, Dciudad, Destado, Dtelefono, Peso, largo, alto, ancho)
VALUES('$RFname', '$RLname1', '$RLname2', '$RStreet', '$Rnumber', '$Rcolonia', '$Rcp','$Rciudad', '$Restado', '$Rtelefono','$DFname','$DLname1','$DLname2', '$DStreet', '$Dnumber', '$Dcolonia', '$Dcp','$Dciudad', '$Destado', '$Dtelefono', '$Peso', '$largo', '$alto', '$ancho')";
  mysqli_query($conn, $sql);
  echo "data inserted successfully";

    ?>