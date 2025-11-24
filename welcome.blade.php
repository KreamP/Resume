<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>John Mendoza Portfolio</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
  body {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    font-family: 'Segoe UI', sans-serif;
    color: #fff;
    overflow-x: hidden;
  }

  a { text-decoration: none; }

  /* NAVBAR */
  .navbar {
    background: rgba(15, 23, 42, 0.55) !important;
    backdrop-filter: blur(15px);
    border-bottom: 1px solid rgba(255,255,255,0.06);
    padding-top: 0.7rem !important;
    padding-bottom: 0.7rem !important;
  }
  .navbar-brand {
    color: #fff !important;
    font-size: 1.7rem;
    font-weight: 700;
  }
  .navbar-brand span { color: #10b981; }

  .nav-link {
    color: #d1d5db !important;
    margin-left: 20px;
    position: relative;
    font-weight: 500;
    transition: 0.3s ease;
  }
  .nav-link::after {
    content: "";
    width: 0%;
    height: 2px;
    background: #10b981;
    position: absolute;
    left: 0;
    bottom: -2px;
    transition: 0.3s;
  }
  .nav-link:hover {
    color: #fff !important;
  }
  .nav-link:hover::after,
  .active-nav::after {
    width: 100%;
  }
  .active-nav {
    color: #10b981 !important;
  }

  /* SECTION TITLES */
  .section-title {
    font-size: 2.4rem;
    font-weight: 700;
    margin-bottom: 2rem;
  }

  /* HOME */
  #home {
    height: 100vh;
    display: flex;
    align-items: center;
    padding-top: 70px;
    background: #0f172a;
  }
  #home h1 {
    font-size: 3.2rem;
    font-weight: 700;
    line-height: 1.2;
  }

  .home-btn {
    background: #10b981;
    color: #fff;
    padding: 0.8rem 1.9rem;
    font-weight: 600;
    border-radius: 10px;
    transition: 0.3s ease;
  }
  .home-btn:hover {
    background: #0d9467;
  }

  section {
    padding: 110px 0;
  }

  #about { background: #111827; }
  #project { background: #1e293b; }
  #contact { background: #111827; }

  /* PROJECT CARDS */
  .project-card {
    background: #0f172a;
    padding: 20px;
    border-radius: 15px;
    transition: 0.3s ease;
  }
  .project-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.5);
  }

  /* SOCIAL LINKS */
  .social-link {
    color: #fff;
    font-size: 1.6rem;
    transition: 0.3s ease;
  }
  .social-link:hover {
    color: #ffda79;
    transform: scale(1.2);
  }

  /* ---------------------------------------
     NAME HOVER EFFECT (3s Smooth Transition)
     --------------------------------------- */
  .hover-name {
    color: #10b981;
    font-weight: 700;
    position: relative;
    display: inline-block;
    cursor: pointer;
  }
  .hover-name .hover-text {
    position: absolute;
    top: 0;
    left: 0;
    white-space: nowrap;
    opacity: 0;
    transition: opacity 3s ease;
    color: #10b981;
  }
  .hover-name .default-text {
    transition: opacity 3s ease;
  }
  .hover-name:hover .default-text {
    opacity: 0;
  }
  .hover-name:hover .hover-text {
    opacity: 1;
  }
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home">JM<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active-nav" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HOME -->
<section id="home">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 text-center text-md-start mb-5 mb-md-0">
        <p style="color:#10b981; font-weight:500;">Hello Everyone</p>

        <h1>
          Hi,
          <span class="hover-name">
            <span class="default-text">I'm John Alfer Mendoza</span>
            <span class="hover-text">I'm a Full Stack Developer</span>
          </span>
        </h1>

        <p style="color:#94a3b8; margin:1rem 0;">
          A Full Stack Web Developer & Data Analyst from the Philippines,
          specializing in PHP, WordPress, Shopify, JavaScript — plus PowerBI,
          Excel, and Looker Studio.
        </p>

        <a href="#contact" class="home-btn">Get in Touch</a>
      </div>

      <div class="col-md-6 text-center">
        <img src="{{ asset('images/Mendoza.JPG') }}" alt="John Mendoza"
             style="width:80%; max-width:330px; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.5);">
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container text-center">
    <h2 class="section-title">About Me</h2>

    <div class="row align-items-center justify-content-between">
      <div class="col-md-6 mb-4 mb-md-0">
        <p style="color:#cbd5e1;">
          I'm a passionate Full Stack Developer with experience in modern web development,
          e-commerce platforms, and database management.
        </p>

        <p style="color:#cbd5e1;">
          I specialize in building scalable systems and delivering data-driven insights
          using analytics tools.
        </p>

        <a href="https://1drv.ms/b/c/3b3b023706dcb873/IQCcVOEp-EW4SLWX_5Uaswk5ATs8TWjanAnY_Icmr_-QWOM?e=P2gb1x"
           target="_blank"
           style="
             background:#10b981;
             padding:12px 28px;
             border-radius:30px;
             color:#fff;
             font-weight:600;
             display:inline-flex;
             align-items:center;
             gap:8px;">
          Download CV <i class="fa-solid fa-download"></i>
        </a>
      </div>

      <div class="col-md-5 text-center">
        <img src="{{ asset('images/work.png') }}" alt="Work Image"
             style="width:100%; max-width:420px; border-radius:20px; box-shadow:0 10px 30px rgba(0,0,0,0.5);">
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="project">
  <div class="container text-center">
    <h2 class="section-title">Projects</h2>

    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://via.placeholder.com/400x200" class="img-fluid rounded mb-3">
          <h5>Project 1</h5>
          <p>Short description of the project and technologies used.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="project-card">
          <img src="https://via.placeholder.com/400x200" class="img-fluid rounded mb-3">
          <h5>Project 2</h5>
          <p>Short description of the project and technologies used.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="container text-center">
    <h2 class="section-title">Contact Me</h2>

    <p><i class="fa-solid fa-envelope me-2 text-warning"></i>
      <a href="mailto:mendozajohnalfer2@gmail.com" class="text-warning">mendozajohnalfer2@gmail.com</a>
    </p>

    <p><i class="fa-solid fa-phone me-2 text-warning"></i>
      <a href="tel:+639156459683" class="text-warning">+63 915 645 9683</a>
    </p>

    <div class="d-flex justify-content-center gap-4 mt-3">
      <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
      <a href="#" class="social-link"><i class="fab fa-github"></i></a>
      <a href="https://www.facebook.com/spacer123" class="social-link"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/johnalfermendoza/" class="social-link"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</section>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>

</body>
</html>
