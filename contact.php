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

   <!-- Contact Section -->
<div class="contact-section py-5 mt-5">
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Description -->
            <div class="col-lg-6 col-sm-12 mb-3">
                <h2 class="mb-3">Contactez-nous</h2>
                <p class="mb-3">
                    Vous avez des questions ou des préoccupations concernant la surveillance de véhicules, le tracking GPS, ou tout autre service lié à la gestion de flottes ? 
                    Notre équipe est là pour vous accompagner avec des solutions fiables et adaptées à vos besoins.
                </p>
                <p class="mb-3">
                    Faites-nous part de vos défis, et nous trouverons ensemble des moyens innovants pour optimiser votre gestion et améliorer la sécurité.
                </p>
            </div>
            <!-- Image -->
            <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-left" data-aos-duration="1000">
                <img src="assets/images/contact_image.png" alt="Illustration Hero" class="img-fluid rounded" data-aos="zoom-in" data-aos-duration="1200">
            </div>
        </div>
    </div>
</div>
<!-- Info Section -->
<div class="info-section py-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Adresse -->
            <div class="col-lg-4 col-sm-12">
                <div class="card shadow-sm p-3 border-0 h-100">
                    <div class="d-flex align-items-center">
                        <div class="icon-container bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-geo-alt-fill fs-3"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Adresse</h5>
                            <p class="mb-0">123 Rue de l'Entreprise, Yaoundé, Cameroun</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 col-sm-12">
                <div class="card shadow-sm p-3 border-0 h-100">
                    <div class="d-flex align-items-center">
                        <div class="icon-container bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-envelope-fill fs-3"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">contact@votredomaine.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Téléphone -->
            <div class="col-lg-4 col-sm-12">
                <div class="card shadow-sm p-3 border-0 h-100">
                    <div class="d-flex align-items-center">
                        <div class="icon-container bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-telephone-fill fs-3"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Téléphone</h5>
                            <p class="mb-0">+237 6 12 34 56 78</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-info py-5">
    <div class="container">
        <div class="col-lg-6 col-sm-12 mb-3">

        </div>


        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="card shadow-sm p-3 border-0">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom et Prénom *</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone *</label>
                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message *</label>
                        <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block btn-lg btn-responsive">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

</div>
<!-- Footer -->
  <?php include('components/footer.php'); ?>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init();
        });
    </script>
</body>
</html>
