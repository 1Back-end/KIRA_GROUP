<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>KIRA GROUP - À propos</title>

    <?php include('components/partials.php'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('components/navbar.php'); ?>

<section class="about-section py-5 mt-5">
    <div class="container mt-5">
        <div class="row">
            <!-- Section À propos de nous -->
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                <h3>À propos de nous</h3>
                <p>Avec plus de 10 ans d'expérience, nous sommes spécialisés dans la sécurité, le tracking, la vidéosurveillance, la formation, et la consultation télématique. Nous développons des solutions innovantes et efficaces pour garantir une sécurité optimale, une gestion de flotte performante et une surveillance en temps réel. Nos formations et conseils stratégiques permettent de maximiser l'efficacité des équipes et de gérer intelligemment vos véhicules et équipements. Travailler avec nous, c'est opter pour une approche sur-mesure, axée sur l'innovation et la fiabilité.</p>
                <a href="contact.php" class="btn-contact btn-lg mt-3">
                    Nous contacter
                </a>
            </div>

            <!-- Section Image -->
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/about.png" alt="Équipe en action" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>



<section class="mission-section py-5">
    <div class="container">
        <h3 class="mb-3" data-aos="fade-up" data-aos-duration="1000">Nos Missions et Visions</h3>

        <div class="row">
            <!-- Mission Card -->
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="card shadow border-0 h-100 py-3 mission-card">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center">Missions</h5>
                        <p class="card-text">Apporter des solutions de sécurité innovantes accessibles à tous. Nous combinons expertise et technologies avancées pour garantir une protection optimale à nos clients, que ce soit pour la gestion de la sécurité, le tracking ou les services de formation. Nos solutions sont conçues pour s’adapter à chaque besoin spécifique tout en restant accessibles et efficaces.</p>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="card shadow border-0 h-100 py-3 vision-card">
                    <div class="card-body p-4">
                        <h5 class="card-title text-center">Visions</h5>
                        <p class="card-text">Créer un monde plus sûr grâce à la technologie. Nous croyons fermement qu’avec l'innovation, la technologie peut jouer un rôle clé dans la construction d'un avenir sécurisé. Nous aspirons à transformer le secteur de la sécurité avec des solutions intelligentes et efficaces qui répondent aux besoins de demain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_valeurs py-5">
    <div class="container">
        <h3 class="mb-3">Nos Valeurs</h3>

        <div class="row">
            <!-- Card Innovation -->
            <div class="col-lg-4 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="card card_valeur shadow p-3 border-0 h-100">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="fa fa-rocket fa-3x mr-3" style="color: #215191;"></i>
                            <h5 class="card-title text-uppercase">Innovation</h5>
                        </div>
                        <p class="card-text">Nous nous engageons à apporter des solutions innovantes qui répondent aux besoins spécifiques de nos clients et qui sont en phase avec l'évolution technologique.</p>
                    </div>
                </div>
            </div>

            <!-- Card Fiabilité -->
            <div class="col-lg-4 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="card card_valeur shadow p-3 border-0 h-100">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="fa fa-check-circle fa-3x mr-3" style="color: #215191;"></i>
                            <h5 class="card-title text-uppercase">Fiabilité</h5>
                        </div>
                        <p class="card-text">Nous garantissons une fiabilité absolue dans toutes nos solutions et services, afin que nos clients puissent avoir confiance en nos produits et engagements.</p>
                    </div>
                </div>
            </div>

            <!-- Card Service Client -->
            <div class="col-lg-4 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="card card_valeur shadow p-3 border-0 h-100">
                    <div class="card-body text-center">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="fa fa-users fa-3x mr-3" style="color: #215191;"></i>
                            <h5 class="card-title text-uppercase">Service client</h5>
                        </div>
                        <p class="card-text">Nous mettons un point d'honneur à offrir un service client de qualité, réactif et à l'écoute des besoins de nos clients, en leur apportant des solutions sur mesure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('components/footer.php'); ?>


<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
