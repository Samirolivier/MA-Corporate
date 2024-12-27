<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Demander un devis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">   

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
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
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prestations.php">Nos prestations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="devis.php">Demander un devis</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
    
<main>
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/devis.png" alt="" width="100" height="90">
    <h1 class="display-5 fw-bold">Demander un Devis</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Nous sommes spécialisés dans la création d’applications web, mobiles, et dans l’intégration de solutions SAGE adaptées à vos besoins. Confiez-nous vos idées et laissez-nous vous proposer une solution innovante, rapide et efficace.</p>
    </div>
    <div class="container col-xl-1 col-xxl-10 px-8 py-10">
        <div class="px-4 py-5 my-5 text-center">
          <h3 class="display-8 fw-bold lh-1 mb-3 text-center mb-4" style=color:#8031A9;>Besoin d’une solution pour vos projets?</h3>
          <p class="col-lg-10 fs-4"><h4><i>Demandez votre devis personnalisé dès aujourd’hui !</i></h4></p>
          <p style=font-size:15px;>C’est simple, rapide, et totalement gratuit. Nos experts analyseront vos besoins et vous fourniront une estimation claire et transparente.</p>
        </div>
        <?php
// Vérification des messages de confirmation ou d'erreur
$successMessage = isset($_GET['success']) && $_GET['success'] == 1 ? "Demande de devis envoyée avec succès !" : null;
$errorMessage = isset($_GET['error']) ? urldecode($_GET['error']) : null;
?>
        <div class="col-md-10 mx-auto col-lg-15">
        <?php if ($successMessage): ?>
        <div class="alert alert-success text-center" role="alert">
          <?= htmlspecialchars($successMessage) ?>
        </div>
      <?php endif; ?>

      <?php if ($errorMessage): ?>
        <div class="alert alert-danger text-center" role="alert">
          <?= htmlspecialchars($errorMessage) ?>
        </div>
      <?php endif; ?>

      <form action="process_devis.php" method="POST" class="devis-form p-4 border rounded-3 bg-light">
    <h2 class="text-center mb-4"><u>Demande de Devis</u></h2>

    <!-- Champ Nom -->
    <div class="mb-3 text-start">
      <label for="nom" class="form-label">Nom* :</label>
      <input type="text" class="form-control" id="nom" name="nom" required placeholder="Votre nom">
    </div>

    <!-- Champ Prénom -->
    <div class="mb-3 text-start">
      <label for="prenom" class="form-label">Prénom* :</label>
      <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Votre prénom">
    </div>

    <!-- Champ Nom de l'entreprise -->
    <div class="mb-3 text-start">
      <label for="nom_entreprise" class="form-label">Nom de l'entreprise :</label>
      <input type="text" class="form-control" id="nom_entreprise" name="nom_entreprise" placeholder="Nom de votre entreprise">
    </div>

    <!-- Champ Email -->
    <div class="mb-3 text-start">
      <label for="email" class="form-label">Email* :</label>
      <input type="email" class="form-control" id="email" name="email" required placeholder="Votre adresse email">
    </div>

    <!-- Champ Téléphone -->
    <div class="mb-3 text-start">
      <label for="telephone" class="form-label">Téléphone* :</label>
      <input type="tel" class="form-control" id="telephone" name="telephone" required placeholder="Votre numéro de téléphone">
    </div>

    <!-- Champ Détail de la demande -->
    <div class="mb-3 text-start">
      <label for="detail_demande" class="form-label">Détail de la demande* :</label>
      <textarea class="form-control" id="detail_demande" name="detail_demande" required placeholder="Expliquez votre besoin" rows="4"></textarea>
    </div>

    <!-- Bouton de soumission -->
    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Envoyer la demande</button>
    </div>

    <small class="d-block text-muted mt-3 text-center">Tous les champs avec * sont obligatoires</small>
  </form>
</div>

      </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
