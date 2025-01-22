<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRA GROUP - Acceuil</title>
    <?php include('components/partials.php'); ?>
</head>
<body>
<?php include('components/navbar.php'); ?>

<section class="hero-section py-5 mt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-sm-12 mb-3 d-flex flex-column justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                <div>
                    <h3 class="text-uppercase mb-3">
                        Innover, Suivre, Sécuriser.
                    </h3>
                    <p>
                        Des solutions de suivi GPS précises pour vos véhicules et flottes, couplées à une formation spécialisée pour une gestion optimale. Assurez la sécurité et l'efficacité de vos opérations avec nos technologies innovantes.
                    </p>
                </div>
                <div>
                    <a href="#services" class="btn_services mt-4" data-aos="zoom-in" data-aos-duration="800">Nos Services</a>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/img4.png" alt="Illustration Hero" class="img-fluid" data-aos="zoom-in" data-aos-duration="1200">
            </div>
        </div>
    </div>
</section>






<section class="services-section py-5">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Nos services phares</h2>
        <div class="row">
            <!-- Card 1 - Tracking -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="card shadow h-100 border-0 py-3">
                    <div class="card-body text-center bg-primary text-white">
                        <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Tracking</h5>
                        <p class="card-text">Suivi GPS précis pour véhicules et flottes.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Vidéosurveillance -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="card shadow h-100 border-0 py-3">
                    <div class="card-body text-center bg-secondary text-white">
                        <i class="fas fa-video fa-3x mb-3"></i>
                        <h5 class="card-title">Vidéosurveillance</h5>
                        <p class="card-text">Installation et gestion de systèmes de sécurité.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 - Formation -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="card shadow h-100 border-0 py-3">
                    <div class="card-body text-center bg-success text-white">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                        <h5 class="card-title">Formation</h5>
                        <p class="card-text">Apprenez les bases et les outils avancés du tracking.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 - Consultation -->
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="card shadow h-100 border-0 py-3">
                    <div class="card-body text-center bg-danger text-white">
                        <i class="fas fa-users-cog fa-3x mb-3"></i>
                        <h5 class="card-title">Consultation</h5>
                        <p class="card-text">Expertise en solutions de tracking automobile.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="testimonials-section py-5">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up" data-aos-duration="1000">Avis Clients</h2>
        <div class="row">
            <!-- Client 1 -->
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="testimonial-card text-center p-4 shadow">
                    <!-- <img src="assets/images/client1.jpg" alt="Client 1" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;"> -->
                    <p class="testimonial-text">"Grâce à leurs solutions de suivi GPS, j'ai pu optimiser la gestion de ma flotte de véhicules. L'intégration a été rapide et efficace. Un service exceptionnel !" </p>
                    <h5 class="client-name">John Doe</h5>
                    <!-- <p class="client-role">Propriétaire d'une entreprise de transport</p> -->
                </div>
            </div>
            
            <!-- Client 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="testimonial-card text-center p-4 shadow">
                    <!-- <img src="assets/images/client2.jpg" alt="Client 2" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;"> -->
                    <p class="testimonial-text">"Les formations qu'ils proposent m'ont permis de maîtriser le suivi GPS de manière approfondie. J'ai pu améliorer la sécurité de mes véhicules et réduire les coûts opérationnels."</p>
                    <h5 class="client-name">Sophie Martin</h5>
                    <!-- <p class="client-role">Responsable sécurité, Entreprise XYZ</p> -->
                </div>
            </div>

            <!-- Client 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="testimonial-card text-center p-4 shadow">
                    <!-- <img src="assets/images/client3.jpg" alt="Client 3" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;"> -->
                    <p class="testimonial-text">"Une équipe réactive et professionnelle. Grâce à leur service de vidéosurveillance, je me sens enfin en sécurité pour mes opérations quotidiennes." </p>
                    <h5 class="client-name">Marie Lefevre</h5>
                    <!-- <p class="client-role">Gérante, Entreprise de logistique</p> -->
                </div>
            </div>
        </div>
        <!-- CTA Section -->
       <!-- CTA Section avec image d'arrière-plan -->

   <!-- CTA Section -->
<div class="cta-section mt-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Section de l'image -->
            <div class="col-lg-6 col-sm-12 mb-3 cta-image" style="background-image: url('assets/images/img6.png'); background-size: cover; background-position: center; height: 100%; min-height: 300px;" data-aos="fade-right" data-aos-duration="1000">
            </div>

            <!-- Section du contenu -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <h3 class="cta-title mb-3" data-aos="fade-up" data-aos-duration="1000">
                    Prêt à sécuriser votre avenir ?
                </h3>
                <p class="cta-subtext mb-4" data-aos="fade-up" data-aos-duration="1000">
                Contactez-nous dès aujourd'hui pour découvrir comment nos solutions peuvent transformer votre gestion de flottes et améliorer votre sécurité. 
                Que vous soyez une petite entreprise ou un grand groupe, nous proposons des solutions personnalisées qui répondront à vos besoins spécifiques. 
               
                </p>
                <a href="pages/contact.php" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="1200">Nous contacter</a>
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