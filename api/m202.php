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

$portfolioAteliers = [
    [
        'icon' => '📋',
        'title' => 'Gestion de projet : Méthodes classiques',
        'description' => "Support de l'atelier sur les méthodes classiques de gestion de projet.",
        'url' => 'https://portfoliofs202.vercel.app/docs/At1_gestionprojet.pdf',
    ],
    [
        'icon' => '🔄',
        'title' => 'Gestion de projet : Agile Scrum',
        'description' => "Support de l'atelier sur le framework Agile Scrum.",
        'url' => 'https://portfoliofs202.vercel.app/docs/At2_gestionprojet.pdf',
    ],
    [
        'icon' => '⌨️',
        'title' => 'Les bases de Git',
        'description' => "Support de l'atelier sur les bases de Git.",
        'url' => 'https://portfoliofs202.vercel.app/docs/At3_git.pdf',
    ],
    [
        'icon' => '🐙',
        'title' => 'GitHub',
        'description' => "Support de l'atelier sur GitHub.",
        'url' => 'https://portfoliofs202.vercel.app/docs/At4_github.pdf',
    ],
    [
        'icon' => '🎓',
        'title' => 'Git (exemple EFM)',
        'description' => "Support de l'atelier sur Git avec un exemple EFM.",
        'url' => null,
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
    <script>
        try {
            if (localStorage.getItem('portfolio-theme') === 'dark') {
                document.documentElement.dataset.theme = 'dark';
            }
        } catch (error) {
            console.warn('Could not load the saved theme preference.', error);
        }
    </script>
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
        :root[data-theme="dark"]{
            color-scheme:dark;
            --bg:#17151e;
            --surface:rgba(35,31,45,.88);
            --surface-solid:#231f2d;
            --text:#f7f0fa;
            --muted:#c0b5c8;
            --line:rgba(255,255,255,.13);
            --primary:#7657ff;
            --primary-dark:#d0c3ff;
            --shadow:0 18px 50px rgba(0,0,0,.28);
        }
        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{
            font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;
            color:var(--text);
            background:
                radial-gradient(ellipse at 12% 18%, rgba(255,143,183,.34), transparent 35%),
                radial-gradient(ellipse at 88% 20%, rgba(177,143,255,.3), transparent 38%),
                radial-gradient(ellipse at 50% 72%, rgba(255,211,235,.28), transparent 42%),
                linear-gradient(135deg,#fff8fc 0%,#fbf5ff 48%,#f3edff 100%);
            background-attachment:fixed;
            line-height:1.6;
        }
        .ambient-decor{position:fixed;inset:0;z-index:0;overflow:hidden;pointer-events:none}
        .ambient-flower{
            position:absolute;display:block;color:#db579f;
            font-size:clamp(20px,2.4vw,32px);line-height:1;
            opacity:.2;filter:drop-shadow(0 5px 12px rgba(217,67,137,.2));
            animation:ambient-drift var(--duration,30s) ease-in-out var(--delay,0s) infinite alternate;
            will-change:transform,opacity;
        }
        .ambient-flower:nth-child(1){top:14%;left:7%;--duration:27s;--delay:-8s}
        .ambient-flower:nth-child(2){top:65%;left:17%;--duration:34s;--delay:-19s}
        .ambient-flower:nth-child(3){top:24%;right:12%;--duration:31s;--delay:-13s}
        .ambient-flower:nth-child(4){top:76%;right:9%;--duration:29s;--delay:-4s}
        .ambient-flower:nth-child(5){top:44%;left:46%;--duration:36s;--delay:-24s}
        .ambient-flower:nth-child(6){top:9%;right:37%;--duration:33s;--delay:-16s}
        .ambient-flower:nth-child(7){top:88%;left:62%;--duration:30s;--delay:-11s}
        .ambient-flower:nth-child(8){top:51%;right:31%;--duration:38s;--delay:-28s}
        @keyframes ambient-drift{
            0%{opacity:.1;transform:translate3d(-12px,14px,0) rotate(-12deg) scale(.9)}
            50%{opacity:.28}
            100%{opacity:.16;transform:translate3d(20px,-24px,0) rotate(12deg) scale(1.08)}
        }
        main,footer{position:relative;z-index:1}
        @media(max-width:650px){
            .ambient-flower{font-size:19px;opacity:.14}
        }
        @media(prefers-reduced-motion:reduce){
            .ambient-flower{animation:none;opacity:.12;will-change:auto}
        }
        :root[data-theme="dark"] body{
            background:
                radial-gradient(ellipse at 12% 18%,rgba(180,92,145,.2),transparent 35%),
                radial-gradient(ellipse at 88% 20%,rgba(112,82,180,.22),transparent 38%),
                radial-gradient(ellipse at 50% 72%,rgba(109,60,98,.16),transparent 42%),
                linear-gradient(135deg,#17151e 0%,#1d1926 48%,#191725 100%);
        }
        :root[data-theme="dark"] .ambient-flower{opacity:.13;filter:drop-shadow(0 5px 12px rgba(217,67,137,.12))}
        :root[data-theme="dark"] .nav-inner{
            border-color:rgba(255,255,255,.12);
            background:rgba(34,30,44,.78);
            box-shadow:0 10px 35px rgba(0,0,0,.24);
        }
        :root[data-theme="dark"] .links{color:#e1d7e8;background:transparent;box-shadow:none}
        :root[data-theme="dark"] .links a:hover{background:rgba(255,143,183,.13)}
        :root[data-theme="dark"] .theme-toggle,
        :root[data-theme="dark"] .menu{
            color:#f6d5e8;border-color:rgba(255,143,183,.24);background:rgba(255,255,255,.07);
        }
        :root[data-theme="dark"] .card,
        :root[data-theme="dark"] .project,
        :root[data-theme="dark"] .hero-card,
        :root[data-theme="dark"] .sources a,
        :root[data-theme="dark"] .ticket,
        :root[data-theme="dark"] .socials a,
        :root[data-theme="dark"] .btn:not(.primary),
        :root[data-theme="dark"] .floating{
            color:var(--text);background:var(--surface);border-color:var(--line);
        }
        :root[data-theme="dark"] .card .icon,
        :root[data-theme="dark"] .project-icon{background:linear-gradient(135deg,#302840,#382638)}
        :root[data-theme="dark"] .tag{color:#e7dff0;background:rgba(255,255,255,.09)}
        :root[data-theme="dark"] .col{background:#242032;border-color:var(--line)}
        :root[data-theme="dark"] .col h3 span{color:#e7dfff;background:#393149}
        :root[data-theme="dark"] .timeline::before{background:rgba(255,255,255,.18)}
        :root[data-theme="dark"] .step::before{box-shadow:0 0 0 5px rgba(182,162,255,.15)}
        :root[data-theme="dark"] .check li::before{color:#e7dfff;background:rgba(182,162,255,.18)}
        :root[data-theme="dark"] footer{border-color:var(--line)}
        :root[data-theme="dark"] .nav-cta,
        :root[data-theme="dark"] .tag.link{color:#fff}
        .theme-toggle{
            flex:none;width:40px;height:40px;display:grid;place-items:center;
            border:1px solid rgba(217,67,137,.16);border-radius:50%;
            color:#a3467b;background:rgba(255,255,255,.72);
            font-size:19px;line-height:1;cursor:pointer;transition:transform .2s,background .2s;
        }
        .theme-toggle:hover{transform:translateY(-2px);background:rgba(255,255,255,.95)}
        a{text-decoration:none;color:inherit}
        .container{width:min(92%,var(--max));margin-inline:auto}

        /* Navigation */
        .nav{
            position:sticky;top:10px;z-index:50;padding:10px 0 0;
            background:transparent;border:0;
        }
        .nav-inner{
            position:relative;width:min(92%,1020px);height:72px;padding:0 14px;
            display:flex;align-items:center;justify-content:space-between;gap:14px;
            border:1px solid rgba(255,255,255,.85);border-radius:999px;
            background:rgba(255,255,255,.68);backdrop-filter:blur(20px);
            box-shadow:0 10px 35px rgba(80,45,105,.11);
        }
        .logo{display:flex;align-items:center;gap:10px;flex:none;font-weight:800;letter-spacing:-.5px}
        .logo-image{
            display:block;width:56px;height:56px;object-fit:cover;
            border:1px solid rgba(255,255,255,.55);border-radius:16px;
            box-shadow:0 6px 18px rgba(118,87,255,.22);
            transition:transform .2s ease,box-shadow .2s ease;
        }
        .logo:hover .logo-image{
            transform:translateY(-1px);
            box-shadow:0 9px 22px rgba(118,87,255,.3);
        }
        .links{display:flex;align-items:center;gap:4px;font-size:14px;color:#555b6e;font-weight:600}
        .links a{padding:9px 12px;border-radius:999px;transition:.2s}
        .links a:hover{color:var(--primary);background:rgba(255,143,183,.14)}
        .nav-cta{
            flex:none;padding:10px 17px;border-radius:999px;color:#fff;font-size:14px;font-weight:700;
            background:linear-gradient(135deg,#f05b9e,#d94389);
            box-shadow:0 6px 16px rgba(217,67,137,.24);transition:.2s;
        }
        .nav-cta:hover{transform:translateY(-2px)}
        .menu{
            display:none;width:42px;height:42px;border:1px solid rgba(217,67,137,.16);
            border-radius:50%;background:rgba(255,255,255,.8);color:var(--primary-dark);
            font-size:21px;cursor:pointer;
        }

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
            body.has-cat-cursor,body.has-cat-cursor a,body.has-cat-cursor button{cursor:none}
            body.has-cat-cursor .cat-cursor{opacity:1}
        }

        @media(max-width:900px){
            .hero-grid,.revision,.grid-2{grid-template-columns:1fr}
            .grid-3,.grid-4{grid-template-columns:1fr 1fr}
            .kanban{grid-template-columns:1fr}
            .hero{padding-top:65px}.hero-card{max-width:470px;margin:auto}
        }
        @media(max-width:650px){
            .nav-inner{height:64px;padding:0 10px}
            .logo-image{width:50px;height:50px;border-radius:14px}
            .links{
                display:none;position:absolute;top:calc(100% + 10px);left:0;right:0;
                flex-direction:column;align-items:stretch;gap:4px;padding:10px;
                border:1px solid rgba(255,255,255,.85);border-radius:22px;
                background:rgba(255,255,255,.82);backdrop-filter:blur(20px);
                box-shadow:0 12px 32px rgba(80,45,105,.14);
            }
            .links.open{display:flex}
            .links a{padding:11px 14px}
            .nav-cta{display:none}
            .menu{display:block;margin-left:auto}
            h1{letter-spacing:-2.5px}
            .hero{padding:53px 0 40px}
            section{padding:65px 0}
            .section-head{display:block}
            .section-text{margin-top:11px}
            .grid-3,.grid-4{grid-template-columns:1fr}
            .card{padding:23px}
            .footer-inner{flex-direction:column;align-items:flex-start}
        }
        @media(max-width:650px){
            :root[data-theme="dark"] .links{
                border-color:rgba(255,255,255,.12);
                background:rgba(34,30,44,.94);
                box-shadow:0 12px 32px rgba(0,0,0,.32);
            }
        }
    </style>
</head>
<body>

<div class="ambient-decor" aria-hidden="true">
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
    <span class="ambient-flower">˚🌷͙֒🎀</span>
</div>

<nav class="nav">
    <div class="container nav-inner">
        <a href="index.php" class="logo">
            <img class="logo-image" src="/images/chaimae.png" alt="Chaimae Zraouti">
        </a>
        <div class="links" id="navLinks">
            <a href="#manifeste">Manifeste</a>
            <a href="#cascade">Cascade vs Agile</a>
            <a href="#scrum">Scrum</a>
            <a href="#kanban">Kanban</a>
            <a href="#ateliers">Ateliers</a>
        </div>
        <a href="index.php#projects" class="nav-cta">← Portfolio</a>
        <button class="theme-toggle" id="themeToggle" type="button" aria-label="Switch to dark mode" title="Switch to dark mode">☾</button>
        <button class="menu" id="menuBtn" aria-label="Open menu" aria-controls="navLinks" aria-expanded="false">☰</button>
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

    <section id="portfolio-ateliers">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <div class="kicker">Ateliers du portfolio</div>
                    <h2>Gestion de projet, Git &amp; GitHub.</h2>
                </div>
                <p class="section-text">Retrouvez les supports des ateliers suivis pendant ma formation.</p>
            </div>

            <div class="grid grid-3">
                <?php foreach ($portfolioAteliers as $index => $atelier): ?>
                    <article class="project reveal">
                        <div class="project-icon"><?= htmlspecialchars($atelier['icon']) ?></div>
                        <div class="num">Atelier <?= $index + 1 ?></div>
                        <h3><?= htmlspecialchars($atelier['title']) ?></h3>
                        <p><?= htmlspecialchars($atelier['description']) ?></p>
                        <div class="tags links-row">
                            <?php if ($atelier['url']): ?>
                                <a href="<?= htmlspecialchars($atelier['url']) ?>" class="tag link" target="_blank" rel="noopener noreferrer">
                                    Télécharger le PDF →
                                </a>
                            <?php else: ?>
                                <span class="tag">PDF non fourni</span>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
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

    const menuBtn = document.getElementById('menuBtn');
    const navLinks = document.getElementById('navLinks');
    menuBtn.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('open');
        menuBtn.setAttribute('aria-expanded', String(isOpen));
    });
    navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
        navLinks.classList.remove('open');
        menuBtn.setAttribute('aria-expanded', 'false');
    }));

    const themeToggle = document.getElementById('themeToggle');
    const themeRoot = document.documentElement;
    const updateThemeToggle = () => {
        const isDark = themeRoot.dataset.theme === 'dark';
        themeToggle.textContent = isDark ? '☀' : '☾';
        themeToggle.setAttribute('aria-label', `Switch to ${isDark ? 'light' : 'dark'} mode`);
        themeToggle.setAttribute('aria-pressed', String(isDark));
        themeToggle.title = `Switch to ${isDark ? 'light' : 'dark'} mode`;
    };
    updateThemeToggle();
    themeToggle.addEventListener('click', () => {
        const nextTheme = themeRoot.dataset.theme === 'dark' ? 'light' : 'dark';
        themeRoot.dataset.theme = nextTheme;
        try {
            localStorage.setItem('portfolio-theme', nextTheme);
        } catch (error) {
            console.warn('Could not save the theme preference.', error);
        }
        updateThemeToggle();
    });

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
