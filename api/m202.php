<?php
// M202 — Approche Agile · Ateliers (Chaimae Zraouti — Portfolio)

$links = [
    'ofppt'       => 'https://ofppt.min.ma/2025/07/approche-agile-m202-developpement_10.html',
    'slideshare'  => 'https://fr.slideshare.net/slideshow/approche-agile-ofppt-1-developpement-digital-web-full-stuck/273689160',
    'slack'       => 'https://slack.com/intl/fr-gn/blog/collaboration/methode-agile',
    'qrp'         => 'https://www.qrpinternational.fr/blog/methode-agile/les-4-piliers-fondamentaux-dagile/',
    'bubbleplan'  => 'https://bubbleplan.net/blog/agile-scrum-gestion-projet/',
    'scrumleague' => 'https://scrum-league.org/tribune/la-culture-agile/les-12-principes-generaux-du-manifeste-agile/',
    'scribd'      => 'https://fr.scribd.com/document/733939859/EFM-2-OFPPT-TSDD',
    'studocu'     => 'https://www.studocu.com/row/document/loffice-de-la-formation-professionnelle-et-de-la-promotion-du-travail/m202-approche-agile-ofppt/resume-approche-agile/116650872',
];

$valeurs = [
    ["icon" => "🤝", "title" => "Individus et interactions", "text" => "plutôt que processus et outils."],
    ["icon" => "⚙️", "title" => "Logiciel opérationnel", "text" => "plutôt qu'une documentation exhaustive."],
    ["icon" => "💬", "title" => "Collaboration avec le client", "text" => "plutôt que négociation contractuelle."],
    ["icon" => "🔄", "title" => "Réponse au changement", "text" => "plutôt que suivi d'un plan figé."],
];

$roles = [
    ["icon" => "🎯", "title" => "Product Owner (PO)", "text" => "Définit le besoin, gère et priorise le carnet de produit (Product Backlog)."],
    ["icon" => "🧭", "title" => "Scrum Master", "text" => "Veille au bon respect de la méthodologie Agile et lève les blocages de l'équipe."],
    ["icon" => "👩‍💻", "title" => "Équipe de développement", "text" => "Autonome, pluridisciplinaire et responsable de la réalisation des sprints."],
];

$evenements = [
    ["label" => "Étape 1", "title" => "Sprint Planning", "text" => "Planification du sprint : l'équipe choisit ce qui sera réalisé."],
    ["label" => "Étape 2", "title" => "Daily Scrum", "text" => "Mêlée quotidienne de 15 minutes pour se synchroniser."],
    ["label" => "Étape 3", "title" => "Sprint Review", "text" => "Revue et démonstration du produit à la fin du sprint."],
    ["label" => "Étape 4", "title" => "Sprint Retrospective", "text" => "Bilan du sprint pour s'améliorer."],
];

$artefacts = [
    ["icon" => "📋", "title" => "Product Backlog", "text" => "Liste priorisée des fonctionnalités du produit."],
    ["icon" => "✅", "title" => "Sprint Backlog", "text" => "Tâches du sprint en cours."],
    ["icon" => "📦", "title" => "Increment", "text" => "Le produit livrable et fonctionnel."],
];

$kanban = [
    "À faire"  => ["Écrire les user stories", "Maquetter la page d'accueil"],
    "En cours" => ["Développer l'authentification"],
    "Terminé"  => ["Créer le dépôt GitHub", "Configurer le tableau Trello"],
];

$outils = ["Git / GitHub", "Jira", "Trello", "Tableaux physiques"];

$ateliers = [
    [
        "num" => 1, "icon" => "📜",
        "title" => "Comprendre le Manifeste Agile",
        "description" => "Les 4 valeurs fondamentales (2001) : reformuler chaque valeur avec un exemple de projet web.",
        "tags" => ["Manifeste", "Valeurs"],
        "links" => [
            ["Les 4 piliers d'Agile", $links['qrp']],
            ["Les 12 principes", $links['scrumleague']],
        ],
    ],
    [
        "num" => 2, "icon" => "🌊",
        "title" => "Modèle en cascade vs Agile",
        "description" => "Comparer Cascade / Cycle en V et sprints : planification, retour client et gestion du changement.",
        "tags" => ["Cascade", "Cycle en V", "Agile"],
        "links" => [
            ["Agile & Scrum", $links['bubbleplan']],
            ["Cours OFPPT (slides)", $links['slideshare']],
        ],
    ],
    [
        "num" => 3, "icon" => "🏉",
        "title" => "Agile Scrum : rôles, rituels, artefacts",
        "description" => "Simuler un sprint : répartir PO / Scrum Master / équipe, puis dérouler planning, daily, review et rétrospective.",
        "tags" => ["Scrum", "Sprint"],
        "links" => [
            ["Module M202 – OFPPT", $links['ofppt']],
            ["Cours OFPPT (slides)", $links['slideshare']],
        ],
    ],
    [
        "num" => 4, "icon" => "🗂️",
        "title" => "Kanban et outils collaboratifs",
        "description" => "Monter un tableau À faire / En cours / Terminé et le relier à un dépôt Git.",
        "tags" => ["Kanban", "Git", "Trello"],
        "links" => [
            ["La méthode Agile", $links['slack']],
            ["EFM 2 OFPPT TSDD", $links['scribd']],
        ],
    ],
    [
        "num" => 5, "icon" => "🎓",
        "title" => "Révision EFM / examen régional",
        "description" => "Résumé du module, exercices (Gantt, PERT, commandes Git) et QCM type examen.",
        "tags" => ["EFM", "Gantt", "PERT", "RACI"],
        "links" => [
            ["Résumé du module", $links['studocu']],
            ["EFM 2 OFPPT TSDD", $links['scribd']],
        ],
    ],
];

$sources = [
    ["Module M202 – OFPPT", $links['ofppt']],
    ["Approche Agile OFPPT (SlideShare)", $links['slideshare']],
    ["La méthode Agile – Slack", $links['slack']],
    ["Les 4 piliers fondamentaux d'Agile – QRP International", $links['qrp']],
    ["Agile & Scrum – Bubbleplan", $links['bubbleplan']],
    ["Les 12 principes du Manifeste – Scrum League", $links['scrumleague']],
    ["EFM 2 OFPPT TSDD – Scribd", $links['scribd']],
    ["Résumé Approche Agile – Studocu", $links['studocu']],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="M202 — Approche Agile : ateliers Modèle en cascade et Agile Scrum, OFPPT Développement Digital.">
    <title>M202 — Approche Agile | Chaimae Zraouti</title>
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
        .container{width:min(92%,var(--max));margin-inline:auto}

        /* Navigation */
        .nav{
            position:sticky;top:0;z-index:50;
            backdrop-filter:blur(18px);
            background:rgba(247,248,252,.76);
            border-bottom:1px solid rgba(231,233,240,.75);
        }
        .nav-inner{height:76px;display:flex;align-items:center;justify-content:space-between}
        .logo{display:flex;align-items:center;gap:10px;font-weight:800;letter-spacing:-.5px}
        .logo-mark{
            width:38px;height:38px;border-radius:12px;display:grid;place-items:center;
            color:white;background:linear-gradient(135deg,var(--primary),#a98fff);
            box-shadow:0 10px 24px rgba(118,87,255,.25);
        }
        .links{display:flex;gap:28px;font-size:14px;color:#555b6e;font-weight:600}
        .links a{transition:.2s}
        .links a:hover{color:var(--primary)}
        .nav-cta{
            padding:11px 17px;border-radius:13px;color:#fff;font-size:14px;font-weight:700;
            background:var(--text);transition:.2s;
        }
        .nav-cta:hover{transform:translateY(-2px)}
        .menu{display:none;border:0;background:none;font-size:24px;cursor:pointer}

        /* Hero */
        .hero{padding:92px 0 78px}
        .hero-grid{display:grid;grid-template-columns:1.2fr .8fr;gap:58px;align-items:center}
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
            background:linear-gradient(160deg,#fff,#f4f1ff);
            box-shadow:var(--shadow);border:1px solid rgba(255,255,255,.9);
        }
        .portrait{
            aspect-ratio:4/5;border-radius:24px;display:grid;place-items:center;
            background:
                linear-gradient(145deg,rgba(118,87,255,.88),rgba(255,143,183,.65)),
                linear-gradient(45deg,#eef0ff,#fff);
            overflow:hidden;position:relative;
        }
        .portrait::before,.portrait::after{content:"";position:absolute;border-radius:50%;filter:blur(4px)}
        .portrait::before{width:180px;height:180px;background:rgba(255,255,255,.2);top:12%;left:-12%}
        .portrait::after{width:220px;height:220px;background:rgba(255,255,255,.16);bottom:-10%;right:-8%}
        .avatar{
            width:150px;height:150px;border-radius:50%;
            background:rgba(255,255,255,.22);border:1px solid rgba(255,255,255,.45);
            display:grid;place-items:center;font-size:44px;font-weight:800;color:white;
            box-shadow:0 18px 40px rgba(44,24,86,.18);backdrop-filter:blur(12px);z-index:2;
        }
        .floating{
            position:absolute;z-index:4;background:rgba(255,255,255,.92);
            padding:13px 15px;border:1px solid rgba(255,255,255,.9);
            border-radius:16px;box-shadow:0 18px 38px rgba(20,20,40,.13);
            font-size:12px;font-weight:800;
        }
        .f1{left:-15px;top:18%}.f2{right:-15px;top:60%}

        /* Sections */
        section{padding:92px 0}
        .section-head{display:flex;justify-content:space-between;align-items:end;gap:25px;margin-bottom:35px}
        .kicker{font-size:12px;text-transform:uppercase;letter-spacing:.13em;color:var(--primary-dark);font-weight:800}
        h2{margin-top:7px;font-size:clamp(30px,4vw,46px);letter-spacing:-1.8px;line-height:1.1}
        .section-text{max-width:480px;color:var(--muted);font-size:15px}
        .sub-title{font-size:12px;text-transform:uppercase;letter-spacing:.13em;color:var(--primary-dark);font-weight:800;margin:34px 0 14px}
        .grid{display:grid;gap:20px}
        .grid-2{grid-template-columns:repeat(2,1fr)}
        .grid-3{grid-template-columns:repeat(3,1fr)}
        .grid-4{grid-template-columns:repeat(4,1fr)}
        .card{
            padding:28px;border:1px solid var(--line);background:var(--surface);
            border-radius:var(--radius);box-shadow:var(--shadow)
        }
        .card h3{font-size:19px;margin-bottom:10px}
        .card p{color:var(--muted);font-size:15px}
        .card .icon{
            width:46px;height:46px;border-radius:14px;display:grid;place-items:center;
            font-size:22px;margin-bottom:16px;background:linear-gradient(135deg,#f1edff,#fff3f7);
        }
        .card ul{margin-top:12px;padding-left:18px;color:var(--muted);font-size:14px}
        .card.cascade{border-top:4px solid var(--primary)}
        .card.agile{border-top:4px solid var(--accent)}

        /* Timeline (Scrum) */
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

        /* Kanban */
        .kanban{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
        .col{padding:18px;border-radius:20px;background:#f3f0ff;border:1px solid #e5e0ff}
        .col h3{font-size:15px;display:flex;justify-content:space-between;align-items:center}
        .col h3 span{font-size:12px;color:var(--primary-dark);background:#fff;border-radius:999px;padding:2px 9px}
        .ticket{margin-top:11px;padding:12px 14px;border-radius:13px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600}

        /* Ateliers (project cards) */
        .project{padding:22px;border-radius:22px;border:1px solid var(--line);background:#fff;transition:.25s;display:flex;flex-direction:column}
        .project:hover{transform:translateY(-6px);box-shadow:var(--shadow)}
        .project-icon{height:130px;border-radius:17px;display:grid;place-items:center;font-size:50px;background:linear-gradient(135deg,#f1edff,#fff3f7)}
        .project .num{margin-top:18px;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.1em;color:var(--primary-dark)}
        .project h3{font-size:20px;margin:4px 0 7px}
        .project p{font-size:14px;color:var(--muted)}
        .tags{display:flex;gap:7px;flex-wrap:wrap;margin-top:16px}
        .tag{font-size:11px;font-weight:800;padding:7px 9px;border-radius:999px;background:#f5f5fa;color:#555b6e}
        .project .tags.links-row{margin-top:auto;padding-top:18px}
        .tag.link{background:var(--primary);color:#fff;transition:.2s}
        .tag.link:hover{background:var(--primary-dark);transform:translateY(-2px)}

        /* Révision / sources */
        .revision{
            display:grid;grid-template-columns:1fr 1fr;gap:20px
        }
        .sources{list-style:none;display:grid;gap:10px}
        .sources a{
            display:flex;justify-content:space-between;gap:12px;padding:12px 14px;border-radius:13px;
            border:1px solid var(--line);background:#fcfcfe;font-size:13px;font-weight:700;color:#555b6e;transition:.2s;
        }
        .sources a:hover{border-color:var(--primary);color:var(--primary)}
        .check{list-style:none;display:grid;gap:12px;margin-top:6px}
        .check li{display:flex;gap:10px;align-items:flex-start;font-size:15px;color:var(--muted)}
        .check li::before{content:"✓";flex:none;width:22px;height:22px;border-radius:50%;display:grid;place-items:center;font-size:12px;font-weight:800;background:#efedff;color:var(--primary-dark)}

        /* Footer */
        footer{padding:30px 0 38px;color:var(--muted);font-size:12px;border-top:1px solid var(--line)}
        .footer-inner{display:flex;justify-content:space-between;gap:20px;align-items:center}
        .socials{display:flex;gap:9px}
        .socials a{padding:9px 11px;border:1px solid var(--line);border-radius:11px;background:#fff;font-weight:700;color:#555b6e}

        .reveal{opacity:0;transform:translateY(18px);transition:.65s ease}
        .reveal.visible{opacity:1;transform:none}

        @media(max-width:900px){
            .hero-grid,.revision,.grid-2{grid-template-columns:1fr}
            .grid-3,.grid-4{grid-template-columns:1fr 1fr}
            .kanban{grid-template-columns:1fr}
            .hero{padding-top:65px}.hero-card{max-width:470px;margin:auto}
        }
        @media(max-width:650px){
            .nav-cta{display:none}.menu{display:block}
            .links{
                display:none;position:absolute;top:68px;left:0;right:0;flex-direction:column;gap:0;
                background:rgba(247,248,252,.97);border-bottom:1px solid var(--line);padding:8px 4%;
            }
            .links.open{display:flex}
            .links a{padding:12px 0}
            .nav-inner{height:68px}
            h1{letter-spacing:-2.5px}
            .hero{padding:53px 0 40px}
            section{padding:65px 0}
            .section-head{display:block}
            .section-text{margin-top:11px}
            .grid-3,.grid-4{grid-template-columns:1fr}
            .card{padding:23px}
            .footer-inner{flex-direction:column;align-items:flex-start}
        }
    </style>
</head>
<body>

<nav class="nav">
    <div class="container nav-inner">
        <a href="index.php" class="logo">
            <span class="logo-mark">C</span>
            <span>Chaimae.</span>
        </a>
        <div class="links" id="navLinks">
            <a href="#manifeste">Manifeste</a>
            <a href="#cascade">Cascade vs Agile</a>
            <a href="#scrum">Scrum</a>
            <a href="#kanban">Kanban</a>
            <a href="#ateliers">Ateliers</a>
        </div>
        <a href="index.php#projects" class="nav-cta">← Portfolio</a>
        <button class="menu" id="menuBtn" aria-label="Menu">☰</button>
    </div>
</nav>

<main id="home">
    <section class="hero">
        <div class="container hero-grid">
            <div class="reveal">
                <span class="eyebrow"><span class="dot"></span> OFPPT · Développement Digital</span>
                <h1>M202 — Approche <span class="gradient">Agile</span></h1>
                <p class="lead">
                    L'approche agile est une méthode de gestion de projet <strong>itérative</strong>,
                    <strong>collaborative</strong> et <strong>flexible</strong>, enseignée dans le module
                    M202 / M110 des filières de développement digital. Voici mes ateliers :
                    <strong>Modèle en cascade</strong> et <strong>Agile Scrum</strong>.
                </p>
                <div class="hero-actions">
                    <a href="#ateliers" class="btn primary">Voir les ateliers ↗</a>
                    <a href="index.php" class="btn">Retour au portfolio</a>
                </div>
            </div>

            <div class="hero-card reveal">
                <div class="floating f1">🌊 Cascade</div>
                <div class="floating f2">🔄 Scrum</div>
                <div class="portrait">
                    <div class="avatar">M202</div>
                </div>
            </div>
        </div>
    </section>

    <section id="manifeste">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">01 — Manifeste Agile</div>
                    <h2>Les 4 valeurs fondamentales (2001).</h2>
                </div>
                <p class="section-text">Le socle de toute démarche agile : on privilégie l'humain, le produit, le client et l'adaptation.</p>
            </div>

            <div class="grid grid-4">
                <?php foreach ($valeurs as $v): ?>
                    <div class="card reveal">
                        <div class="icon"><?= $v["icon"] ?></div>
                        <h3><?= htmlspecialchars($v["title"]) ?></h3>
                        <p><?= htmlspecialchars($v["text"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="cascade">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">02 — Comparaison</div>
                    <h2>Méthodes traditionnelles vs Agile.</h2>
                </div>
                <p class="section-text">Deux philosophies pour gérer un projet de développement.</p>
            </div>

            <div class="grid grid-2">
                <div class="card cascade reveal">
                    <div class="icon">🌊</div>
                    <h3>Modèle en cascade / Cycle en V</h3>
                    <p>Le projet est linéaire, rigide et planifié de bout en bout avant le développement.</p>
                    <ul>
                        <li>Le client voit le résultat final très tardivement.</li>
                        <li>Le changement en cours de route est difficile.</li>
                    </ul>
                </div>
                <div class="card agile reveal">
                    <div class="icon">🔄</div>
                    <h3>Approche Agile</h3>
                    <p>Le projet est découpé en cycles courts appelés <strong>sprints</strong>.</p>
                    <ul>
                        <li>Livraison régulière de versions fonctionnelles.</li>
                        <li>Adaptation rapide aux retours du client.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="scrum">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">03 — Scrum</div>
                    <h2>Le framework le plus utilisé.</h2>
                </div>
                <p class="section-text">Des rôles clairs, des rituels réguliers et des artefacts concrets pour livrer à chaque sprint.</p>
            </div>

            <div class="sub-title">Les rôles principaux</div>
            <div class="grid grid-3">
                <?php foreach ($roles as $r): ?>
                    <div class="card reveal">
                        <div class="icon"><?= $r["icon"] ?></div>
                        <h3><?= htmlspecialchars($r["title"]) ?></h3>
                        <p><?= htmlspecialchars($r["text"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="sub-title">Les événements (rituels)</div>
            <div class="card reveal">
                <div class="timeline">
                    <?php foreach ($evenements as $ev): ?>
                        <div class="step">
                            <small><?= htmlspecialchars($ev["label"]) ?></small>
                            <h3><?= htmlspecialchars($ev["title"]) ?></h3>
                            <p><?= htmlspecialchars($ev["text"]) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="sub-title">Les artefacts</div>
            <div class="grid grid-3">
                <?php foreach ($artefacts as $a): ?>
                    <div class="card reveal">
                        <div class="icon"><?= $a["icon"] ?></div>
                        <h3><?= htmlspecialchars($a["title"]) ?></h3>
                        <p><?= htmlspecialchars($a["text"]) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="kanban">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">04 — Kanban &amp; outils</div>
                    <h2>Visualiser le flux de travail.</h2>
                </div>
                <p class="section-text">Un tableau simple (À faire, En cours, Terminé) pour suivre l'avancement de l'équipe.</p>
            </div>

            <div class="kanban">
                <?php foreach ($kanban as $colonne => $tickets): ?>
                    <div class="col reveal">
                        <h3><?= htmlspecialchars($colonne) ?> <span><?= count($tickets) ?></span></h3>
                        <?php foreach ($tickets as $t): ?>
                            <div class="ticket"><?= htmlspecialchars($t) ?></div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="tags reveal" style="margin-top:22px">
                <?php foreach ($outils as $o): ?>
                    <span class="tag"><?= htmlspecialchars($o) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="ateliers">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">05 — Ateliers</div>
                    <h2>Modèle en cascade &amp; Agile Scrum.</h2>
                </div>
                <p class="section-text">Chaque atelier est accompagné de ses liens de ressources.</p>
            </div>

            <div class="grid grid-3">
                <?php foreach ($ateliers as $at): ?>
                    <article class="project reveal">
                        <div class="project-icon"><?= $at["icon"] ?></div>
                        <div class="num">Atelier <?= (int)$at["num"] ?></div>
                        <h3><?= htmlspecialchars($at["title"]) ?></h3>
                        <p><?= htmlspecialchars($at["description"]) ?></p>
                        <div class="tags">
                            <?php foreach ($at["tags"] as $tag): ?>
                                <span class="tag"><?= htmlspecialchars($tag) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="tags links-row">
                            <?php foreach ($at["links"] as [$label, $url]): ?>
                                <a href="<?= htmlspecialchars($url) ?>" class="tag link" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($label) ?> →</a>
                            <?php endforeach; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="sources">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">06 — Révision</div>
                    <h2>Préparer l'EFM et l'examen régional.</h2>
                </div>
                <p class="section-text">De quoi réviser le module M202 avec les bonnes ressources.</p>
            </div>

            <div class="revision">
                <div class="card reveal">
                    <h3>À réviser</h3>
                    <ul class="check">
                        <li>Exercices pratiques : Gantt, PERT, commandes Git</li>
                        <li>Questions de QCM type examen</li>
                        <li>Matrice RACI et chemin critique</li>
                        <li>Rôles, rituels et artefacts de Scrum</li>
                    </ul>
                </div>

                <div class="card reveal">
                    <h3>Sources &amp; ressources</h3>
                    <ul class="sources" style="margin-top:14px">
                        <?php foreach ($sources as [$label, $url]): ?>
                            <li><a href="<?= htmlspecialchars($url) ?>" target="_blank" rel="noopener noreferrer"><span><?= htmlspecialchars($label) ?></span><span>↗</span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-inner">
        <div>© <?= date("Y") ?> Chaimae Zraouti. M202 — Approche Agile · OFPPT Développement Digital.</div>
        <div class="socials">
            <a href="index.php">← Portfolio</a>
            <a href="#home">Haut de page ↑</a>
        </div>
    </div>
</footer>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('visible');
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    const menuBtn = document.getElementById('menuBtn');
    const navLinks = document.getElementById('navLinks');
    menuBtn.addEventListener('click', () => navLinks.classList.toggle('open'));
    navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));
</script>
</body>
</html>
