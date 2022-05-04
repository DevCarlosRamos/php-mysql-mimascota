<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plantilla/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plantilla/dist/css/adminlte.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <?php
    //conexion a postgres
    $servidor = 'database-1.c2qhrwyurthp.sa-east-1.rds.amazonaws.com';
    $dbname = 'mimascotabd';
    $usuario = 'root';
    $contraseña = '3ZrOf1#X9mFh';

    $conexion1 = mysqli_connect($servidor, $usuario, $contraseña, $dbname);
    //var_dump($conexion1);

    $sql =  "SELECT * FROM mimascotabd.post;";
    $resultSet = mysqli_query($conexion1, $sql);

    //Mientras el registro tenga valores se va estar repitiendo
    while ($row = mysqli_fetch_row($resultSet)) {
        //$row = mysqli_fetch_row($resultSet);
        //var_dump($row) . "<br/>";
        echo $row[0] . "|";
        echo $row[1] . "|";
        echo $row[2] . "|";
        echo $row[3] . "| <br/>";
    }

    mysqli_close($conexion1);
    /*try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $contraseña);
        //$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Conexion establecida";
    } catch (PDOException $e) {
        echo "Conexion erronea" . $e;
    }*/

    ?>

    <script src="plantilla/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="plantilla/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="plantilla/dist/js/demo.js"></script>
</body>

</html>