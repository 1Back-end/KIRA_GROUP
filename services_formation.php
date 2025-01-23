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
    <section class="formation-section py-5 mt-5">
    <div class="container mt-5">
        <!-- Première section : Image à gauche, texte à droite -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                <img src="assets/images/formation-classroom1.png" alt="Formation en classe" class="section-image">
            </div>
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <h3>Formation de Base</h3>
                <p>Nous proposons des formations complètes sur les bases du tracking, idéales pour les débutants. Apprenez à maîtriser les concepts fondamentaux et les outils indispensables pour une gestion efficace de vos flottes et équipements.</p>
                <p>Nos sessions interactives vous garantissent un apprentissage de qualité et adapté à vos besoins.</p>
            </div>
        </div>

        <!-- Deuxième section : Texte à gauche, image à droite -->
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-duration="1000">
                <h3>Outils Avancés</h3>
                <p>Découvrez les outils de tracking avancés et apprenez à analyser des données en temps réel. Nos formations incluent des simulations pratiques pour vous permettre de prendre des décisions stratégiques grâce aux informations collectées.</p>
                <p>Avec nos experts, devenez un leader dans la gestion télématique.</p>
            </div>
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/formation-tools.png" alt="Formation sur outils avancés" class="section-image">
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
