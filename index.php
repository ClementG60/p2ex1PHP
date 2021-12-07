<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $age = 17;
        if ($age >= 18) {
            echo 'Vous êtes majeur.';
        } else {
            echo 'Vous êtes mineur.';
        }
        ?>
    </p>
</body>
</html>