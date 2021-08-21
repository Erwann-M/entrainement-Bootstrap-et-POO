# entrainement-Bootstrap-et-POO

## Mini banque en ligne

Creer une petite banque en ligne simple ou l'on pourra faire differentes opérations banquaires:

- Création d'un compte et generation d'un RIB, d'un IBAN, d'un numero de compte. (ne pourra pas etre persistant sans base de donné que l'on ne vas pas incrémenté pour l'instant.).
- avoir la possibilité de choisir entre plusieurs formule de compte.

    | Formule         | prix/mois    | Decouvert autorisé         |
    |-----------------|--------------|----------------------------|
    | compte small    | gratuit      | pas de decouvert.          |
    | compte medium   | 1€ par mois  | decouvert de 10€ autorisé. |
    | compte premium  | 5€ par mois  | decouvert de 50€ autorisé. |

- verifier son solde.
- Faire des virements.
- Recevoir de l'argent.

### Plan de la journée

- [ ] Créer une structure html avec une mise en page bootstrap.
- [ ] Tout doit etre responsive.
- [ ] Creer une class qui acceuillera des information utilisateurs.
- [ ] Faire le systeme de transfere d'argent.
- [ ] faire la page qui affichera le solde du compte.

### Choses a faire plus tard

- [ ] Mettre une base de donnée pour sauvegarder les users.
- [ ] Faire en sorte que les virement, paiements etc soit fonctionnel et persistant (grace a la BDD).
- [ ] Amelioré le code.
