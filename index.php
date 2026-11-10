<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
  
</head>
<body>

    <div class="card">

        <img src="cbtis.jpg" alt="Logo de la Escuela" class="logo">
        <h1>¡Bienvenido!</h1>
        <div class="info">
            <p><strong>Escuela:</strong> CBTis 217</p>
            <p><strong>Alumno:</strong> Liseth Daniela Calderón Carmona</p>
            <p><strong>Tarea:</strong> Página con varias ramas</p>
            <p><strong>Fecha:</strong> <?php echo date("d/m/Y"); ?></p>
        </div>

        <a href="saludos.php" class="btn">Ir a la página de Saludos</a>
    </div>

</body>
</html>