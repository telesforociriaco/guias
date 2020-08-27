<?php
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
$Folio = $_POST['Folio'];

if (!empty($RFname) || !empty($RLname1) || !empty($RLname2) || !empty($RStreet) || !empty($Rnumber) || !empty($Rcolonia) || !empty($Rcp) || !empty($Rciudad)
    || !empty($Restado) || !empty($Rtelefono) || !empty($DFname) || !empty($DLname1) || !empty($DLname2) || !empty($DStreet) || !empty($Dnumber) || !empty($Dcolonia)
    || !empty($Dcp) || !empty($Dciudad) || !empty($Destado) || !empty($Dtelefono) || !empty($Peso) || !empty($largo) || !empty($alto) || !empty($ancho)) {

        $host = "localhost";
        $dbUsername = "sergior9_testDb01";
        $dbPaswword = "Lolameras_123";
        $dbname = "sergior9_testDb01";

        //fconexion
$conn = mysqli_connect($host, $dbUsername, $dbPaswword) or die('nosepudo conctar' .mysql_error());
    echo 'conexion exitosa';
    mysqli_select_db($conn , $dbname) or die('nosepudo selecuinas' );
     $sql = "INSERT INTO guia(RFname, RLname1, RLname2, RStreet, Rnumber, Rcolonia, Rcp, Rciudad, Restado, Rtelefono, DFname, DLname1, DLname2, DStreet, Dnumber, Dcolonia, Dcp, Dciudad, Destado, Dtelefono, Peso, largo, alto, ancho, Folio) VALUES ('".$RFname."', '".$RLname1."', '".$RLname2."', '".$RStreet."', '".$Rnumber."', '".$Rcolonia."', '".$Rcp."','".$Rciudad."', '".$Restado."', '".$Rtelefono."','".$DFname."','".$DLname1."','".$DLname2."', '".$DStreet."', '".$Dnumber."', '".$Dcolonia."', '".$Dcp."','".$Dciudad."', '".$Destado."', '".$Dtelefono."', '".$Peso."', '".$largo."', '".$alto."', '".$ancho."','".$Folio."')";
   var_dump($sql);
    mysqli_query($conn, $sql);
     echo "data inserted successfully";

        
} else {
    echo "All field are required";
    die();
}

?>