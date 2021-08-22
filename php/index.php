<?php 
    require '../template/header.php';
?>
        <div class="form__container">
            <form action="./compte.php" method="post">
                <fieldset class="form__section">
                    <legend class="title__form">Informations personnelles</legend>

                    <div class="input-label">
                        <label for="lastname" class="title__input">Votre nom :</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Nom" class="input">
                    </div>

                    <div class="input-label">
                        <label for="name" class="title__input">Votre prenom :</label>
                        <input type="text" name="name" id="name" placeholder="Prenom" class="input">
                    </div>

                    <div class="btn">
                        <input type="submit" class="btn__valide"></input>
                    </div>
                </fieldset>
            </form>
        </div>

<?php
    require '../template/footer.php';
?>