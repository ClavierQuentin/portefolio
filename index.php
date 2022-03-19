
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf57503e64.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Portefolio de Quentin Clavier</title>
</head>
<body>
<div class="container-fluid conteneur">
    <header>
        <div class="header">
            <!--<h1 class="titre">
                Portefolio
            </h1>-->
            <h2 class="titre">
                <span class="colored_text_2 taillePolice">I'm </span><span id="string_dev" class="taillePolice">Quentin</span>
            </h2>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <div class="navbar-nav" id="navBarEtendue">
                        <a class="nav-link" aria-current="page" href="#">About me</a>
                        <a class="nav-link" href="#competences">Compétences</a>
                        <a class="nav-link" href="#projets">Projets</a>
                        <a class="nav-link" href="#contact">Contact</a>
                    </div>
            </div>
        </nav>
    </header>
    <div class="row sansMarge">
        <div class="bloc grande_taille col-md-6 col-sm-12 borderBottom borderRight">
            &lt;/ &gt;
        </div>
        <div class="bloc col-md-6 col-sm-12 borderBottom">
            <h3 class="colored_text">About me</h3>
            <p class="blocParagraphe">
            En pleine reconversion professionnelle, je suis en formation avec les organismes Via Formation et Creative Formation afin de devenir Développeur Web et Web Mobile.
            </p>
            <p class="blocParagraphe marginBottom">Je m'appelle Quentin et ceci est mon portefolio. Bonne lecture à vous !</p>  
        </div>
    </div>
    <div class="row sansMarge flexReverse">
        <div class="blocNonCentrer col-md-6 col-sm-12 borderRight">
            <div class="row">
                <div class="col">
                    <h3 class="colored_text">Parcours académique</h3>
                    <p>Développeur Web et Web Mobile avec Via Formation et Creative Formation, <span class="italic">Hérouville Saint Clair</span> 
                     <br>  <span class="bold">02/2022 – en cours</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <p>&bull; Apprener à programmer avec JS
                    <br>&bull; HTML5 / CSS3
                   <br><span class="bold">Novembre 2021</span></p>
                </div>
            </div>
            <dv class="row">
                <div class="col">
                    <p>BTS Hôtellerie Restauration
                        <br><span class="italic">Ecole Hôtelière de Paris Jean Drouant</span>
                        <br><span class="bold">2011</span>
                    </p>
                </div>
            </dv>
        </div>
        <div class="bloc col-md-6 col-sm-12">
            <img class="academique" src="images/graduation-hat.png" alt="">
        </div>
    </div>
    <div class="ligne_2 responsiveMarge">
        <div class="row sansMarge fondGris">
            <div class="col"><h3 id="competences">Mes compétences techniques</h3></div>
        </div>
        <div class="row ligneCompetences  d-flex justify-content-around">
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="" class="text-center">
                    <img class="unionJack" src="images/union-jack.png" alt="">
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="html" class="text-center">
                    <i style="color: #4d4d4d;" class="fab fa-html5 fa-4x" title="HTML5"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">95%</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="css" class="text-center">
                    <i style="color: #4d4d4d;" class="fab fa-css3-alt fa-4x"  title="CSS3"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2  sujet">
                <label for="js" class="text-center">
                    <i style="color: #4d4d4d;" class="fab fa-js fa-4x"  title="JAVASCRIPT"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
            </div>
        </div>
        <div class="row ligneCompetences2 d-flex justify-content-around">
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="php" class="text-center">
                    <i style="color: #4d4d4d;" class="fab fa-php fa-4x"  title="PHP"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">5%</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="" class="text-center">
                    <i class="fab fa-bootstrap fa-4x" style="color: #4d4d4d;" title="BOOTSTRAP"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 sujet">
                <label for="" class="text-center">
                    <i style="color: #4d4d4d;" class="fab fa-github fa-4x" title="GITHUB"></i>
                </label>
                <div class="progress" style="height: 13px;">
                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
                </div>
            </div>
        </div>
        <div class="row sansMarge fondBlanc">
            <div class="col"><h3 id="projets">Mes Projets de formation</h3></div>
        </div>
        <div class="row sansMarge ligneProjets ">
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/premier_exercice/" target="_blank"><img class="images_projets margeImagesProjets" src="images/bleu.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/hotel_unique/" target="_blank"><img class="images_projets margeImagesProjets" src="images/1.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div><a href="https://clavierquentin.github.io/commercants/" target="_blank"><img src="images/banniere.png" alt="" class="images_projets margeImagesProjets"></a></div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/colonnesEtCouleurs/" target="_blank"><img src="images/colonnesEtCouleurs.png" alt="" class="images_projets"></a>
                </div>
            </div>
        </div>
        <div class="row sansMarge ligneProjets">
            
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/snake/" target="_blank"><img src="images/snake.png" alt="" class="images_projets"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://roman-numbers-converter.netlify.app/" target="_blank"><img src="images/convertisseur.png" alt="" class="images_projets margeImagesProjets"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/odin_project_rock_paper/" target="_blank"><img src="images/rock_paper_scissors.png" alt="" class="images_projets margeImagesProjets"></a>
                </div>
            </div>
        </div>
        <div class="row sansMarge ligneProjets">
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/etch-a-sketch/" target="_blank"><img src="images/etch-a-sketch.png" alt="" class="images_projets margeImagesProjets"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-2 d-flex justify-content-center">
                <div>
                    <a href="https://clavierquentin.github.io/Calculator/" target="_blank"><img src="images/calculator.png" alt="" class="images_projets"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row sansMarge fondGrisSansMarge">
        <div class="row sansMarge fondGris">
            <div class="col text-center">
                <h3 id="contact">Me contacter</h3>
            </div>
        </div>
        <div class="row sansMarge fondGrisSansMarge">
            <div class="col-md-6 col-sm-12 decalageDroite">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41949.89619785904!2d-0.8276032473402235!3d48.917897348950554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480bce6208c0c655%3A0x40c14484fbcddd0!2sSaint-Charles-de-Percy%2C%2014350%20Valdalli%C3%A8re!5e0!3m2!1sfr!2sfr!4v1645019558179!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6 col-sm-12">
                    <div class="row ligne_2">
                        <div class="col centrerResponsive">
                            <span class="taillePoliceMoyenne">&phone; 07 61 38 55 05</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="" method="post">
                                <fieldset>
                                    <div class="row">
                                        <div class="col">
                                            <h3>M'écrire</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="nom" id="name" placeholder="Votre nom">
                                    </div>
                                    <div class="row">
                                        <input type="text" name="email" id="email" placeholder="Votre email">
                                    </div>
                                    <div class="row">
                                        <textarea name="message" id="message"  rows="4" placeholder="Votre message"></textarea>
                                    </div>
                                    <div class="row">
                                        <button type="submit" name="envoyer" class="btn btn-light">Envoyer</button>
                                    </div>
                                </fieldset> 
                                <?php 
                                if(isset($_POST['envoyer'])){
                                    $nom = $_POST['nom'];
                                    $objet = 'Contact';
                                    $mailDestinataire = 'clavier.quentin@gmail.com';
                                    $message = $_POST['message'];

                                    $expediteur = $_POST['email'];
                                    $headers = "MIME-Version: 1.0" ."\n";
                                    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
                                    $headers .= 'Reply-To: '.$expediteur."\n";
                                    $headers .= 'Delivered-to: '.$mailDestinataire."\n";
                                    if(mail($mailDestinataire,$objet,$message,$headers)){
                                        echo "<p> Votre message est envoyé</p>";
                                    }else{
                                        echo "<p>Il y a un problème</p>";
                                    }
                                }

                                ?>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <footer class="row fondBlancSansMarge">
        <div class="col displayFlexCenter">
            <a href="https://twitter.com/quentin_clavier" target="_blank" class="reseau"><i style="color: #4d4d4d;" class="fab fa-twitter fa-2x"></i></a>
            <a href="https://www.instagram.com/cl_quentin/?hl=fr" target="_blank" class="reseau"><i style="color: #4d4d4d;" id="instagram" class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/quentin-clavier/" target="_blank" class="reseau"><i style="color: #4d4d4d;" class="fab fa-linkedin fa-2x"></i></a>
        </div>
    </footer>
</div>
<a href="#" class="top" id="boutonRetour">Revenir<img class="fleche" src="images/monter.png" alt=""></a>
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>