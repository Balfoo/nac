let saisieFiltre = document.getElementById('saisieFiltre')
saisieFiltre.addEventListener('keyup', filter)

function filter() {
    //Récupérer la saisie dans le champ.
    let nomRecherche = saisieFiltre.value.toUpperCase()

    //Récupérer la div générale
    let animaux = document.getElementById('animaux')
    //Récupérer les cartes
    let carte_animaux = animaux.querySelectorAll('div.carte_animaux')

    for (let i = 0; i<carte_animaux.length; i++) {
        let nom = carte_animaux[i].getElementsByClassName('nom_animal_recherche')[0] //Récupere les noms
        console.log(nom)
        if (nom.innerHTML.toUpperCase().indexOf(nomRecherche) > -1) { //Si l'un des noms de la liste correpsond au nom saisi
             carte_animaux[i].style.display = ''                                  //La méthode indexOf() renvoie le premier indice pour lequel on trouve un élément donné dans un tableau. Si l'élément cherché n'est pas présent dans le tableau, la méthode renverra -1.
        } else {
            carte_animaux[i].style.display = 'none'       
        }
    }
}