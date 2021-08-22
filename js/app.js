function ajouterDeLArgent() {
    let randomNumber = Math.random(2000);

    let solde = document.querySelector('.solde');

    solde.innerHTML = randomNumber;
}

const btn = document.querySelector('#ajout');

btn.addEventListener('click', ajouterDeLArgent);