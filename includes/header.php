<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio - Lucas Da Silva Ferreira</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- AOS CSS pour animations au scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <!-- Ton style personnalisé -->
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }
    /* Header fixe et compact */
    .fixed-header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: #343a40; /* couleur sombre */
      padding: 0.5rem 1rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .fixed-header .navbar-brand {
      font-size: 1.25rem;
      margin-right: auto;
    }
    .fixed-header .nav-link {
      padding: 0.5rem 1rem;
    }
    /* Ajouter un spacer pour éviter que le contenu soit caché sous le header fixe */
    .header-spacer {
      height: 60px; /* Ajuste en fonction de la hauteur du header */
    }
  </style>
</head>
<body>
  <header class="fixed-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#presentation">Présentation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#a-propos">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Un spacer pour que le contenu ne soit pas masqué par le header fixe -->
  <div class="header-spacer"></div>
