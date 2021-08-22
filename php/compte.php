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

                $newClient = new Client();

                $newClient->name        = ucwords($_POST['name']);
                $newClient->lastname    = ucwords($_POST['lastname']);
                $newClient->solde       = 0;
                $newClient->iban        = getIBAN();
                $newClient->bic         = getBIC();

                $newClient->cestLaPaye();

                $_SESSION['lastname']   = $newClient->lastname;
                $_SESSION['name']       = $newClient->name;
                $_SESSION['solde']      = $newClient->solde;
                $_SESSION['iban']       = $newClient->iban;
                $_SESSION['bic']        = $newClient->bic;
            }  
        } 
        
            if (!empty($_SESSION['lastname']) && !empty($_SESSION['name'])) { ?>
                <ul>
                    <li class="title__input"><?= "Nom : " . $_SESSION['lastname'] ?></li>
                    <li class="title__input"><?= "Prenom : " . $_SESSION['name'] ?></li>
                    <li class="title__input"><?= "Solde : <span class=\"solde\">" . $_SESSION['solde'] . "</span> €" ?></li>
                    <li class="title__input"><?= "IBAN : " . $_SESSION['iban'] ?></li>
                    <li class="title__input"><?= "B.I.C : " . $_SESSION['bic'] ?></li>
                </ul>
                
                <button class="btn_valide" id="ajout">Ajouter argent</button>
                
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