<?php 
$titre="Ajouter un animal";
$carte=true;
include('../partials/_header.php'); ?>

<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="../asset/normalize.css">
<link rel="stylesheet" href="../asset/haut.css">
<link rel="stylesheet" href="../asset/bas.css">
<link rel="stylesheet" href="../asset/bouton.css">
<link rel="stylesheet" href="../asset/style.css"> 
<title>Formulaire des NAC</title>
<!-- Contact Section-->
<section class="page-section" id="contact">
            <div class="container contact_ajout">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ajouter un Animal</h2>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <form action="mail.php" method="post" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3 div-form">
                                <input class="form-control recherche" id="name" type="text" name="name" data-sb-validations="required" />
                                <label for="name">Nom</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Le nom de l'animal est demandé.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3 div-form">
                                <input class="form-control recherche" id="email" name="email" type="email" data-sb-validations="required,email" />
                                <label for="email">Adresse mail</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Un email est demandé.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Votre email n'est pas valide</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3 div-form">
                                <textarea class="form-control recherche" id="message" type="text" name="message" style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Description de l'animal</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">La description est demandé</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Message envoyé !</div>
                                    <br />
                                    
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Message Erreur !</div></div>
                            <!-- Submit Button-->
                            <input class="btn btn-primary btn-xl bouton_rouge" id="submitButton" type="submit" value="Envoyer">
                        </form>

                    </div>
                </div>
            </div>
        </section>

<?php include('../partials/_footer.php'); ?>