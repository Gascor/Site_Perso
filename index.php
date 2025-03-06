<?php include 'includes/header.php'; ?>

<main>
  <!-- SECTION COORDONNÉES -->
  <section id="coordonnees" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Coordonnées</h2>
    <div class="row">
      <div class="col-md-4">
        <p><strong>Date de naissance :</strong> 22 mai 2023 (21 ans)</p>
        <p><strong>Téléphone :</strong> 07 83 98 66 91</p>
        <p><strong>Email :</strong> 
          <a href="mailto:lucas-dasilvaferreira@hotmail.com">
            lucas-dasilvaferreira@hotmail.com
          </a>
        </p>
      </div>
      <div class="col-md-4">
        <p><strong>Adresse :</strong> 10, Rue Skellmor<br/>78370 Plaisir</p>
        <p><strong>LinkedIn :</strong> 
          <a href="https://linkedin.com/in/ton-profil" target="_blank">
            Mon Profil
          </a>
        </p>
        <p><strong>GitHub :</strong> 
          <a href="https://github.com/TonGitHub" target="_blank">
            TonGitHub
          </a>
        </p>
      </div>
      <div class="col-md-4">
        <p><strong>Permis :</strong> B (Véhicule disponible)</p>
        <p><strong>Situation :</strong> Étudiant BUT Informatique, UVSQ</p>
      </div>
    </div>
  </section>

  <!-- SECTION EXPÉRIENCE PROFESSIONNELLE -->
  <section id="experience" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Expérience Professionnelle</h2>
    <ul class="list-group">
      <li class="list-group-item">
        <h5>Stagiaire Développeur Full-Stack</h5>
        <p class="mb-1"><em>avril 2024 - juillet 2024</em> (Livinweb, Paris)</p>
        <p>Participation au développement front-end et back-end...</p>
      </li>
      <li class="list-group-item">
        <h5>Stagiaire Informatique</h5>
        <p class="mb-1"><em>juillet 2021 - août 2021</em> (Boulanger, Montigny)</p>
        <p>Installation de postes, assistance, etc.</p>
      </li>
    </ul>
  </section>

  <!-- SECTION FORMATION -->
  <section id="formation" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Formation</h2>
    <p><strong>BUT Informatique (2022 - 2025)</strong> à l'IUT de Vélizy-Rambouillet (UVSQ)</p>
    <p>Parcours : Développement Web, Algorithmique, Gestion de Bases de Données...</p>
  </section>

  <!-- SECTION COMPÉTENCES (AVEC LOGOS) -->
  <section id="competences" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Compétences Informatiques</h2>
    <div class="row text-center">
      <div class="col-6 col-md-2 mb-4">
        <img src="images/logo_html.png" alt="HTML" style="max-width: 60px;" />
        <p class="mt-2">HTML</p>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <img src="images/logo_css.png" alt="CSS" style="max-width: 60px;" />
        <p class="mt-2">CSS</p>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <img src="images/logo_js.png" alt="JavaScript" style="max-width: 60px;" />
        <p class="mt-2">JavaScript</p>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <img src="images/logo_php.png" alt="PHP" style="max-width: 60px;" />
        <p class="mt-2">PHP</p>
      </div>
    </div>
  </section>

  <!-- SECTION PROJETS (BANNIÈRES) -->
  <section id="projets" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Projets</h2>
    <div class="row">
      <!-- Projet 1 -->
      <div class="col-md-6 mb-4">
        <div class="card">
          <img
            src="images/projet1.jpg"
            class="card-img-top"
            alt="Bannière Projet 1"
            style="height: 200px; object-fit: cover;"
          />
          <div class="card-body">
            <h5 class="card-title">Projet 1 : Lorem Ipsum </h5>
            <p class="card-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
            <a href="#" class="btn btn-primary">Voir le projet</a>
          </div>
        </div>
      </div>
      <!-- Projet 2 -->
      <div class="col-md-6 mb-4">
        <div class="card">
          <img
            src="images/projet2.jpg"
            class="card-img-top"
            alt="Bannière Projet 2"
            style="height: 200px; object-fit: cover;"
          />
          <div class="card-body">
            <h5 class="card-title">Projet 2 : Application Mobile</h5>
            <p class="card-text">
              Développement d’une application mobile en React Native pour gérer un agenda...
            </p>
            <a href="#" class="btn btn-primary">Voir le projet</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION CENTRES D’INTÉRÊT -->
  <section id="centres-interet" class="container mb-5" data-aos="fade-up">
    <h2 class="mb-4">Centres d'Intérêt</h2>
    <ul>
      <li>Programmation</li>
      <li>Jeux vidéo</li>
      <li>Musique</li>
      <li>Sport (Foot, Basket)</li>
    </ul>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
