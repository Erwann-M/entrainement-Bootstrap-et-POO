<?php
    session_start();
    if (empty($_SESSION['lastname']) && empty($_SESSION['name'])) {

        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['solde'] = 0;
    }
    require '../template/header.php';
?>

<div class="form__container">
    <div class="informations">
        <h1>Vos informations</h1>
        
        <ul>
            <li><?= "Nom : " . $_SESSION['lastname'] ?></li>
            <li><?= "Prenom : " . $_SESSION['name'] ?></li>
            <li><?= "Solde : " . $_SESSION['solde'] ?></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<?php
require '../template/footer.php';