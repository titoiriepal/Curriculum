<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Jesús Ramos, Programador Junior, Programador, desarrollo web, diseño web">
    <title><?php echo $titulo ?? 'Curriculum Web'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>

    <?php echo $contenido; ?>
    <?php echo $script ?? ''; ?>
            
</body>



</html>