<?php
// Chaimae Zraouti — Personal Portfolio
$profile = [
    "name" => "Chaimae Zraouti",
    "age" => 18,
    "role" => "Junior Full Stack Developer",
    "school" => "OFPPT",
    "program" => "Développement Digital",
    "specialization" => "Full Stack"
];

$skills = [
    ["name" => "HTML5", "level" => 90],
    ["name" => "CSS3", "level" => 85],
    ["name" => "JavaScript", "level" => 75],
    ["name" => "PHP", "level" => 70],
    ["name" => "MySQL", "level" => 70],
    ["name" => "Git / GitHub", "level" => 65]
];

$formSubmitted = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $formSubmitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chaimae Zraouti — OFPPT Développement Digital Full Stack trainee portfolio.">
    <title><?= htmlspecialchars($profile["name"]) ?> | Full Stack Developer</title>
    <style>
        :root{
            --bg:#f7f8fc;
            --surface:rgba(255,255,255,.82);
            --surface-solid:#ffffff;
            --text:#171925;
            --muted:#6f7485;
            --line:#e7e9f0;
            --primary:#7657ff;
            --primary-dark:#5d3fe5;
            --accent:#ff8fb7;
            --shadow:0 18px 50px rgba(27,31,56,.09);
            --radius:24px;
            --max:1160px;
        }
        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{
            font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
            color:var(--text);
            background:
                radial-gradient(circle at 10% 0%, rgba(118,87,255,.12), transparent 28%),
                radial-gradient(circle at 90% 8%, rgba(255,143,183,.14), transparent 25%),
                var(--bg);
            line-height:1.6;
        }
        a{text-decoration:none;color:inherit}
        img{max-width:100%;display:block}
        .container{width:min(92%,var(--max));margin-inline:auto}
        .nav{
            position:sticky;top:0;z-index:50;
            backdrop-filter:blur(18px);
            background:rgba(247,248,252,.76);
            border-bottom:1px solid rgba(231,233,240,.75);
        }
        .nav-inner{
            height:76px;display:flex;align-items:center;justify-content:space-between;
        }
        .logo{
            display:flex;align-items:center;gap:10px;font-weight:800;letter-spacing:-.5px;
        }
        .logo-image{
            display:block;width:60px;height:60px;object-fit:cover;
            border:1px solid rgba(255,255,255,.55);border-radius:16px;
            box-shadow:0 6px 18px rgba(118,87,255,.22);
            transition:transform .2s ease,box-shadow .2s ease;
        }
        .logo:hover .logo-image{
            transform:translateY(-1px);
            box-shadow:0 9px 22px rgba(118,87,255,.3);
        }
        .links{display:flex;gap:28px;font-size:14px;color:#555b6e;font-weight:600}
        .links a{transition:.2s}
        .links a:hover{color:var(--primary)}
        .nav-cta{
            padding:11px 17px;border-radius:13px;color:#fff;font-size:14px;font-weight:700;
            background:var(--text);transition:.2s;
        }
        .nav-cta:hover{transform:translateY(-2px)}
        .menu{display:none;border:0;background:none;font-size:24px}
        .hero{padding:92px 0 78px}
        .hero-grid{
            display:grid;grid-template-columns:1.2fr .8fr;gap:58px;align-items:center;
        }
        .eyebrow{
            display:inline-flex;align-items:center;gap:8px;
            padding:8px 12px;border:1px solid #e5e0ff;border-radius:999px;
            background:#faf9ff;color:var(--primary-dark);font-size:12px;font-weight:800;
            text-transform:uppercase;letter-spacing:.11em;
        }
        .dot{width:8px;height:8px;border-radius:50%;background:#53c27e;box-shadow:0 0 0 5px rgba(83,194,126,.12)}
        h1{
            margin-top:20px;font-size:clamp(46px,7vw,82px);line-height:.98;
            letter-spacing:-4px;max-width:800px;
        }
        .gradient{background:linear-gradient(90deg,var(--primary),#b44dff,var(--accent));-webkit-background-clip:text;background-clip:text;color:transparent}
        .lead{margin-top:25px;color:var(--muted);font-size:18px;max-width:650px}
        .hero-actions{display:flex;gap:12px;margin-top:30px;flex-wrap:wrap}
        .btn{
            display:inline-flex;align-items:center;justify-content:center;gap:9px;
            padding:14px 20px;border-radius:14px;font-weight:750;font-size:14px;
            border:1px solid var(--line);background:#fff;transition:.25s;
        }
        .btn.primary{background:var(--primary);border-color:var(--primary);color:#fff}
        .btn:hover{transform:translateY(-3px);box-shadow:0 12px 25px rgba(28,32,53,.10)}
        .hero-card{
            position:relative;padding:16px;border-radius:32px;
            background:linear-gradient(160deg,#fff, #f4f1ff);
            box-shadow:var(--shadow);border:1px solid rgba(255,255,255,.9);
        }
        .portrait{
            aspect-ratio:4/5;border-radius:24px;display:grid;place-items:center;
            background:
                linear-gradient(145deg,rgba(118,87,255,.88),rgba(255,143,183,.65)),
                linear-gradient(45deg,#eef0ff,#fff);
            overflow:hidden;position:relative;
        }
        .portrait::before,.portrait::after{
            content:"";position:absolute;border-radius:50%;filter:blur(4px)
        }
        .portrait::before{width:180px;height:180px;background:rgba(255,255,255,.2);top:12%;left:-12%}
        .portrait::after{width:220px;height:220px;background:rgba(255,255,255,.16);bottom:-10%;right:-8%}
        .avatar{
            width:150px;height:150px;border-radius:50%;
            background:rgba(255,255,255,.22);border:1px solid rgba(255,255,255,.45);
            display:grid;place-items:center;font-size:56px;font-weight:800;color:white;
            box-shadow:0 18px 40px rgba(44,24,86,.18);backdrop-filter:blur(12px);
            z-index:2;
        }
        .floating{
            position:absolute;z-index:4;background:rgba(255,255,255,.92);
            padding:13px 15px;border:1px solid rgba(255,255,255,.9);
            border-radius:16px;box-shadow:0 18px 38px rgba(20,20,40,.13);
            font-size:12px;font-weight:800;
        }
        .f1{left:-15px;top:18%}.f2{right:-15px;top:60%}
        section{padding:92px 0}
        .section-head{display:flex;justify-content:space-between;align-items:end;gap:25px;margin-bottom:35px}
        .kicker{font-size:12px;text-transform:uppercase;letter-spacing:.13em;color:var(--primary-dark);font-weight:800}
        h2{margin-top:7px;font-size:clamp(30px,4vw,46px);letter-spacing:-1.8px;line-height:1.1}
        .section-text{max-width:480px;color:var(--muted);font-size:15px}
        .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px}
        .card{
            padding:28px;border:1px solid var(--line);background:var(--surface);
            border-radius:var(--radius);box-shadow:var(--shadow)
        }
        .card h3{font-size:19px;margin-bottom:12px}
        .card p{color:var(--muted);font-size:15px}
        .stats{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:23px}
        .stat{padding:18px;border-radius:17px;background:#fbfbfe;border:1px solid var(--line)}
        .stat strong{font-size:27px;display:block}.stat span{font-size:12px;color:var(--muted)}
        .skill{margin-bottom:19px}.skill:last-child{margin-bottom:0}
        .skill-meta{display:flex;justify-content:space-between;font-size:13px;font-weight:700;margin-bottom:8px}
        .track{height:8px;border-radius:999px;background:#eceef5;overflow:hidden}
        .fill{height:100%;border-radius:inherit;background:linear-gradient(90deg,var(--primary),var(--accent))}
        .tags{display:flex;gap:7px;flex-wrap:wrap;margin-top:16px}
        .tag{font-size:11px;font-weight:800;padding:7px 9px;border-radius:999px;background:#f5f5fa;color:#555b6e}
        .journey{
            display:grid;grid-template-columns:1fr 1fr;gap:20px
        }
        .timeline{position:relative;padding-left:26px}
        .timeline::before{content:"";position:absolute;left:5px;top:4px;bottom:4px;width:2px;background:#e5e6ef}
        .step{position:relative;padding-bottom:27px}
        .step:last-child{padding-bottom:0}
        .step::before{
            content:"";position:absolute;left:-26px;top:4px;width:12px;height:12px;border-radius:50%;
            background:var(--primary);box-shadow:0 0 0 5px #efedff;
        }
        .step small{color:var(--primary-dark);font-weight:800;font-size:11px;text-transform:uppercase;letter-spacing:.08em}
        .step h3{font-size:17px;margin:4px 0}
        .step p{font-size:13px;color:var(--muted)}
        .contact{
            display:grid;grid-template-columns:.9fr 1.1fr;gap:24px;align-items:stretch
        }
        .contact-info{padding:34px;border-radius:28px;color:#fff;background:linear-gradient(145deg,#1d2030,#38304f);position:relative;overflow:hidden}
        .contact-info::after{content:"";position:absolute;width:260px;height:260px;border-radius:50%;right:-100px;bottom:-120px;background:rgba(255,255,255,.07)}
        .contact-info h3{font-size:29px;letter-spacing:-1px;position:relative;z-index:2}
        .contact-info p{color:#d4d6df;margin-top:11px;font-size:14px;position:relative;z-index:2}
        .contact-details{margin-top:28px;display:grid;gap:13px;position:relative;z-index:2}
        .detail{display:flex;align-items:center;gap:11px;font-size:13px;color:#f1f2f6}
        .detail-icon{width:34px;height:34px;border-radius:10px;background:rgba(255,255,255,.09);display:grid;place-items:center}
        form{display:grid;gap:13px;padding:30px;border-radius:28px;background:#fff;border:1px solid var(--line);box-shadow:var(--shadow)}
        .field{display:grid;gap:6px}.field label{font-size:12px;font-weight:800;color:#555b6e}
        input,textarea{
            width:100%;padding:13px 14px;border:1px solid #dedfe7;border-radius:12px;
            outline:none;font:inherit;font-size:14px;background:#fcfcfe;transition:.2s;
        }
        input:focus,textarea:focus{border-color:var(--primary);box-shadow:0 0 0 4px rgba(118,87,255,.09)}
        textarea{min-height:130px;resize:vertical}
        .alert{padding:11px 13px;border-radius:12px;background:#ecfff4;color:#1f8c4d;font-size:13px;font-weight:700}
        footer{padding:30px 0 38px;color:var(--muted);font-size:12px;border-top:1px solid var(--line)}
        .footer-inner{display:flex;justify-content:space-between;gap:20px;align-items:center}
        .socials{display:flex;gap:9px}.socials a{padding:9px 11px;border:1px solid var(--line);border-radius:11px;background:#fff;font-weight:700;color:#555b6e}
        .reveal{opacity:0;transform:translateY(18px);transition:.65s ease}
        .reveal.visible{opacity:1;transform:none}
        .cat-cursor{
            position:fixed;top:0;left:0;z-index:1000;width:38px;height:38px;
            pointer-events:none;opacity:0;transform:translate3d(-100px,-100px,0);
            transition:opacity .15s ease;will-change:transform;
        }
        .cat-cursor svg{width:100%;height:100%;filter:drop-shadow(0 3px 5px rgba(201,76,134,.25))}
        .ribbon-trail{
            position:fixed;z-index:999;pointer-events:none;font-size:15px;line-height:1;
            animation:ribbon-float .8s ease-out forwards;will-change:transform,opacity;
        }
        @keyframes ribbon-float{
            0%{opacity:0;transform:translate(-50%,-35%) scale(.65) rotate(-12deg)}
            18%{opacity:1}
            100%{opacity:0;transform:translate(-50%,-115%) scale(1.1) rotate(18deg)}
        }
        @media (hover:hover) and (pointer:fine) and (prefers-reduced-motion:no-preference){
            body.has-cat-cursor,body.has-cat-cursor a,body.has-cat-cursor button,
            body.has-cat-cursor input,body.has-cat-cursor textarea{cursor:none}
            body.has-cat-cursor .cat-cursor{opacity:1}
        }
        @media(max-width:900px){
            .hero-grid,.about-grid,.journey,.contact{grid-template-columns:1fr}
            .hero{padding-top:65px}.hero-card{max-width:470px;margin:auto}
        }
        @media(max-width:650px){
            .links,.nav-cta{display:none}.menu{display:block}
            .nav-inner{height:68px}
            h1{letter-spacing:-2.5px}
            .hero{padding:53px 0 40px}
            section{padding:65px 0}
            .section-head{display:block}
            .section-text{margin-top:11px}
            .stats{grid-template-columns:1fr 1fr 1fr}
            .card,form,.contact-info{padding:23px}
            .footer-inner{flex-direction:column;align-items:flex-start}
        }
    </style>
</head>
<body>

<nav class="nav">
    <div class="container nav-inner">
        <a href="#home" class="logo">
            <img class="logo-image" src="/images/chaimae.png" alt="Chaimae Zraouti">
        </a>
        <div class="links">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#ateliers">Ateliers</a>
            <a href="#journey">Journey</a>
        </div>
        <a href="#contact" class="nav-cta">Let's talk</a>
        <button class="menu" aria-label="Menu">☰</button>
    </div>
</nav>

<main id="home">
    <section class="hero">
        <div class="container hero-grid">
            <div class="reveal">
                <span class="eyebrow"><span class="dot"></span> Available for an internship</span>
                <h1>Hi, I'm <span class="gradient"><?= htmlspecialchars($profile["name"]) ?></span></h1>
                <p class="lead">
                    <?= htmlspecialchars($profile["role"]) ?> and <?= htmlspecialchars($profile["school"]) ?> trainee specializing in
                    <strong><?= htmlspecialchars($profile["program"]) ?></strong> — <strong><?= htmlspecialchars($profile["specialization"]) ?></strong>.
                    I enjoy turning ideas into clean, useful and responsive web experiences.
                </p>
                <div class="hero-actions">
                    <a href="#ateliers" class="btn primary">Voir les ateliers ↗</a>
                    <a href="#contact" class="btn">Contact me</a>
                </div>
            </div>

            <div class="hero-card reveal">
                <div class="floating f1">🎨 UI & UX</div>
                <div class="floating f2">💻 Full Stack</div>
                <div class="portrait">
                    <div class="avatar">CZ</div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">01 — About me</div>
                    <h2>A junior developer with a passion for building.</h2>
                </div>
                <p class="section-text">
                    A simple profile section that can be adapted later with Chaimae's real biography, photo, CV and links.
                </p>
            </div>

            <div class="about-grid">
                <div class="card reveal">
                    <h3>Who I am</h3>
                    <p>
                        My name is Chaimae Zraouti, I am 18 years old and currently a trainee at OFPPT.
                        I study Développement Digital with a Full Stack specialization. I am building my foundations
                        in web development and learning how frontend and backend technologies work together.
                    </p>
                    <div class="stats">
                        <div class="stat"><strong>18</strong><span>Years old</span></div>
                        <div class="stat"><strong>OFPPT</strong><span>Trainee</span></div>
                        <div class="stat"><strong>Full</strong><span>Stack path</span></div>
                    </div>
                </div>

                <div class="card reveal" id="skills">
                    <h3>Technical skills</h3>
                    <?php foreach ($skills as $skill): ?>
                        <div class="skill">
                            <div class="skill-meta">
                                <span><?= htmlspecialchars($skill["name"]) ?></span>
                                <span><?= (int)$skill["level"] ?>%</span>
                            </div>
                            <div class="track">
                                <div class="fill" style="width:<?= (int)$skill["level"] ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="ateliers">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">02 — Ateliers</div>
                    <h2>Les ateliers que j'ai suivis.</h2>
                </div>
                <p class="section-text">
                    Retrouvez les supports des ateliers autour de la gestion de projet, de Git et de GitHub.
                </p>
            </div>

            <div class="card reveal">
                <h3>Retrouvez tous les ateliers et leurs ressources.</h3>
                <p>
                    Gestion de projet, Agile Scrum, Git et GitHub : les supports sont réunis sur la page dédiée aux ateliers.
                </p>
                <a class="btn primary" href="m202.php#portfolio-ateliers" style="margin-top:20px">
                    Découvrir les ateliers ↗
                </a>
            </div>
        </div>
    </section>

    <section id="journey">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">03 — Journey</div>
                    <h2>Learning today. Building tomorrow.</h2>
                </div>
                <p class="section-text">
                    A clean timeline to communicate her current academic journey and future goals.
                </p>
            </div>

            <div class="journey">
                <div class="card reveal">
                    <div class="timeline">
                        <div class="step">
                            <small>Current</small>
                            <h3>OFPPT — Développement Digital</h3>
                            <p>Developing practical foundations in web development, programming, databases and software project work.</p>
                        </div>
                        <div class="step">
                            <small>Specialization</small>
                            <h3>Full Stack Development</h3>
                            <p>Working across the frontend and backend to understand complete web application development.</p>
                        </div>
                        <div class="step">
                            <small>Goal</small>
                            <h3>Professional Internship</h3>
                            <p>Looking to gain real-world experience, collaborate with a team and contribute to meaningful projects.</p>
                        </div>
                    </div>
                </div>

                <div class="card reveal">
                    <h3>What I bring</h3>
                    <p>
                        Curiosity, consistency and a strong willingness to learn. I care about readable interfaces,
                        practical solutions and improving my development skills through real projects.
                    </p>
                    <div class="tags" style="margin-top:22px">
                        <span class="tag">Problem solving</span>
                        <span class="tag">Responsive design</span>
                        <span class="tag">Teamwork</span>
                        <span class="tag">Fast learner</span>
                        <span class="tag">Creativity</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">04 — Contact</div>
                    <h2>Let's create something useful together.</h2>
                </div>
            </div>

            <div class="contact">
                <div class="contact-info reveal">
                    <h3>Open to opportunities.</h3>
                    <p>
                        For an internship, collaboration, school project or junior opportunity,
                        feel free to send a message.
                    </p>

                    <div class="contact-details">
                        <div class="detail"><span class="detail-icon">✉</span><span>chaimae.zraouti@email.com</span></div>
                        <div class="detail"><span class="detail-icon">📍</span><span>Morocco</span></div>
                        <div class="detail"><span class="detail-icon">💼</span><span>Développement Digital — Full Stack</span></div>
                    </div>
                </div>

                <form method="POST" class="reveal">
                    <?php if ($formSubmitted): ?>
                        <div class="alert">Message ready — connect this form to a mail service or PHP backend to receive submissions.</div>
                    <?php endif; ?>

                    <div class="field">
                        <label for="name">Your name</label>
                        <input id="name" name="name" type="text" placeholder="John Doe" required>
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="john@example.com" required>
                    </div>

                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Tell me about your opportunity..." required></textarea>
                    </div>

                    <button class="btn primary" type="submit">Send message →</button>
                </form>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-inner">
        <div>© <?= date("Y") ?> Chaimae Zraouti. Built with PHP, HTML, CSS & JavaScript.</div>
        <div class="socials">
            <a href="#" aria-label="GitHub">GitHub</a>
            <a href="#" aria-label="LinkedIn">LinkedIn</a>
        </div>
    </div>
</footer>

<div class="cat-cursor" aria-hidden="true">
    <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.2 18.5C7.5 16.7 7.1 12.9 9.1 11.2C11 9.6 13.8 11.2 14.8 14.3C14.4 9.9 16.5 7 19.2 7C22 7 23.3 10.1 22.4 14.3C24.1 10.8 27.3 9.8 29.1 11.7C30.9 13.7 29.6 17.1 26.8 19.1C30.5 18 33 20.4 32.2 23.2C31.5 25.6 28.4 26.7 25.5 25.8C26.1 30.5 23.3 34 19.7 34C16.2 34 13.6 30.7 14.1 26.4C11.2 27.5 8.2 26.3 7.8 23.8C7.4 21.6 8.5 19.6 10.2 18.5Z" fill="#FF8FB7" stroke="#D94F8A" stroke-width="1.5"/>
        <ellipse cx="12" cy="17.2" rx="2.2" ry="3" transform="rotate(-35 12 17.2)" fill="#FFF7FB"/>
        <ellipse cx="18.5" cy="13" rx="2" ry="3" fill="#FFF7FB"/>
        <ellipse cx="26.1" cy="15.8" rx="2.1" ry="3" transform="rotate(28 26.1 15.8)" fill="#FFF7FB"/>
        <path d="M16.1 22.5C16.1 20.7 18.6 18.9 20 18.9C21.5 18.9 23.9 20.7 23.9 22.5C23.9 24.1 22.3 25.2 20 25.2C17.7 25.2 16.1 24.1 16.1 22.5Z" fill="#FFF7FB"/>
    </svg>
</div>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    const catCursor = document.querySelector('.cat-cursor');
    const supportsCustomCursor = window.matchMedia(
        '(hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)'
    ).matches;

    if (supportsCustomCursor && catCursor) {
        document.body.classList.add('has-cat-cursor');

        let lastRibbonTime = 0;
        document.addEventListener('pointermove', event => {
            if (event.pointerType !== 'mouse') return;

            catCursor.style.transform = `translate3d(${event.clientX - 18}px, ${event.clientY - 18}px, 0)`;

            const now = performance.now();
            if (now - lastRibbonTime < 110) return;
            lastRibbonTime = now;

            const ribbon = document.createElement('span');
            ribbon.className = 'ribbon-trail';
            ribbon.textContent = '🎀';
            ribbon.setAttribute('aria-hidden', 'true');
            ribbon.style.left = `${event.clientX}px`;
            ribbon.style.top = `${event.clientY}px`;
            document.body.appendChild(ribbon);
            ribbon.addEventListener('animationend', () => ribbon.remove(), { once: true });
        });
    }
</script>
</body>
</html>
