<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue sur le site web de MA+Corporate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">   

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* Container principal */
      .partner-carousel {
        width: 90%;
        margin: 0 auto;
        padding: 20px 0;
        background-color: #f9f9f9;
        text-align: center;
      }

      /* Swiper container */
      .swiper-container {
        width: 100%;
        overflow: hidden; /* Empêche le dépassement */
      }

      /* Bande des slides */
      .swiper-wrapper {
        display: flex; /* Affichage en ligne */
        align-items: center;
      }

      /* Slides */
      .swiper-slide {
        flex-shrink: 0; /* Empêche les slides de se réduire */
        width: auto; /* Adapte la taille à l'image */
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /* Logos */
      .swiper-slide img {
        max-width: 150px; /* Taille maximum des logos */
        height: auto;
        object-fit: contain; /* Conserve les proportions */
        transition: transform 0.3s ease-in-out;
      }

      /* Effet zoom sur le logo */
      .swiper-slide img:hover {
        transform: scale(1.1);
      }

      /* Flèches de navigation */
      .swiper-button-next,
      .swiper-button-prev {
        color: #333;
      }

      /* Pagination active */
      .swiper-pagination-bullet-active {
        background: #007bff;
      }

    </style>
    
    <!-- Custom styles for this template -->
    <link href="accueil/product.css" rel="stylesheet">
  </head>
  <body>
    
  <header class="site-header sticky-top py-1">
  <nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" width="40" height="40" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prestations.php">Nos prestations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="devis.php">Demander un devis</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">MA+ Corporate</h1>
      <p class="lead fw-normal">Nous concevons et construisons des applications web & mobile pour les grandes et petites entreprises.</p>
      <a class="btn btn-outline-secondary" href="prestations.php">En savoir plus...</a>
    </div>
    <div class="product-device">
      <img src="images/4.png" style="max-width: 90%; height: auto; margin:-40px; margin-right:30px;">
    </div>
    <div class="product-device product-device-2">
      <br></br>
      <img src="images/3.png" style="max-width: 175%; height: auto;">
    </div>
  </div>
    

  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h3 class="display-5">Transformer vos idées en succès, </h3>
        <p class="lead"><h1>c'est possible 😊 🎉 ❤️!!!</h1></p>

      </div>
      <div 
        class="bg-light shadow-sm mx-auto" style="width: 75%; height: 300px; border-radius: 21px 21px 0 0;">
        <img src="images/6.png" style="max-width: 101%; height: auto; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h5 class="display-5">Une expérience fluide sur tous les écrans</5>
        <p class="lead">Nos applications sont développées avec une approche responsive pour garantir une compatibilité parfaite sur tous les terminaux : mobile, tablette et desktop. Vos utilisateurs profiteront d’une interface claire et agréable, quel que soit l’appareil.</p>
      </div>
      <div 
        class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img src="images/7.png" style="max-width: 101%; height: auto; margin: -10px; border-radius: 1px 1px 0 0;">
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">MA+ Corporate</h2>
        <p class="lead">MA+ Corporate est une société d’intégrateur de solutions informatiques qui vous accompagne sur toutes les étapes de création de votre application: conception, développement, design et performance… Nos experts intègrent vos besoins métiers et élaborent vos applications sur toutes les plateformes.</p>
      </div>
      <div 
        class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img src="images/logo.png" style="max-width: 40%; height: auto; margin: 20px; border-radius: 1px 1px 0 0;">
      </div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Nous intervennons sur les stacks</h2>
        <p class="lead">Suivants.</p>
      </div>
      <div 
        class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img src="images/9.png" style="max-width: 80%; height: auto; margin: 20px; border-radius: 1px 1px 0 0;">
      </div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Nos valeurs</h2>
        <p class="lead">Nos valeurs sont au cœur de tout ce que nous entreprenons. Elles guident notre travail et notre engagement envers nos clients, partenaires et collaborateurs.</p>
      </div>
      <div 
        class="bg-body shadow-sm mx-auto" 
        style="width: 90%; height: 300px; border-radius: 21px 21px 0 0; display: grid; grid-template-columns: repeat(5, 1fr); align-items: center; text-align: center;">

        <div>
          <img src="images/cout.png" style="max-width: 50%; height: auto; margin: 10px 0;">
          <p class="lead"><u>Coût</u></p>
          <p style="color:#9600FF ;">Un engagement pour réaliser des solutions de qualité au meilleur coût.</p>
        </div>
        <div>
          <img src="images/rap.png" style="max-width: 60%; height: auto; margin: 10px 0;">
          <p class="lead"><u>Rapidité</u></p>
          <p style="color:#009CC5 ;">La rapidité au service de vos projets, sans compromis sur la qualité.</p>
        </div>
        <div>
          <img src="images/conf.png" style="max-width: 60%; height: auto; margin: 10px 0;">
          <p class="lead"><u>Confiance</u></p>
          <p style="color:#0161F4 ;">Construire une relation basée sur la confiance, la transparance et la sécurité.</p>
        </div>
        <div>
          <img src="images/inov.png" style="max-width: 50%; height: auto; margin: 10px 0;">
          <p class="lead"><u>L'innovation</u></p>
          <p style="color:#000 ;">L'innovation au cœur de nos solutions pour anticiper vos besoins.</p>
        </div>
        <div>
          <img src="images/hum.png" style="max-width: 50%; height: auto; margin: 10px 0;">
          <p class="lead"><u>L'humanisme</u></p>
          <p style="color:#008080 ;">Nous valorisons l'humain en plaçant le respect au cœur de nos interactions.</p>     
        </div>  
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Pourquoi choisir MA+ Corporate</h2>
        <p class="lead">MA+ Corporate est le partenaire idéal pour accompagner vos projets professionnels avec expertise, innovation et solutions sur mesure adaptées à vos besoins.😊</p>
      </div>
      <div 
        class="bg-body shadow-sm mx-auto" 
        style="width: 95%; height: auto; border-radius: 21px; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; text-align: left;">
        <div style="padding: 5px;">
          <p class="lead"; style="color:black ;"><b>1. Expertise et accompagnement sur mesure</b></p>
          <p>Notre équipe expérimentée vous accompagne à chaque étape avec des solutions personnalisées adaptées à vos besoins spécifiques. Nous assurons un suivi rigoureux pour maximiser vos résultats.</p>
        </div>
        <div style="padding: 10px;">
          <p class="lead"; style="color:black ;"><b>2. Innovation et performance</b></p>
          <p>MA+ Corporate mise sur des outils innovants et des stratégies performantes pour propulser votre entreprise. Notre approche est axée sur l'anticipation des défis du marché.</p>
        </div>
        <div style="padding: 10px;">
          <p class="lead"; style="color:black ;"><b>3. Engagement et transparence</b></p>
          <p>Nous plaçons la confiance et la transparence au cœur de nos relations. Avec MA+ Corporate, vous bénéficiez d'une communication claire et d'une collaboration solide pour atteindre vos objectifs.</p>
        </div>
        <div style="padding: 10px;">
          <p class="lead"; style="color:black ;"><b>4. Flexibilité et réactivité</b></p>
          <p>Dans un environnement en constante évolution, MA+ Corporate s’adapte à vos besoins et aux défis du marché. Notre agilité nous permet de vous proposer des solutions efficaces.</p>
        </div>  
      </div>
    </div>
  </div>

  <div class="d-md-flex w-100 my-md-3 ps-md-3">
<!-- Ce qu'ils disent de nous -->
<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="flex: 1; margin-right: 20px;">
    <div class="my-3 p-3">
        <h2 class="display-5">Ce qu'ils disent de nous</h2>
        <p class="lead">Bon à savoir🤩🥰.</p>
    </div>

    <div class="bg-body shadow-sm mx-auto" style="width: 100%; padding: 20px; border-radius: 21px 21px 0 0;">
        <!-- Message de confirmation -->
        <div id="message" style="color: red; margin-bottom: 15px; display: none;">
            <strong>Votre avis a bien été transmis et est en attente de validation.</strong>
        </div>

        <!-- Section pour afficher les avis validés -->
        <div id="reviews" style="display: flex; flex-direction: column; gap: 15px; overflow: hidden; padding: 10px;">
            <?php
            // Inclusion de la configuration MongoDB
            include 'config/config_nosql.php';

            try {
                // Requête pour récupérer les avis validés
                $cursor = $collection->find(
                    ['is_validated' => 1], // Filtre : uniquement les avis validés
                    ['sort' => ['created_at' => -1]] // Trier par date décroissante
                );

                // Affichage des avis validés avec des attributs data-index pour gérer l'animation
                foreach (iterator_to_array($cursor) as $index => $review) {
                    echo '<div class="review" style="padding: 10px; border-bottom: 1px solid #ccc; font-size: 16px; opacity: 0; display: none;" data-index="' . $index . '">';
                    echo '<h5><u style="color: #009BC5;">' . htmlspecialchars($review['visitor_name']) . '</u></h5>';
                    echo '<p><h5 style="color: #9600FF; font-family: \'Dancing Script\', cursive;">' . nl2br(htmlspecialchars($review['review'])) . '</h5></p>';
                    echo '</div>';
                }
            } catch (Exception $e) {
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </div>
        <!-- Formulaire pour ajouter un avis -->
        <h5>Donnez votre avis</h5>
        <form id="reviewForm">
            <label for="visitor_name">Nom/Pseudo :</label>
            <input type="text" id="visitor_name" name="visitor_name" required placeholder="Votre nom ou pseudo"
                style="width: 20%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">

            <label for="review">Avis :</label>
            <textarea id="review" name="review" required placeholder="Écrivez votre avis ici"
                style="width: 30%; padding: 8px; margin-bottom: -30px; border: 1px solid #ccc; border-radius: 5px;"></textarea>

            <button type="submit"
                style="width: 13%; padding: 8px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
                Soumettre
            </button>
        </form>
    </div>
</div>


<script>
    window.addEventListener("DOMContentLoaded", function () {
        const reviews = document.querySelectorAll('.review'); // Sélectionner tous les avis
        const totalReviews = reviews.length; // Nombre total d'avis
        let currentIndex = 0; // Indice du premier avis à afficher

        // Fonction pour afficher l'avis suivant
        function showNextReview() {
            // Cacher l'avis actuel
            reviews[currentIndex].style.display = 'none';

            // Passer à l'avis suivant (circularité)
            currentIndex = (currentIndex + 1) % totalReviews;  // Si on arrive à la fin, revenir au début

            // Afficher le nouvel avis
            reviews[currentIndex].style.display = 'block';
            reviews[currentIndex].style.opacity = 1; 
        }

        // Initialisation: afficher le premier avis
        if (reviews.length > 0) {
            reviews[currentIndex].style.display = 'block'; // Afficher le premier avis
            reviews[currentIndex].style.opacity = 1; 
        }

        // Lancer la boucle pour faire défiler les avis toutes les 13 secondes (13000ms)
        setInterval(showNextReview, 13000); 
    });
</script>




    <!-- Ils nous font confiance -->
    <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="flex: 1;">
        <div class="my-3 py-3">
            <h2 class="display-5">Ils nous font confiance</h2>
            <p class="lead">Partenaires & Collaborateurs</p>
        </div>

        <div class="bg-body shadow-sm mx-auto" style="width: 100%; height: 330px; border-radius: 21px 21px 0 0;">
            <div class="partner-carousel" style="width: 100%; height: 100%;">
                <!-- Carrousel Swiper -->
                <div class="swiper-container" style="width: 100%; height: 100%; margin:40px 0 0;">
                    <div class="swiper-wrapper">
                        <?php 
                            // Liste des logos des partenaires
                            $logos = [
                            "images/sage.png",
                            "images/dreals.png",
                            "images/plan.png",
                            "images/dcaf.png",
                            "images/iss.png",
                            "images/agropole.png",
                            "images/dinauss.png"
                            ];

                            // Boucle pour afficher les logos
                            foreach ($logos as $logo) {
                                echo '<div class="swiper-slide"><img src="' . $logo . '" alt="Logo Partenaire"></div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // Initialisation du carrousel Swiper
            const swiper = new Swiper('.swiper-container', {
                loop: true, // Défilement infini
                slidesPerView: 'auto', // Affiche tous les logos sur une ligne
                spaceBetween: 20, // Espace entre les logos
                autoplay: {
                    delay: 1, // Pas de pause
                    disableOnInteraction: false,
                },
                speed: 3000, // Vitesse pour un défilement fluide
                freeMode: true, // Défilement continu sans arrêt
            });
        </script>
    </div>
</div>

</main>

<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
    <a class="py-2" href="index.php" aria-label="Product">
      <img src="images/logo.png" width="30" height="30">
    </a>
      <small class="d-block mb-3 text-muted">&copy; 2016–2025</small>
    </div>
    <div class="col-6 col-md">
      <h5>Menu Bas</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="index.php">Accueil</a></li>
        <li><a class="link-secondary" href="prestations.php">Nos Prestations</a></li>
        <li><a class="link-secondary" href="devis.php">Demander un devis</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Liens Utiles</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="mentionslegales.php">Mentions Légales</a></li>
        <li><a class="link-secondary" href="rgpd.php">Loi RGPD</a></li>
        <li><a class="link-secondary" link href="https://www.cnil.fr/fr" target="_blank" rel="noopener noreferrer">CNIL</a></li>
      </ul>
    </div>
  </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#reviewForm').on('submit', function(event) {
            event.preventDefault(); // Empêche la soumission classique du formulaire

            var formData = {
                visitor_name: $('#visitor_name').val(),
                review: $('#review').val(),
            };

            $.ajax({
                url: 'submit_review.php',  // Le script PHP pour traiter l'avis
                type: 'POST',
                data: formData,
                success: function(response) {
                    if(response == 'success') {
                        $('#message').show();  // Afficher le message de confirmation
                        $('#reviewForm')[0].reset();  // Réinitialiser le formulaire
                    } else {
                        alert('Erreur lors de la soumission de votre avis.');
                    }
                },
                error: function() {
                    alert('Une erreur est survenue.');
                }
            });
        });
    });
</script>
     
  </body>
</html>
