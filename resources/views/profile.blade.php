    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Portofolio Websites</title>
    </head>
    <body>
        <header>
            <a href="#" class="logo">Rayasa</a>
            <nav class="navbar">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Certifications</a>
                <a href="#">Projects</a>
                <a href="#">Contact</a>
            </nav>
        </header>
            <section class="home">
                <div class="Profile">
                    <img src="{{ asset('images/Profile.jpg') }}" alt="Profile Image">
                </div>
                <div class="Home-content">
                    <h1>Hi, It's <span>Rayasa</span></h1>
                    <h2 class="typing-text">I'm a <span>DevSecOps</span></h3>
                    <p>Software Engineering student at SMKN 1 Bantul</p>
                    <div class="social-icon">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/RyaMight"><i class="fab fa-github"></i></a>
                        <a href="#"><i class = "fab fa-discord"></i></a>
                    </div>
                    <a href="https://www.linkedin.com/in/arya-saputra-nugraha-313b87428/" class="btn">Hire Me</a>
                </div>
            </section>
            <section class="About">
                <div class="About-content">
                    <h2>About me</h2>
                    <p>Hi, I'm a student at SMKN 1 Bantul majoring in Software Engineering. I'm passionate about cybersecurity, software development, and participating in CTF competitions.</p>
                </div>
                <div class="Tech-Stack">
                    <h2>Tech Stack</h2>
                    <p>Sebagai DevSecOps spesialisasi saya ada pada kecepatan dan keamanan software yang dibuat keahlian saya meliputi: </p>
                    <p><strong>Backend:</strong> PHP (Laravel, CodeIgniter), RESTful API Development.</p>
                    <p><strong>Security as code:</strong> Memastikan keamanan terjaga pada baris pertama code</p>
                </div>
            </section>

            <section class="Certification">
                <h2 class="Certification-title">Certifications</h2>
                <div class="Certification-grid">
                    <figure>
                        <img src="{{ asset('images/CBC.png') }}" alt="Sertifikat CBD">
                        <figcaption>Cyber Breaker Development Participation</figcaption>
                    </figure>
                </div>
            </section>

    </body>
    </html>