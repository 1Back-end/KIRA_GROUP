<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>KIRA GROUP - Contact</title>
    <?php include('components/partials.php'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('components/navbar.php'); ?>

    <section class="videosurveillance-section py-5 mt-5">
    <div class="container mt-5">
        <!-- Première Section : Texte à gauche, Image à droite -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                <h3>Installation de Systèmes de Sécurité</h3>
                <p>Nous offrons des solutions complètes en vidéosurveillance adaptées à vos besoins. De l'installation des caméras à la gestion de vos systèmes de sécurité, nous vous assurons une protection optimale et une surveillance en temps réel de vos installations.</p>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/videosurveillance-1.png" alt="Vidéosurveillance" class="img-fluid section-image rounded">
            </div>
        </div>

        <!-- Deuxième Section : Texte en haut, Image en bas -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <h3>Gestion et Suivi</h3>
                <p>Nous offrons un service de gestion centralisée de vos systèmes de vidéosurveillance, permettant un suivi en temps réel via une interface intuitive et sécurisée. Accédez aux enregistrements, recevez des alertes instantanées et assurez la protection optimale de vos locaux avec Kira Group.</p>
            </div>

            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                <img src="assets/images/videosurveillance-2.png"  alt="Suivi vidéosurveillance" class="img-fluid section-image rounded">
            </div>
        </div>
    </div>
</section>

<?php include('components/footer.php'); ?>






    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
