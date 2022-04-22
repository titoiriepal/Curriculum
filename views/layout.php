<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Curriculum Web'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<?php include_once __DIR__ . '/templates/header.php'; ?>
<body>

    <?php echo $contenido; ?>
            
</body>
<?php include_once __DIR__ . '/templates/footer.php'; ?>


</html>