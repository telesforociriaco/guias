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

if (!empty($RFname) || !empty($RLname1) || !empty($RLname2) || !empty($RStreet) || !empty($Rnumber) || !empty($Rcolonia) || !empty($Rcp) || !empty($Rciudad)
    || !empty($Restado) || !empty($Rtelefono) || !empty($DFname) || !empty($DLname1) || !empty($DLname2) || !empty($DStreet) || !empty($Dnumber) || !empty($Dcolonia)
    || !empty($Dcp) || !empty($Dciudad) || !empty($Destado) || !empty($Dtelefono) || !empty($Peso) || !empty($largo) || !empty($alto) || !empty($ancho)) {

        $host = "localhost";
        $dbUsername = "sergior9_testDb01";
        $dbPaswword = "Lolameras_123";
        $dbname = "guia";

        //create connection

        $conn = new mysqli($host, $dbUsername, $dbPaswword, $dbname);

        if (mysqli_connect_error()) {
            # code...
            die('Conect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT Rtelefono From guia Where Rtelefono = ? Limit 1";
            $INSERT = "INSERT Into guias (RFname, RLname1, RLname2, RStreet, Rnumber, Rcolonia, Rcp, Rciudad, Restado, Rtelefono, DFname, DLname1, DLname2, DStreet, Dnumber, Dcolonia, Dcp, Dciudad, Destado, Dtelefono, Peso, largo, alto, ancho)"
            # code...

            //Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("i", $Rtelefono);
            $stmt->execute();
            $stmt->bind_result($Rtelefono);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssisississssisissiiiii",$RFname, $RLname1, $RLname2, $RStreet, $Rnumber, $Rcolonia, $Rcp, $Rciudad, $Restado, $Rtelefono, $DFname, $DLname1, $DLname2, $DStreet, $Dnumber, $Dcolonia, $Dcp, $Dciudad, $Destado, $Dtelefono, $Peso, $largo, $alto, $ancho)
                $stmt->execute();
                echo "New record inserted sucessfully"
            }else{
                echo "Some already register using this Remiente Number"
            }
            $stmt->close();
            $conn->close();

        }
} else {
    echo "All field are required";
    die();
}

?>