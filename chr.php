<?php
$host = "localhost";
        $dbUsername = "sergior9_testDb01";
        $dbPaswword = "Lolameras_123";
        $dbname = "guia";

        //create connection

        $conn = mysqli_connect($host, $dbUsername, $dbPaswword) or die('no se pudo conctar' .mysql_error());
        echo 'conexion exitosa';
        mysqli_select_db($conn , $dbname) or die('no se pudo selecuinas' );
        echo "seleciono bd";


        ?>