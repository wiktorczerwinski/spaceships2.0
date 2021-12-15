<?php
    include_once 'spaceship.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spaceships</title>
</head>
<body>
<?php
    $ship = new Spaceship();
    echo $ship->ammo . "<br>";
    $ship2 = new Spaceship(50,50,50);
    echo $ship2->ammo;
    
    $dmg = $ship1->Shoot();
    $ship2->Hit($dmg);
?>
</body>
</html>