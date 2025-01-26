<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>KIRA GROUP - Services de Formation</title>
    <?php include('components/partials.php'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('components/navbar.php'); ?>
    <div class="training-section py-5 mt-5">
    <div class="container mt-5">
        <h3 class="text-center text-uppercase fw-bold mb-5">Nos Formations</h3>

        <!-- Formation en Tracking -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="fw-bold mb-3">Formation en Tracking</h4>
                <p>Maîtrisez les systèmes de géolocalisation avancés avec des fonctionnalités telles que le suivi en temps réel, le géorepérage, l’analyse des trajets et la gestion des données pour optimiser vos flottes.</p> <ul> <li>Installation et paramétrage des dispositifs de tracking</li> <li>Configuration des alertes et notifications personnalisées</li> <li>Amélioration des performances et optimisation des systèmes GPS</li> </ul> 
                <!-- <button class="btn btn-primary mt-3">En savoir plus</button> -->
            </div>
            <div class="col-lg-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/tracking-training.png" alt="Formation Tracking" class="img-fluid rounded">
            </div>
        </div>

        <!-- Formation en Vidéo Surveillance -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-sm-12 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="fw-bold mb-3">Formation en Vidéo Surveillance</h4>
                <p>Devenez expert en installation et gestion de systèmes de vidéosurveillance pour sécuriser domiciles et entreprises. Apprenez à configurer des caméras analogiques, IP ou solaires pour une protection optimale.</p>
                <ul>
                    <li>Installation et paramétrage des caméras de surveillance</li>
                    <li>Utilisation des systèmes DVR et NVR</li>
                    <li>Maintenance et dépannage des équipements</li>
                </ul>
                <!-- <button class="btn btn-primary mt-3">En savoir plus</button> -->
            </div>
            <div class="col-lg-6 col-sm-12 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                <img src="assets/images/video-surveillance-training.png" alt="Formation Vidéo Surveillance" class="img-fluid rounded">
            </div>
        </div>

        <!-- Formation en Entrepreneuriat -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="fw-bold mb-3">Formation en Entrepreneuriat</h4>
                Boostez vos compétences entrepreneuriales pour créer et gérer votre entreprise avec succès. Apprenez à concevoir un business plan solide, piloter votre activité et perfectionner votre stratégie commerciale.
                <ul>
                    <li>Création et gestion d’entreprise</li>
                    <li>Stratégies de marketing et vente</li>
                    <li>Planification financière et gestion des risques</li>
                </ul>
                <!-- <button class="btn btn-primary mt-3">En savoir plus</button> -->
            </div>
            <div class="col-lg-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/entrepreneurship-training.png" alt="Formation Entrepreneuriat" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>



<?php include('components/footer.php'); ?>







    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
