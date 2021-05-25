<?php
        $whPaterno = $_POST['primApell'];
        $whMaterno = $_POST['secApell'];
        $whNombre = $_POST['nombre'];
        $whFecNac = $_POST['fecha'];
        $whGenero = $_POST['genero'];
        $whNacion = $_POST['lugar'];
        $whEntNac = $_POST['lugarmun'];
        $whCurp = $_POST['curp'];
        $file = $_POST['pago'];


        // Database connection
        $conn = new mysqli('localhost', 'root', 'ProgramacionPOO', 'alumnopago');
        if ($conn->connect_error) {
            echo "$conn->connect_error";
            die("Connection Failed : " . $conn->connect_error);
        } else {
            $stmt = $conn->prepare("insert into comprobante(primApell, secApell, nombre, fecha, genero, lugar, lugarmun, curp, pago) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", $whPaterno, $whMaterno, $whNombre, $whFecNac, $whGenero, $whNacion, $whEntNac, $whCurp, $whCurp);
            $execval = $stmt->execute();
            echo $execval;
            echo "Registration successfully...";
            $stmt->close();
            $conn->close();
        }

