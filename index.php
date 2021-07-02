<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad obligatoria | Unidad 02 | PHP</title>
</head>
<body>

    <h1>Actividad obligatoria | PHP</h1>

    <?php

        echo '<h3>';

        $persona = array(
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'edad' => 26,
            'hobbie' => 'jugar al truco',
            'editor' => 'VSC',
            'so' => 'Windows'
        );

        foreach($persona as $personas) {
            echo $personas;
            echo '<br>';
        }

        echo '</h3>';

    ?>

</body>
</html>