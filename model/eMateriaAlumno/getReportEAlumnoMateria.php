<?php
// Conectando, seleccionando la base de datos
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "prueba";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = mysqli_query ($conn, 'select * from alumno',MYSQLI_USE_RESULT);
         echo "[".json_encode($result->fetch_array());
        while ($R = $result->fetch_array())
                    {
                       echo ",".json_encode($R);
                    }
                    echo "]";
        $result->close();
        $conn->close();


?>