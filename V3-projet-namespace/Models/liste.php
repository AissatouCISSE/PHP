<?php
    // require "Models/Config.php";
    // require "Models/Manager.php"; 
    require_once "../config/autoload.php";
    use  Models\Manager;
    use  Models\Config;
    $prin = new Manager();
    $pdo = $prin->getConnexion();
    $typeC = $pdo->prepare('SELECT * FROM typeCompte');
    $typeC->execute();
    $typecompte=$typeC->fetchALL();
    //var_dump($typecompte);?>
    <select type="select" id="typecompte" name="typecompte" onblur ="testcompte()"  >
        <option value="">Choisissez le type de compte</option>
        <?php foreach ($typecompte as $type): ?>
            <option value="<?= $type['id']?>"><?= $type['libelle']?></option>
            <?php endforeach ;?>
    </select>
    

