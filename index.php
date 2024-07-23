<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleaxl</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Tambahkan Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Aleaxl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-section text-center">
    <div class="container">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">We are committed to providing the best service.</p>
        <a href="#features" class="btn btn-primary btn-lg">Learn More</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="feature-item">
                    <i class="fa fa-cog fa-3x mb-3"></i>
                    <h4>Feature One</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item">
                    <i class="fa fa-cloud fa-3x mb-3"></i>
                    <h4>Feature Two</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item">
                    <i class="fa fa-lock fa-3x mb-3"></i>
                    <h4>Feature Three</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Farhan Maulana Syidiq, S.Ak</h1>
                <h2>About Us</h2>
                <p>Saya adalah seorang mahasiswa jurusan akuntansi dan saya memiliki sebagai web developer. Saat ini saya bekerja dibidang Digital Engineering</p>
            </div>
            <div class="col-lg-6">
                <img src="foto_me.jpg" class="img-fluid" alt="About Image">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section py-5">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <form class="contact-form mt-4" action="contact_process.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-3 bg-dark text-white text-center">
    <div class="container">
        <p>&copy; 2024 Aleaxl. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
