<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();

?>

<h1>Insira um Carro:</h1>
<form action="process.php" method="POST">

    <div>
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" placeholder="Insira a Marca">
    </div>

    <div>
        <label for="km">Kilometragem</label>
        <input type="text" name="km" placeholder="Insira a Kilometragem">
    </div>
    
    <div>
        <label for="color">Cor do Carro</label>
        <input type="text" name="color" placeholder="Insira a Cor">
    </div>
    
    <input type="submit" value="Salvar">

</form>

    <ul>
        <?php foreach($cars as $car):?>
            <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
        <?php endforeach; ?>
    </ul>