<?php
require('partials/_header.php');
?>
<!-- Partie Administrateur -->

<div class="container">
  <h1 class="text-center m-5">Partie Administrateur</h1>
   <?php include('partials/_flash.php'); ?>

  <div class="row">
    <form class="col-12" method="post">
      <div class="form-group">
        <label for="nom">Nom de l'animal</label>
        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom de l'animal">
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="img">Image de l'animal</label>
            <input class="form-control" type="url" name="Image" id="img" 
                    placeholder="https://monsupersite.com/monimage.png" 
                    pattern="https://.*" 
                    required >
            <!-- <input type="file" name="Image" class="form-control" id="img" placeholder="Image de l'animal"> -->
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="cat">Catégorie de l'animal</label>
            <input type="text" name="Catégorie" class="form-control" id="cat" placeholder="Catégorie de l'animal">
          </div>
        </div>
        <div class="col-12">
          <label for="message">Description de l'animal</label>
          <textarea name="Description" rows="8" cols="80" id="message" class="form-control"></textarea>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <!-- Latitude input-->
          <div class="form-floating mb-3">
            <label for="latitude">Latitude</label>
            <input class="form-control" id="latitude" name="latitude" type="text" />
          </div>
        </div>

        <div class="col-12 col-md-6 mt-3">
          <!-- Longitude input-->
          <div class="form-floating mb-3">
            <label for="longitude">Longitude</label>
            <input class="form-control" id="longitude" name="longitude" type="text" />
          </div>
        </div>

        <div class="col-12">
          <input type="submit" value="Envoyer" class="btn btn-default d-block ml-auto mt-3">
        </div>

      </div>
    </form>
    <?php
		if (isset($_POST['nom'])) {
      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "INSERT INTO animaux VALUES(NULL,'" . $_POST['nom'] . "', '" . $_POST['Catégorie'] . "', '" . $_POST['Image'] . "', '" . $_POST['Description'] . "')";
        $resultat = $pdo->query($requete);

        $requete = "INSERT INTO villes(Nom, lat, lon) VALUES('".$_POST['nom'] . "','" . $_POST['latitude'] . "','" . $_POST['longitude'] . "')";
        $requete = $pdo->query($requete);

            if ($resultat)
                echo "<p>L'animal a été ajouté</p>";
            else
                echo "<p>Erreur</p>";

        
		}
		?>
  </div>
</div>
