<?php
$titre="Articles";
include('partials/_header.php');
?>

<section class="barre_recherche_animaux container">
    <input class="texte recherche" id="saisieFiltre" type="texte" placeholder="Chercher un article">
    <!--<button class="haut-btn_chercher" type="submit"><img src="img\loupe.png" alt="Rechercher"></button>-->
</section>

<section class="cartes_recherche_animaux actualites container" id="animaux">

    <div class="carte_animaux">
        <h3 class="nom_animal_recherche">Avoir un nouvel animal de compagnie (Nac) : quelles sont les règles ?</h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\cobra.jpg" alt="actu">
        <span class="description_derniers_ajouts">Les règles de détention d'un nouvel animal de compagnie (Nac) varient selon que l'animal appartient à une espèce domestique ou sauvage. </span>
        <div>
            <a href="https://www.service-public.fr/particuliers/vosdroits/F34922">Voir l'article></a>
        </div>
    </div>

    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Le bien-être et la protection des NAC (Nouveaux Animaux de Compagnie)</h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\furet_actu.jpg" alt="actu">
        <span class="description_derniers_ajouts">De plus en plus de Français adoptent des « nouveaux animaux de compagnie » (NAC). Il existe une réglementation spécifique pour assurer leur bien-être au quotidien.</span>
        <div>
            <a href="https://agriculture.gouv.fr/le-bien-etre-et-la-protection-des-nac-nouveaux-animaux-de-compagnie">Voir l'article></a>
        </div>
    </div>

    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Mon animal fait la loi : Gulli lance un nouveau divertissement animalier</h3>
        <span class="categorie">Actualité</span>
        <img src="asset\img\gulli.jpg" alt="actu">
        <span class="description_derniers_ajouts">De plus en plus de Français adoptent des « nouveaux animaux de compagnie » (NAC). Il existe une réglementation spécifique pour assurer leur bien-être au quotidien.</span>
        <div>
            <a href="https://www.demotivateur.fr/animaux/mon-animal-fait-la-loi-gulli-lance-un-nouveau-divertissement-animalier-28443">Voir l'article ></a>
        </div>
    </div>


    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Nouvelle loi contre la maltraitance animale </h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\chien-actu.jpg" alt="actu">
        <span class="description_derniers_ajouts">L’équipe de Neocare dresse un bilan sur la nouvelle loi du 30 novembre 2021 visant à lutter contre la maltraitance animale et conforter le lien entre les animaux et les hommes.</span>
        <div>
            <a href="https://envt.fr/actualites/nouvelle-loi-contre-la-maltraitance-animale/">Voir l'article ></a>
        </div>
    </div>


    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >L’ACACED, le sésame pour travailler avec les animaux</h3>
        <span class="categorie">Emploi</span>
        <img src="asset\img\emploi-nac.jpg" alt="actu">
        <span class="description_derniers_ajouts">Exercer une activité auprès des animaux ne s’improvise pas ! Pour acquérir les connaissances nécessaires et prouver votre capacité, l’ACACED est obligatoire. Formation, compétences… Suivez le guide !</span>
        <div>
            <a href="https://www.pole-emploi.fr/actualites/le-dossier/agriculture---secteur-animalier/secteur-animalier/le-certificat-de-capacite-des-an.html">Voir l'article ></a>
        </div>
    </div>


    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Animal domestique, sauvage, apprivoisé, de compagnie : quelles différences ?</h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\paon.jpg" alt="actu">
        <span class="description_derniers_ajouts">Un animal domestique est un animal appartenant à une espèce ayant subi des modifications, par sélection, de la part de l'homme. C'est un animal qui, élevé de génération en génération sous la surveillance de l'homme, a évolué de façon à constituer une espèce, ou une race, différente de la forme sauvage primitive dont il est issu.</span>
        <div>
            <a href="https://www.service-public.fr/particuliers/vosdroits/F34904">Voir l'article ></a>
        </div>
    </div>

    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Avoir un nouvel animal de compagnie (Nac) : quelles sont les règles ?</h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\iguane.jpg" alt="actu">
        <span class="description_derniers_ajouts">Les règles de détention d'un nouvel animal de compagnie (Nac) varient selon que l'animal appartient à une espèce domestique ou sauvage.</span>
        <div>
            <a href="https://www.demarches.interieur.gouv.fr/particuliers/nouvel-animal-compagnie-nac-quelles-regles">Voir l'article ></a>
        </div>
    </div>

    <div class="carte_animaux">
        <h3 class="nom_animal_recherche" >Nouveaux animaux de compagnie d’espèces domestiques</h3>
        <span class="categorie">Règlementation</span>
        <img src="asset\img\tortue.jpg" alt="actu">
        <span class="description_derniers_ajouts">On désigne par le terme « nouveaux animaux de compagnie » ou « NAC » différents animaux autres que les chiens et chats, élevées en compagnie de l’homme.</span>
        <div>
            <a href="http://www.cote-dor.gouv.fr/nouveaux-animaux-de-compagnie-d-especes-a4900.html">Voir l'article ></a>
        </div>
    </div>



</section>

<script src="asset/script/recherche_animaux.js"></script>

<?php
include('partials/_footer.php');
?>