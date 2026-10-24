<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    <title>Portofolio Websites</title></head>
<body>
    <header>
        <a href="#home" class="logo">ray4sec<span class="logo-cursor">_</span></a>
        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>
        <nav class="navbar" id="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#certifications">Certifications</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="Profile">
            <img src="{{ asset('images/Profile.jpg') }}" alt="Profile Image">
        </div>
        <div class="Home-content">
            <h1>Hi, It's <span>Rayasa</span></h1>
            <h2 class="typing-text">I'm a <span>DevSecOps</span></h2>
            <p>Software Engineering student at SMKN 1 Bantul</p>
            <div class="social-icon">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/RyaMight" aria-label="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" aria-label="Discord"><i class="fab fa-discord"></i></a>
            </div>
            <a href="https://www.linkedin.com/in/arya-saputra-nugraha-313b87428/" class="btn">Hire Me</a>
        </div>
        <div class="Terminal-card fastfetch">
            <div class="terminal-header">
                <span class="dot dot-red"></span>
                <span class="dot dot-yellow"></span>
                <span class="dot dot-green"></span>
                <span class="terminal-title">fastfetch</span>
            </div>
            <div class="ff-layout">
                <div class="ff-image">
                    <img src="{{ asset('images/Lain.jpeg') }}" alt="Lain">
                </div>
                <div class="terminal-body ff-info">
                    <p class="ff-row"><span class="ff-key ff-red">&#9642;</span><span class="ff-label">OS</span><span class="ff-value">Kali GNU/Linux Rolling x86_64</span></p>
                    <p class="ff-row"><span class="ff-key ff-orange">&#9642;</span><span class="ff-label">Host</span><span class="ff-value">Windows Subsystem for Linux - kali-linux (3.0.1.0)</span></p>
                    <p class="ff-row"><span class="ff-key ff-yellow">&#9642;</span><span class="ff-label">Kernel</span><span class="ff-value">Linux 6.18.40.1-microsoft-standard-WSL2</span></p>
                    <p class="ff-row"><span class="ff-key ff-green">&#9642;</span><span class="ff-label">Uptime</span><span class="ff-value">2 mins</span></p>
                    <p class="ff-row"><span class="ff-key ff-cyan">&#9642;</span><span class="ff-label">Packages</span><span class="ff-value">899 (dpkg)</span></p>
                    <p class="ff-row"><span class="ff-key ff-blue">&#9642;</span><span class="ff-label">Shell</span><span class="ff-value">bash 5.3.9</span></p>
                    <p class="ff-row"><span class="ff-key ff-magenta">&#9642;</span><span class="ff-label">WM</span><span class="ff-value">WSLg (Wayland) 1.0.79</span></p>
                    <p class="ff-spacer"></p>
                    <p class="ff-row"><span class="ff-key ff-red">&#9642;</span><span class="ff-label">Terminal</span><span class="ff-value">Windows Terminal</span></p>
                    <p class="ff-row"><span class="ff-key ff-orange">&#9642;</span><span class="ff-label">CPU</span><span class="ff-value">12th Gen Intel(R) Core(TM) i5-12450H (12) @ 2.50 GHz</span></p>
                    <p class="ff-row"><span class="ff-key ff-yellow">&#9642;</span><span class="ff-label">GPU 1</span><span class="ff-value">NVIDIA GeForce RTX 3050 6GB Laptop GPU @ 2.10 GHz</span></p>
                    <p class="ff-row"><span class="ff-key ff-green">&#9642;</span><span class="ff-label">GPU 2</span><span class="ff-value">Intel(R) UHD Graphics [Integrated]</span></p>
                    <p class="ff-row"><span class="ff-key ff-blue">&#9642;</span><span class="ff-label">Swap</span><span class="ff-value">0 B / 2.00 GiB (0%)</span></p>
                    <p class="ff-row"><span class="ff-key ff-cyan">&#9642;</span><span class="ff-label">Locale</span><span class="ff-value">en_US.UTF-8</span></p>
                    <p class="ff-spacer"></p>
                    <div class="ff-colorbar">
                        <span class="bg-red"></span><span class="bg-orange"></span><span class="bg-yellow"></span><span class="bg-green"></span><span class="bg-cyan"></span><span class="bg-blue"></span><span class="bg-magenta"></span><span class="bg-white"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="about-certif-container">
        <section class="About" id="about">
            <div class="About-content">
                <h2>About me</h2>
                <p>Hi, I'm a student at SMKN 1 Bantul majoring in Software Engineering. I'm passionate about cybersecurity, software development, and participating in CTF competitions.</p>
            </div>
            <div class="Tech-Stack">
                <h2>Tech Stack</h2>
                <p>Here are the technologies and tools I use for web development and system security:</p>
                <div class="tech-grid">
                    <div class="tech-item"><i class="fab fa-php"></i><span>PHP</span></div>
                    <div class="tech-item"><i class="fab fa-laravel"></i><span>Laravel</span></div>
                    <div class="tech-item"><i class="fab fa-html5"></i><span>HTML5</span></div>
                    <div class="tech-item"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
                    <div class="tech-item"><i class="fab fa-js"></i><span>JavaScript</span></div>
                    <div class="tech-item"><i class="fab fa-python"></i><span>Python</span></div>
                    <div class="tech-item"><i class="fab fa-git-alt"></i><span>Git</span></div>
                    <div class="tech-item"><i class="fab fa-github"></i><span>GitHub</span></div>
                    <div class="tech-item"><i class="fab fa-figma"></i><span>Figma</span></div>
                    <div class="tech-item"><i class="fas fa-database"></i><span>MySQL</span></div>
                    <div class="tech-item"><i class="fab fa-docker"></i><span>Docker</span></div>
                    <div class="tech-item"><i class="fab fa-linux"></i><span>Linux</span></div>
                </div>
            </div>
        </section>

        <section class="Certification" id="certifications">
            <h2 class="Certification-title">Certifications</h2>
            @if($certificates->isNotEmpty())
                <div class="Certification-grid">
                    @foreach($certificates as $certificate)
                        <figure class="reveal">
                            <a href="{{ asset('storage/' . $certificate->image) }}" class="certificate-link" data-img="{{ asset('storage/' . $certificate->image) }}" aria-label="Lihat sertifikat {{ $certificate->title }}">
                                <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}">
                            </a>
                            <figcaption>{{ $certificate->title }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            @else
                <div class="Certification-grid">
                    <figure class="reveal">
                        <a href="{{ asset('images/CBC.png') }}" class="certificate-link" data-img="{{ asset('images/CBC.png') }}" aria-label="Lihat sertifikat CBC">
                            <img src="{{ asset('images/CBC.png') }}" alt="Cyber Breaker Development Participation">
                        </a>
                        <figcaption>Cyber Breaker Development Participation</figcaption>
                    </figure>
                    <figure class="reveal">
                        <a href="{{ asset('images/LKS CERTIF.jpg') }}" class="certificate-link" data-img="{{ asset('images/LKS CERTIF.jpg') }}" aria-label="Lihat sertifikat LKS">
                            <img src="{{ asset('images/LKS CERTIF.jpg') }}" alt="Kompetisi LKS">
                        </a>
                        <figcaption>Kompetisi LKS</figcaption>
                    </figure>
                    <figure class="reveal">
                        <a href="{{ asset('images/CSharp.png') }}" class="certificate-link" data-img="{{ asset('images/CSharp.png') }}" aria-label="Lihat sertifikat C# Basic">
                            <img src="{{ asset('images/CSharp.png') }}" alt="C# Basic From Microsoft">
                        </a>
                        <figcaption>C# Basic From Microsoft</figcaption>
                    </figure>
                    <figure class="reveal">
                        <a href="{{ asset('images/BasicAI.png') }}" class="certificate-link" data-img="{{ asset('images/BasicAI.png') }}" aria-label="Lihat sertifikat Basic AI">
                            <img src="{{ asset('images/BasicAI.png') }}" alt="Basic AI Concepts From Dicoding">
                        </a>
                        <figcaption>Basic AI Concepts From Dicoding</figcaption>
                    </figure>
                </div>
            @endif
        </section>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Rayasa. All rights reserved.</p>
        <div class="footer-social">
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/RyaMight" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/arya-saputra-nugraha-313b87428/" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>

    <div class="certificate-modal" id="certificate-modal" aria-hidden="true">
        <button class="certificate-modal-close" type="button" aria-label="Close Preview">&times;</button>
        <img id="certificate-modal-image" src="" alt="Preview sertifikat">
    </div>

    <script src="{{ asset('js/preview.js') }}"></script>
</body>
</html>