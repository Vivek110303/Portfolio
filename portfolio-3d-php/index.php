<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio — Vivek Madhak</title>
    <meta name="description" content="Full-stack developer portfolio with 3D tilt effects, projects, and contact form powered by PHP & MySQL." />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true">
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top glass-blur">
        <div class="container">
            <a class="navbar-brand fw-bold text-gradient" href="#home">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><i class="fa-regular fa-user"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills"><i class="fa-solid fa-code"></i> Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects"><i class="fa-solid fa-layer-group"></i> Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><i class="fa-regular fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HERO -->
    <section id="home" class="section-hero">
        <div class="container text-center">
            <h1 class="display-3 fw-bolder lh-1 text-gradient" data-aos="zoom-in">Vivek Madhak</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">
                Web Developer </br>
                specializing in modern web technologies including
                <b>HTML, CSS, JavaScript, PHP, MySQL, WordPress, jQuery,</b> and <b>Bootstrap</b>.
            </p>
            <div class="d-flex gap-3 justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <a href="#projects" class="btn btn-primary btn-lg shadow lift">View My Work</a>
                <!-- <a href="php/download_cv.php" class="btn btn-outline-primary btn-lg shadow">
                    <i class="fa-solid fa-download me-2"></i>Download CV
                </a> -->
            </div>
            <div class="d-flex gap-3 justify-content-center mt-4 social">
                <a class="icon-btn" href="https://github.com/Vivek110303" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                <a class="icon-btn" href="https://www.linkedin.com/in/vivekkumar-madhak/" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a class="icon-btn" href="https://x.com/Madhak_Vivek" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
        <!-- floating shapes -->
        <div class="shape s1"></div>
        <div class="shape s2"></div>
        <div class="shape s3"></div>
    </section>
    <!-- ABOUT -->
    <section id="about" class="py-5 bg-body-tertiary">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Profile Card -->
                <div class="col-lg-5">
                    <div class="card border-0 shadow-2xl tilt" data-tilt data-tilt-max="8" data-aos="fade-right">
                        <img src="assets/img/vicky.jpeg" class="w-100 rounded-top" alt="Profile photo" />
                        <div class="card-body text-center">
                            <h3 class="mb-0">Vivek Madhak</h3>
                            <span class="text-primary">Web Developer</span>
                        </div>
                    </div>
                </div>
                <!-- About Text -->
                <div class="col-lg-7" data-aos="fade-left">
                    <h2 class="mb-3 fw-bold text-gradient">About Me</h2>
                    <p>
                    - I am a passionate Web Developer and Data Analyst specializing in creating clean, responsive, and user-friendly web applications. With proficiency in HTML, CSS, JavaScript, Python, PHP, and SQL, I build dynamic websites and data-driven solutions that solve real-world problems. <br/> - My projects range from developing full-featured management systems to crafting automated Python tools, showcasing my skills in both frontend and backend development.
                    <br/>- Currently pursuing a B.Tech in ICT, I am continuously enhancing my technical expertise through internships and certifications in web development and problem-solving. <br/>- I thrive on challenges and enjoy turning complex ideas into intuitive and efficient digital experiences. <br/>- This website serves as a showcase of my skills, projects, and professional journey, demonstrating my commitment to growth and excellence in software development.
                    Let me know if you want it longer, themed for specific roles, or simplified for a particular audience!
                    </p>
                </div>
            </div>

            <!-- Education Section Below About -->
            <div id="education" class="mt-5">
                <h2 class="fw-bold text-center mb-4">Education</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="edu-card-3d p-4 h-100">
                                    <h5 class="mb-1">B.Tech in ICT (Pursuing)</h5>
                                    <p class="mb-1 text-muted">Adani University</p>
                                    <small class="text-secondary">Sep 2023 – May 2026</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="edu-card-3d p-4 h-100">
                                    <h5 class="mb-1">Diploma in Information Technology</h5>
                                    <p class="mb-1 text-muted">Government Polytechnic, Ahmedabad</p>
                                    <small class="text-secondary">May 2020 – May 2023</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="edu-card-3d p-4 h-100">
                                    <h5 class="mb-1">10th Board</h5>
                                    <p class="mb-1 text-muted">Shree Brahmanand Vidya Mandir, Chaparda</p>
                                    <small class="text-secondary">Jun 2017 – Apr 2018</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>

    .col-lg-7[data-aos="fade-left"] {
    background: #fff;
    border-radius: 18px;
    padding: 2.5rem 2.5rem 2rem 2.5rem;
    box-shadow:
        8px 8px 25px rgba(0, 0, 0, 0.12),
        -8px -8px 25px rgba(255, 255, 255, 0.7);
    transition: all 0.3s ease;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    line-height: 1.7;
    position: relative;
    max-width: 700px;
}

.col-lg-7[data-aos="fade-left"]:hover {
    box-shadow:
        14px 14px 38px rgba(0, 0, 0, 0.18),
        -14px -14px 38px rgba(255, 255, 255, 0.9);
    transform: translateY(-6px);
}

.col-lg-7[data-aos="fade-left"] h2 {
    font-weight: 900;
    font-size: 2.5rem;
    color: #6b5bde;
    margin-bottom: 1.5rem;
}

.col-lg-7[data-aos="fade-left"] p {
    margin-bottom: 1.2rem;
    padding-left: 1.6rem;
    position: relative;
    font-size: 1.1rem;
}



/* Responsive adjustments */
@media (max-width: 991.98px) {
    .col-lg-7[data-aos="fade-left"] {
        max-width: 100%;
        padding: 2rem 1.5rem;
        font-size: 1rem;
    }
    .col-lg-7[data-aos="fade-left"] p {
        font-size: 1rem;
        padding-left: 1.4rem;
    }
    .col-lg-7[data-aos="fade-left"] p::before {
        font-size: 1.3rem;
    }
}

    /* Neumorphism 3D effect for Education Cards */
    .fw-bold text-center mb-4{
        color: purple;
    }
    .edu-card-3d {
        position: relative;
        padding: 20px;
        margin: 10px;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        margin-top: 30px;
    }
    .edu-card-3d {
        background: #fff;
        border-radius: 18px;
        border: 1.5px solid #ede7e2;
        box-shadow:
            8px 8px 24px #e1dedb,
            -8px -8px 24px #f9f6f3,
            0 2px 12px rgba(160, 82, 45, 0.09);
        transition: box-shadow 0.3s, transform 0.3s;
        /* Optional: left accent bar */
        border-left: 6px solid #a0522d;
    }

    .edu-card-3d:hover {
        box-shadow:
            14px 14px 38px #dbd3cc,
            -8px -8px 28px #f3eee7,
            0 8px 24px rgba(160, 82, 45, 0.19);
        transform: translateY(-5px) scale(1.033);
    }

    .edu-card-3d h5 {
        color: #a0522d;
        font-weight: 600;
    }

    .edu-card-3d p,
    .edu-card-3d small {
        color: #555;
    }
    .edu-card-3d small {
        font-size: 0.9rem;
        color: #888;
    }
    /* Add bottom margin and padding to About Me box */
.col-lg-7[data-aos="fade-left"] {
    margin-bottom: 0rem; /* adds space below About Me box */
    padding-bottom: 3rem; /* more padding inside bottom */
}

/* Adjust container vertical padding */
#about .container {
    padding-top: 0rem;
    padding-bottom: 0rem;
}

/* Reduce excessive top margin on Education */
#education {
    margin-top: 2.5rem; /* reduced from 60px */
    padding-top: 3rem;
    margin-bottom: 0%;
}

/* Optional: slightly reduce margin on education cards for compactness */
.edu-card-3d {
    margin-top: 1.5rem; /* reduced from 30px */
    margin-bottom: 1.5rem;
}

/* Optional: add a subtle separator line between About and Education */
#about .container::after {
    content: "";
    display: block;
    width: 60%;
    height: 1.5px;
    background: #ddd;
    margin: 0 auto 3rem auto;
    border-radius: 2px;
    opacity: 0.6;
}

    </style>


    <!-- SKILLS -->
    <section id="skills" class="py-5 fixed-skills">
        <div class="container">
            <h2 class="fw-bold text-gradient text-center mb-4">Skills & Expertise</h2>
            <ul class="nav nav-pills justify-content-center gap-2 mb-4" id="skillTabs" role="tablist">
                <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#front">Frontend</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#back">Backend</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tools">Tools</button></li>
            </ul>
            <div class="tab-content">
                <div id="front" class="tab-pane fade show active">
                    <div class="row g-4">
                        <?php
                            $frontend = [
                                ["HTML",95,"fa-brands fa-html5"],
                                ["CSS",90,"fa-brands fa-css3-alt"],
                                ["JavaScript",80,"fa-brands fa-square-js"],
                                ["jQuery",85,"fa-solid fa-code"],
                                ["Bootstrap",92,"fa-brands fa-bootstrap"]
                            ];
                            foreach ($frontend as $s) {
                                echo '<div class="col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 skill-card tilt" data-tilt data-tilt-max="8" data-aos="zoom-in">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                <i class="'.$s[2].' fs-3"></i>
                                                <h5 class="mb-0">'.$s[0].'</h5>
                                            </div>
                                            <div class="progress" role="progressbar" aria-valuenow="'.$s[1].'" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: '.$s[1].'%;"></div>
                                            </div>
                                            <small class="text-muted">Proficiency '.$s[1].'%</small>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
                <div id="back" class="tab-pane fade">
                    <div class="row g-4">
                        <?php
                            $backend = [
                                ["PHP",90,"fa-brands fa-php"],
                                ["MySQL",88,"fa-solid fa-database"],
                                ["Python",85,"fa-brands fa-python"],
                                ["REST APIs",80,"fa-solid fa-plug"],
                            ];
                            foreach ($backend as $s) {
                                echo '<div class="col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 skill-card tilt" data-tilt data-tilt-max="8">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                <i class="'.$s[2].' fs-3"></i>
                                                <h5 class="mb-0">'.$s[0].'</h5>
                                            </div>
                                            <div class="progress"><div class="progress-bar" style="width: '.$s[1].'%"></div></div>
                                            <small class="text-muted">Proficiency '.$s[1].'%</small>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
                <div id="tools" class="tab-pane fade">
                    <div class="row g-4">
                        <?php
                            $tools = [
                                ["Git & GitHub",80,"fa-brands fa-git-alt"],
                                ["WordPress",85,"fa-brands fa-wordpress"]
                            ];
                            foreach ($tools as $s) {
                                echo '<div class="col-md-6 col-lg-4">
                                    <div class="card h-100 border-0 skill-card tilt" data-tilt data-tilt-max="8">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3 mb-2">
                                                <i class="'.$s[2].' fs-3"></i>
                                                <h5 class="mb-0">'.$s[0].'</h5>
                                            </div>
                                            <div class="progress"><div class="progress-bar" style="width: '.$s[1].'%"></div></div>
                                            <small class="text-muted">Proficiency '.$s[1].'%</small>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="py-5 bg-body-tertiary">
        <div class="container">
            <h2 class="fw-bold text-gradient text-center mb-4">Projects</h2>
            <div class="row g-4">
            <?php
$projects = [
    [
        "Food Junction", 
        "Food Junction a modern, responsive, and beautifully designed landing page for a healthy food delivery service. Built with HTML and CSS (with a touch of Ionicons), this landing page showcases the features, cities, plans, testimonials, and contact form for a fictional food delivery company.", 
        "https://github.com/Vivek110303/Food-Junction",
        "assets/img/foods.png"
    ],
    [
        "Contact Form Using PHP", 
        "A simple, responsive contact form web application built with HTML, CSS, JavaScript, and PHP for backend message handling and MySQL database integration.", 
        "https://github.com/Vivek110303/Contact-form-php-",
        "assets/img/logo.jpeg"
    ],
    [
        "CODSOFT Internship", 
        "Worked on developing Python-based command-line applications focusing on logic building, user interaction, and clean code structure. Completed the following tasks.", 
        "https://github.com/Vivek110303/CODSOFT",
        "assets/img/pythons.png"
    ]
];

foreach ($projects as $p) {
    echo '<div class="col-md-6 col-lg-4 mb-4">
        <div class="card project-card h-100 shadow-sm">
            <img src="'.$p[3].'" class="card-img-top" alt="'.$p[0].'">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">'.$p[0].'</h5>
                <p class="card-text text-muted">'.$p[1].'</p>
                <div class="mt-auto text-center">
                    <a href="'.$p[2].'" class="btn btn-primary px-4">View</a>
                </div>
            </div>
        </div>
    </div>';
}
?>
            </div>
        </div>
    </section>

<!-- Contact Section -->
<footer>
<section id="contact" class="py-5 contact-section">
    <div class="container">
        <h2 class="fw-bold text-center mb-5 text-light">Get In Touch</h2>
        <div class="row g-4 align-items-stretch">
            <!-- Contact Info Box -->
            <div class="col-lg-5">
                <div class="contact-box h-100">
                    <div class="card-body">
                        <h4 class="mb-3 fw-bold">Let’s Work Together</h4>
                        <p class="text-muted">Need a custom website, WordPress development, or full‑stack app?</p>
                        <div class="d-grid gap-3 mt-4">
                            <div class="info-tile"><i class="fa-regular fa-envelope me-2"></i> madhakvivek4301@gmail.com</div>
                            <div class="info-tile"><i class="fa-solid fa-phone me-2"></i> +91 91065 80376</div>
                            <div class="info-tile"><i class="fa-solid fa-location-dot me-2"></i> Ahmedabad, Gujarat</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Box -->
            <div class="col-lg-7">
                <div class="contact-box h-100 text-center">
                    <div class="card-body">
                        <!-- Profile Image -->
                        <img src="assets/img/vicky.jpeg" alt="Profile"
                                class="rounded-circle mb-3 profile-img" width="120">

                        <!-- Profile Info -->
                        <h4 class="fw-bold mb-1">Vivek Madhak</h4>
                        <p class="text-muted">Frontend Developer | Python Enthusiast</p>

                        <!-- About -->
                        <p class="small text-light">
                            Passionate about crafting sleek UI experiences, exploring cutting‑edge web tech, 
                            and delivering scalable solutions. Always eager to take on challenges.
                        </p>
                        <!-- Buttons -->
                        <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                            <a href="https://github.com/Vivek110303" target="_blank" class="btn social-btn github">
                            <i class="fa-brands fa-github me-2"></i> GitHub
                            </a>
                            <a href="https://www.linkedin.com/in/vivekkumar-madhak/" target="_blank" class="btn social-btn linkedin">
                            <i class="fa-brands fa-linkedin me-2"></i> LinkedIn
                            </a>
                            <a href="http://localhost/portfolio/portfolio-3d-php/#contact" class="btn social-btn portfolio">
                            <i class="fa-solid fa-globe me-2"></i> Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
    /* WHOLE SECTION BACKGROUND */
    .contact-section {
        background: linear-gradient(135deg, rgba(42, 31, 26, 0.95), rgba(62, 44, 36, 0.9)); 
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    /* Semi-Transparent Glass Boxes */
    .contact-box {
        background: rgba(245, 235, 230, 0.15); /* Light beige transparent */
        border-radius: 16px;
        backdrop-filter: blur(12px);
        box-shadow: 0 8px 22px rgba(0,0,0,0.5), inset 0 2px 6px rgba(255,255,255,0.08);
        padding: 25px;
        transition: all 0.3s ease;
        color: #f8f8f8;
    }
    .contact-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 32px rgba(0,0,0,0.65), inset 0 3px 8px rgba(255,255,255,0.1);
    }

    /* Profile Image */
    .profile-img {
        border: 3px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 5px 15px rgba(0,0,0,0.5);
    }
    .profile-img:hover {
        transform: scale(1.08);
        box-shadow: 0 12px 28px rgba(0,0,0,0.7);
    }

    /* Buttons */
    .social-btn {
        border-radius: 30px;
        padding: 10px 20px;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        color: #fff;
    }
    .social-btn.github {
        background: #2d2d2d;
    }
    .social-btn.github:hover {
        background: #111;
        transform: scale(1.07);
    }
    .social-btn.linkedin {
        background: #0a66c2;
    }
    .social-btn.linkedin:hover {
        background: #004182;
        transform: scale(1.07);
    }
    .social-btn.portfolio {
        background: #a0522d; /* lighter brown */
    }
    .social-btn.portfolio:hover {
        background: #5a2d0c;
        transform: scale(1.07);
    }

    /* Info Tiles */
    .info-tile {
        padding: 12px 15px;
        border-radius: 10px;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.12);
        font-size: 0.95rem;
        transition: all 0.3s;
        color: #f1f1f1;
    }
    .info-tile:hover {
        transform: translateX(5px);
        background: rgba(255,255,255,0.15);
    }
</style>
</footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>