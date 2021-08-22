<?php
    session_start();
    require '../template/header.php';
    require '../data/data.php';
    ?>

<div class="form__container">
    <div class="form__section">
        <h1 class="title__form">Vos informations</h1>
        <?php
        if (!empty($_POST['name']) && !empty($_POST['lastname'])) {
            if (empty($_SESSION['lastname']) && empty($_SESSION['name'])) {

                $_SESSION['lastname'] = ucwords($_POST['lastname']);
                $_SESSION['name'] = ucwords($_POST['name']);
                $_SESSION['solde'] = 0;
                $_SESSION['iban'] = getIBAN();
                $_SESSION['bic'] = getBIC();
            }  
        } 
        
            if (!empty($_SESSION['lastname']) && !empty($_SESSION['name'])) { ?>
                <ul>
                    <li class="title__input"><?= "Nom : " . $_SESSION['lastname'] ?></li>
                    <li class="title__input"><?= "Prenom : " . $_SESSION['name'] ?></li>
                    <li class="title__input"><?= "Solde : " . $_SESSION['solde'] ?></li>
                    <li class="title__input"><?= "IBAN : " . $_SESSION['iban'] ?></li>
                    <li class="title__input"><?= "B.I.C : " . $_SESSION['bic'] ?></li>
                    <li class="title__input"></li>
                </ul>
                <form action="../tools/deconnection.php" class="btn">
                    <button class="btn__valide">déconnexion</button>
                </form>
                <?php 
            }else {
                ?>
                <p class="title__input">Vous n'êtes pas connecter ... </p>
                <p class="title__input">Veuillez vous connecter.</p>
                <form action="./index.php" class="btn">
                    <button class="btn__valide">Connexion</button>
                </form>
                <?php
            }
        ?>
    </div>
</div>

<?php
    
    require '../template/footer.php';

    function getIBAN() {
        $codePays = "FR";
        $codeBank = "10025";
        $digit = mt_rand(10, 99);
        $digit2 = mt_rand(10, 99);
        $accountNumber = mt_rand(00000000000, 99999999999);
        $iban = $codePays . " " . $digit . " " . $codeBank . " " . $accountNumber . " " . $digit2;
        return $iban;
    }


    

    function getBIC() {
        $letter = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $nbrBic = [];
        for ($index = 0; $index < 8; $index++) {
            $randomNumber = mt_rand(0, count($letter) - 1);
            $nbrBic[] = $letter[$randomNumber];
        }
        return strtoupper(implode($nbrBic));
    }