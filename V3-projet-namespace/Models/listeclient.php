<?php
    require_once "../config/autoload.php";
    use  Models\Manager;
    
    // require "Models/Config.php";
    // require "Models/Manager.php"; 
    $prin = new Manager();
    $pdo = $prin->getConnexion();
    $typeC = $pdo->prepare('SELECT * FROM physique');
    $typeC->execute();
    $typecompte=$typeC->fetchALL();
    //var_dump($typecompte);?>
    <select type="select" id="client" name="client">
        <meta charset="utf-8">
        <option value=1>Choisissez le client</option>
        <?php foreach ($typecompte as $type): ?>
            <option value="<?= $type['id_physique']?>"><?= $type['cni']?></option>
            <?php endforeach ;?>
    </select>