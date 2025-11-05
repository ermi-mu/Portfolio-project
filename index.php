<?php
require_once 'admin/config.php';

// Fetch projects
$stmt = $pdo->query("SELECT * FROM projects");
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="portifolio.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

    <title>Portifolio</title>

</head>

<body>
    <article>
        <div class="head">

            <header class="container navigation">
                <div class="logo">
                    <a href="#" class="logo">Ermias.M</a>
                </div>
                <div class="nav">
                    <a href="#about" class="nav-link">About</a>
                    <a href="#skill" class="nav-link">Skills</a>
                    <a href="#project" class="nav-link">Projects</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <div class="menu-btn" id="menu-btn">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- Mobile navigation -->
                <div class="mobile-nav" id="mobile-nav">
                    <a href="#about" class="mobile-link">About</a>
                    <a href="#skill" class="mobile-link">Skills</a>
                    <a href="#project" class="mobile-link">Projects</a>
                    <a href="#contact" class="mobile-link">Contact</a>
                </div>


            </header>
        </div>
        <main>
            <section class="hero-section ">
                <div class="container hero">

                    <div class="header">
                        <h1 class="headding-primary">Hi, I'm <span>Ermias</span></h1>
                        <h3>Software Engineer & Programmer</h3>
                        <p class="hero-par">I craft elegant solutions to complex problems with clean, efficient code. Passionate about building scalable applications that make an impact.</p>
                        <a href="#project" class="btn btn--1">View Projects</a>
                        <a href="#contact" class="btn btn--2">Contact me</a>
                    </div>
                    <div class="h">
                        <img src="photo_2025-10-10_22-22-20.jpg" alt="profile-pic" class="hero-img">
                        <p class="hero-after">3+ years Experience</p>
                    </div>
            </section>
            <aside>

                <section id="about" class="about-section">
                    <div class="container about">
                        <h2 class="about-header">About me</h2>
                        <div class="about-box">

                            <div>

                                <h3>who am I</h3>
                                <p>I'm a passionate software engineer with expertise in full-stack development, cloud architecture, and system design. With over 3 years of industry experience, I've helped startups and enterprises build robust, scalable applications.</p>
                                <p> My approach combines technical excellence with creative problem-solving. I believe in writing clean, maintainable code and continuously learning new technologies to stay ahead in this fast-evolving field.</p>
                                <p>When I'm not coding, you can find me hiking, reading science fiction, or contributing to open-source projects.</p>
                            </div>
                            <div class="about-fea">
                                <div class="about-feature">
                                    <h4>Education</h4>
                                    <p><span>Master of Computer Scince</span><br>Stanford university • 2016-2018</p>
                                    <p><span>Bachelor of Software Engineering</span><br> ASTU • 2023-2028</p>
                                </div>
                                <div class="about-feature">
                                    <h4>Experience</h4>
                                    <p><span>Senior Software Engineer</span><br>TechCorp • 2020-Present</p>
                                    <p><span>Software Developer</span> <br>InnovateSoft • 2018-2020</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section id="skill" class="skill-section">
                    <div class="container skill">
                        <h2>My Skills</h2>
                        <div class="skill-fea">

                            <div class="skill-feature">
                                <div class="icon-box icon-box-1">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                                    </svg>
                                </div>

                                <h3>Frontend Development</h3>
                                <p class="skill-par">Building responsive, accessible, and performant web applications with modern frameworks.</p>
                                <div class="skill-li">

                                    <p class="skill-link skill-link-1" href="">React</p>
                                    <p class="skill-link skill-link-1" href="#">Vue.js</p>
                                    <p class="skill-link skill-link-1" href="#">TypeScript</p>
                                    <p class="skill-link skill-link-1" href="#">tailwind CSS</p>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <div class="icon-box icon-box-2">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                                    </svg>
                                </div>

                                <h3>Backend Development</h3>
                                <p class="skill-par">Designing and implementing robust APIs, databases, and server-side logic for web applications.</p>
                                <div class="skill-li ">

                                    <p class="skill-link skill-link-2" href="#">Node.js</p>
                                    <p class="skill-link skill-link-2" href="#">Python</p>
                                    <p class="skill-link skill-link-2" href="#">GraphQL</p>
                                    <p class="skill-link skill-link-2" href="#">MongoDB</p>
                                </div>
                            </div>
                            <div class="skill-feature">
                                <div class="icon-box icon-box-3">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                                    </svg>
                                </div>

                                <h3>Cloud & DevOps</h3>
                                <p class="skill-par">Deploying and managing scalable applications in cloud environments with CI/CD pipelines.</p>
                                <div class="skill-li">

                                    <p class="skill-link skill-link-3" href="#">AWS</p>
                                    <p class="skill-link skill-link-3" href="#">Docker</p>
                                    <p class="skill-link skill-link-3" href="#">Kubernetes</p>
                                    <p class="skill-link skill-link-3" href="#">Terraform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Replace the static project cards with dynamic PHP content -->
                <section id="project" class="project-section">
                    <div class="container">
                        <h2>Featured Projects</h2>
                        <div class="project-feature">
                            <?php foreach ($projects as $project): ?>
                            <div class="project-card">
                                <div class="project-image">
                                    <img src="<?= htmlspecialchars($project['image_url']) ?>" alt="<?= htmlspecialchars($project['title']) ?>">
                                </div>
                                <div class="project-content">
                                    <div class="project-head">
                                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="pro-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                        </svg>
                                    </div>
                                    <p><?= htmlspecialchars($project['description']) ?></p>
                                    <div class="skill-li">
                                        <?php
                                        $technologies = explode(',', $project['technologies']);
                                        foreach ($technologies as $tech):
                                        ?>
                                        <span class="skill-link skill-link-1"><?= htmlspecialchars(trim($tech)) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <button class="pro-btn pro-btn--left">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" viewBox="0 0 24 24" 
                                    stroke-width="1.5" 
                                    stroke="currentColor" 
                                    class="pro-btn-icon">
                                    <path 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        d="M15.75 19.5 8.25 12l7.5-7.5" 
                                    />
                                </svg>
                            </button>
                            <button class="pro-btn pro-btn--right">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    fill="none" viewBox="0 0 24 24" 
                                    stroke-width="1.5" 
                                    stroke="currentColor" 
                                    class="pro-btn-icon">
                                    <path 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" 
                                    />
                                </svg>
                
                            </button>
                        </div>
                    </div>
                </section>

            <!-- Rest of your HTML code -->
            <section class="contact-section" id="contact">
                    <div class="container contact">

                        <h2 class="contact-title">Get In Touch</h2>
                        <p class="contact-par">Have a project in mind or want to discuss potential opportunities? Feel free to reach out!</p>

                        <div class="contact-info">


                            <div>
                                <form class="form" id="contact-form">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" required>
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" required>
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                    <button type="submit" class="button">Send Message</button>
                                </form>
                            </div>

                            <div class="contact-fea">
                                <div class="contact-feature">
                                    <div class="contact-icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="contact-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4>Email</h4>
                                        <a href="mailto:ermiasmulugeta38@gmail.com" class="contact-link">ermiasmulugeta38@gmail.com</a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="contact-icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="contact-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Phone Number</h4>
                                        <a href="tel:251-99-318-8322" class="contact-link">+251993188322</a>
                                    </div>
                                </div>
                                <div class="contact-feature">
                                    <div class="contact-icon-box">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="contact-icon">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>

                                    </div>
                                    <div>
                                        <h4>Location</h4>
                                        <p>Addis Ababa Ethiopia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer>
                    <div class="container">
                        <div class="footer">
                            <div class="footer-feature">
                                <h4>Ermias.M</h4>
                                <p>Crafting elegant solutions through code and creativity.</p>
                            </div>
                            <div class="footer-feature">
                                <h4>Quick Links</h4>
                                <a href="#about">About</a>
                                <a href="#skill">Skills</a>
                                <a href="#project">Projects</a>
                                <a href="#contact">Contact</a>
                            </div>
                            <div class="footer-feature">
                                <h4>Services</h4>
                                <a href="#">Web Development</a>
                                <a href="#">Mobile Apps</a>
                                <a href="#">Cloud Solution</a>
                                <a href="#">Consulting</a>
                            </div>
                            <div class="footer-feature">
                                <h4>Connect</h4>
                                <div>
                                    <a href="https://t.me/ermax_m" class="social-media-icon-box">
                                        <ion-icon class="social-media-icon" name="call-outline"></ion-icon>
                                    </a>
                                    <a href="https://www.instagram.com/ermias1589" class="social-media-icon-box">
                                        <ion-icon class="social-media-icon" name="logo-instagram"></ion-icon>
                                    </a>
                                    <a href="https://wa.me/qr/P2ODTLMSMLF5E1" class="social-media-icon-box">
                                        <ion-icon class="social-media-icon" name="logo-whatsapp"></ion-icon>
                                    </a>
                                    <a href="#" class="social-media-icon-box">
                                        <ion-icon class="social-media-icon" name="logo-twitter"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-bottom">
                            <p>&copy; 2024 Ermias Mulugeta. All rights reserved.</p>
                        </div>

                    </div>
                </footer>
            </aside>
        </main>
    </article>


    <script>
        // ===== Mobile Navigation Toggle =====
        const menuBtn = document.getElementById('menu-btn');
        const mobileNav = document.getElementById('mobile-nav');

        menuBtn.addEventListener('click', () => {
            mobileNav.classList.toggle('active');
            menuBtn.classList.toggle('open');
        });

        // Close mobile nav when clicking a link
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.remove('active');
                menuBtn.classList.remove('open');
            });
        });
        // ===== Contact Form Email Sending =====
        const form = document.getElementById('contact-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Opens default mail app
            window.location.href = `mailto:ermiasmulugeta38@gmail.com?subject=Message from ${encodeURIComponent(name)}&body=${encodeURIComponent(message)}%0A%0AFrom: ${encodeURIComponent(email)}`;
        });

         // Initialize carousel
        const projectCards = document.querySelectorAll('.project-card');
        const nextBtn = document.querySelector('.pro-btn--right');
        const prevBtn = document.querySelector('.pro-btn--left');
        let current = 0;

        function showProjects() {
        const isMobile = window.innerWidth <= 768;
        const visibleCount = isMobile ? 1 : 3; // mobile = 1, desktop = 3

        projectCards.forEach((card, index) => {
            card.classList.remove('active');
            card.style.display = "none"; // hide all first
        });

        // show the correct number of projects
        for (let i = 0; i < visibleCount; i++) {
            const showIndex = (current + i) % projectCards.length;
            projectCards[showIndex].style.display = "block";
            projectCards[showIndex].classList.add('active');
        }
        }

        // next button
        nextBtn.addEventListener('click', () => {
        const step = 1; // move one project at a time
        current = (current + step) % projectCards.length;
        showProjects();
        });

        // previous button
        prevBtn.addEventListener('click', () => {
        const step = 1;
        current = (current - step + projectCards.length) % projectCards.length;
        showProjects();
        });

        // adjust when window resizes
        window.addEventListener('resize', showProjects);

        // initialize
        showProjects();





        // day and night

        // const toggle = document.querySelector('.theme-toggle');
        //     const icon = document.querySelector('#theme-icon');
        //     toggle.addEventListener('click', () => {
        //     document.body.classList.toggle('light-mode');
        //     icon.name = document.body.classList.contains('light-mode') ? 'sunny-outline' : 'moon-outline';
        // });
        
    </script>

</body>

</html>



