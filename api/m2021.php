<?php
/**
 * m202.php — Module M202 : Approche Agile (OFPPT – Développement Digital)
 * Page autonome : modifiez les tableaux ci-dessous pour mettre à jour le contenu.
 */

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$page_title = "M202 – Approche Agile";
$page_intro = "L'approche agile est une méthode de gestion de projet itérative, collaborative et flexible, enseignée dans le module M202 / M110 (Approche Agile) des filières de développement digital à l'OFPPT.";

/* --------- Liens (sources & ateliers) --------- */
$links = [
    'ofppt'      => 'https://ofppt.min.ma/2025/07/approche-agile-m202-developpement_10.html',
    'slideshare' => 'https://fr.slideshare.net/slideshow/approche-agile-ofppt-1-developpement-digital-web-full-stuck/273689160',
    'slack'      => 'https://slack.com/intl/fr-gn/blog/collaboration/methode-agile',
    'qrp'        => 'https://www.qrpinternational.fr/blog/methode-agile/les-4-piliers-fondamentaux-dagile/',
    'bubbleplan' => 'https://bubbleplan.net/blog/agile-scrum-gestion-projet/',
    'scrumleague'=> 'https://scrum-league.org/tribune/la-culture-agile/les-12-principes-generaux-du-manifeste-agile/',
    'scribd'     => 'https://fr.scribd.com/document/733939859/EFM-2-OFPPT-TSDD',
    'studocu'    => 'https://www.studocu.com/row/document/loffice-de-la-formation-professionnelle-et-de-la-promotion-du-travail/m202-approche-agile-ofppt/resume-approche-agile/116650872',
];

/* --------- Contenu pédagogique --------- */
$valeurs = [
    ['Individus et interactions', 'plutôt que processus et outils.'],
    ['Logiciel opérationnel', 'plutôt qu\'une documentation exhaustive.'],
    ['Collaboration avec le client', 'plutôt que négociation contractuelle.'],
    ['Réponse au changement', 'plutôt que suivi d\'un plan figé.'],
];

$roles = [
    ['Product Owner (PO)', 'Définit le besoin, gère et priorise le carnet de produit (Product Backlog).'],
    ['Scrum Master', 'Veille au respect de la méthodologie Agile et lève les blocages de l\'équipe.'],
    ['Équipe de développement', 'Autonome, pluridisciplinaire et responsable de la réalisation des sprints.'],
];

$evenements = [
    ['Sprint Planning', 'Planification du sprint : on choisit ce qui sera réalisé.'],
    ['Daily Scrum', 'Mêlée quotidienne de 15 minutes pour synchroniser l\'équipe.'],
    ['Sprint Review', 'Revue et démonstration du produit à la fin du sprint.'],
    ['Sprint Retrospective', 'Bilan du sprint pour s\'améliorer.'],
];

$artefacts = [
    ['Product Backlog', 'Liste priorisée des fonctionnalités du produit.'],
    ['Sprint Backlog', 'Tâches du sprint en cours.'],
    ['Increment', 'Le produit livrable et fonctionnel à la fin du sprint.'],
];

$kanban = [
    'À faire'  => ['Écrire les user stories', 'Maquetter la page d\'accueil'],
    'En cours' => ['Développer l\'authentification'],
    'Terminé'  => ['Créer le dépôt GitHub', 'Configurer le tableau Trello'],
];

$outils = ['Git / GitHub', 'Jira', 'Trello', 'Tableaux physiques (post-it)'];

/* --------- Ateliers : modifiez ici les titres et les liens --------- */
$ateliers = [
    [
        'num'   => 1,
        'titre' => 'Comprendre le Manifeste Agile',
        'desc'  => 'Les 4 valeurs fondamentales (2001) : reformulez chaque valeur avec un exemple de projet web.',
        'liens' => [
            ['Les 4 piliers fondamentaux d\'Agile', $links['qrp']],
            ['Les 12 principes du Manifeste', $links['scrumleague']],
        ],
    ],
    [
        'num'   => 2,
        'titre' => 'Méthodes traditionnelles vs Agile',
        'desc'  => 'Comparez Cascade / Cycle en V et sprints : planification, feedback client, gestion du changement.',
        'liens' => [
            ['Agile & Scrum : gestion de projet', $links['bubbleplan']],
            ['Support de cours OFPPT (slides)', $links['slideshare']],
        ],
    ],
    [
        'num'   => 3,
        'titre' => 'Le cadre Scrum : rôles, événements, artefacts',
        'desc'  => 'Simulez un sprint : répartissez PO / Scrum Master / équipe, puis déroulez planning, daily, review et rétrospective.',
        'liens' => [
            ['Module M202 – OFPPT', $links['ofppt']],
            ['Support de cours OFPPT (slides)', $links['slideshare']],
        ],
    ],
    [
        'num'   => 4,
        'titre' => 'Kanban et outils collaboratifs',
        'desc'  => 'Montez un tableau À faire / En cours / Terminé et reliez-le à un dépôt Git.',
        'liens' => [
            ['La méthode Agile (Slack)', $links['slack']],
            ['EFM 2 OFPPT TSDD (Scribd)', $links['scribd']],
        ],
    ],
    [
        'num'   => 5,
        'titre' => 'Révision EFM / examen régional',
        'desc'  => 'Résumé du module, exercices (Gantt, PERT, commandes Git) et QCM type examen.',
        'liens' => [
            ['Résumé Approche Agile (Studocu)', $links['studocu']],
            ['EFM 2 OFPPT TSDD (Scribd)', $links['scribd']],
        ],
    ],
];

$sources = [
    ['Module M202 – OFPPT', $links['ofppt']],
    ['Approche Agile OFPPT (SlideShare)', $links['slideshare']],
    ['La méthode Agile – Slack', $links['slack']],
    ['Les 4 piliers fondamentaux d\'Agile – QRP International', $links['qrp']],
    ['Agile & Scrum – Bubbleplan', $links['bubbleplan']],
    ['Les 12 principes du Manifeste – Scrum League', $links['scrumleague']],
    ['EFM 2 OFPPT TSDD – Scribd', $links['scribd']],
    ['Résumé Approche Agile – Studocu', $links['studocu']],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page_title) ?></title>
    <style>
        :root {
            --bg: #f6f7fb;
            --surface: #ffffff;
            --text: #1d2433;
            --muted: #5b6577;
            --border: #e2e6ef;
            --primary: #2f6fed;
            --primary-soft: #e8efff;
            --accent: #12a37f;
            --warn: #e08a1e;
            --radius: 14px;
        }
        @media (prefers-color-scheme: dark) {
            :root {
                --bg: #0f1420;
                --surface: #171e2e;
                --text: #e8ecf5;
                --muted: #9aa5bb;
                --border: #28324a;
                --primary: #6b98ff;
                --primary-soft: #1f2b4a;
                --accent: #3ccaa4;
                --warn: #f0a94a;
            }
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        a { color: var(--primary); }
        .wrap { max-width: 1040px; margin: 0 auto; padding: 0 20px; }

        /* Navigation */
        nav {
            position: sticky; top: 0; z-index: 10;
            background: color-mix(in srgb, var(--surface) 92%, transparent);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--border);
        }
        nav .wrap { display: flex; gap: 6px; overflow-x: auto; padding-top: 10px; padding-bottom: 10px; }
        nav a {
            white-space: nowrap; text-decoration: none; color: var(--muted);
            padding: 6px 12px; border-radius: 999px; font-size: 14px;
        }
        nav a:hover { background: var(--primary-soft); color: var(--primary); }

        /* Hero */
        header.hero { padding: 56px 0 36px; }
        .badge {
            display: inline-block; font-size: 13px; font-weight: 600;
            background: var(--primary-soft); color: var(--primary);
            padding: 4px 12px; border-radius: 999px; margin-bottom: 14px;
        }
        h1 { font-size: clamp(30px, 5vw, 46px); line-height: 1.15; margin: 0 0 14px; }
        .lead { font-size: 18px; color: var(--muted); max-width: 720px; margin: 0; }

        /* Sections */
        section { padding: 34px 0; }
        h2 { font-size: 26px; margin: 0 0 6px; }
        .sub { color: var(--muted); margin: 0 0 22px; }
        h3 { margin: 0 0 6px; font-size: 18px; }

        .grid { display: grid; gap: 16px; }
        .g2 { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .g3 { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); }
        .g4 { grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); }

        .card {
            background: var(--surface); border: 1px solid var(--border);
            border-radius: var(--radius); padding: 20px;
        }
        .card p { margin: 0; color: var(--muted); }

        .valeur .num {
            width: 34px; height: 34px; border-radius: 50%;
            display: grid; place-items: center; font-weight: 700;
            background: var(--primary-soft); color: var(--primary); margin-bottom: 12px;
        }
        .valeur strong { display: block; font-size: 17px; }

        /* Comparaison */
        .compare .trad { border-top: 4px solid var(--warn); }
        .compare .agile { border-top: 4px solid var(--accent); }
        .compare ul { margin: 10px 0 0; padding-left: 18px; color: var(--muted); }

        /* Scrum */
        .block-title {
            font-size: 14px; letter-spacing: .06em; text-transform: uppercase;
            color: var(--primary); font-weight: 700; margin: 26px 0 12px;
        }
        .timeline { display: grid; gap: 12px; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); counter-reset: step; }
        .timeline .card { position: relative; padding-top: 26px; }
        .timeline .card::before {
            counter-increment: step; content: counter(step);
            position: absolute; top: -12px; left: 18px;
            width: 26px; height: 26px; border-radius: 50%;
            background: var(--primary); color: #fff; font-size: 13px; font-weight: 700;
            display: grid; place-items: center;
        }

        /* Kanban */
        .kanban { display: grid; gap: 14px; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); }
        .col { background: var(--primary-soft); border-radius: var(--radius); padding: 14px; }
        .col h3 { font-size: 15px; display: flex; justify-content: space-between; }
        .col h3 span { color: var(--muted); font-weight: 500; }
        .ticket {
            background: var(--surface); border: 1px solid var(--border);
            border-radius: 10px; padding: 10px 12px; margin-top: 10px; font-size: 14px;
        }
        .chips { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 16px; }
        .chip {
            background: var(--surface); border: 1px solid var(--border);
            padding: 6px 14px; border-radius: 999px; font-size: 14px;
        }

        /* Ateliers */
        .atelier { display: flex; flex-direction: column; gap: 10px; }
        .atelier .tag { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: .06em; }
        .atelier ul { list-style: none; margin: auto 0 0; padding: 0; display: grid; gap: 6px; }
        .atelier li a {
            display: block; text-decoration: none; font-size: 14px;
            padding: 8px 12px; border-radius: 8px; border: 1px solid var(--border);
        }
        .atelier li a:hover { background: var(--primary-soft); }
        .atelier li a::after { content: " ↗"; color: var(--muted); }

        /* Sources */
        .sources { columns: 2 320px; column-gap: 28px; padding-left: 18px; margin: 0; }
        .sources li { margin-bottom: 8px; break-inside: avoid; }

        .revision { background: var(--primary-soft); border-radius: var(--radius); padding: 22px; }
        .revision ul { margin: 8px 0 0; padding-left: 18px; }

        footer { text-align: center; color: var(--muted); font-size: 14px; padding: 36px 0 48px; }
    </style>
</head>
<body>

<nav>
    <div class="wrap">
        <a href="#valeurs">Manifeste</a>
        <a href="#comparaison">Traditionnel vs Agile</a>
        <a href="#scrum">Scrum</a>
        <a href="#kanban">Kanban &amp; outils</a>
        <a href="#ateliers">Ateliers</a>
        <a href="#revision">Révision</a>
        <a href="#sources">Sources</a>
    </div>
</nav>

<header class="hero">
    <div class="wrap">
        <span class="badge">OFPPT · Développement Digital</span>
        <h1><?= e($page_title) ?></h1>
        <p class="lead"><?= e($page_intro) ?></p>
    </div>
</header>

<main class="wrap">

    <!-- Manifeste -->
    <section id="valeurs">
        <h2>Les 4 valeurs du Manifeste Agile (2001)</h2>
        <p class="sub">Le socle de toute démarche agile.</p>
        <div class="grid g4">
            <?php foreach ($valeurs as $i => [$fort, $reste]): ?>
                <div class="card valeur">
                    <div class="num"><?= $i + 1 ?></div>
                    <strong><?= e($fort) ?></strong>
                    <p><?= e($reste) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Comparaison -->
    <section id="comparaison" class="compare">
        <h2>Méthodes traditionnelles vs Agile</h2>
        <p class="sub">Deux philosophies de gestion de projet.</p>
        <div class="grid g2">
            <div class="card trad">
                <h3>Cascade / Cycle en V</h3>
                <p>Projet linéaire, rigide et planifié de bout en bout avant le développement.</p>
                <ul>
                    <li>Le client voit le résultat final très tardivement.</li>
                    <li>Le changement est difficile et coûteux.</li>
                </ul>
            </div>
            <div class="card agile">
                <h3>Approche Agile</h3>
                <p>Projet découpé en cycles courts appelés <strong>sprints</strong>.</p>
                <ul>
                    <li>Livraisons régulières de versions fonctionnelles.</li>
                    <li>Adaptation rapide aux retours du client.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Scrum -->
    <section id="scrum">
        <h2>Le cadre Scrum</h2>
        <p class="sub">Le framework agile le plus utilisé.</p>

        <div class="block-title">Les rôles principaux</div>
        <div class="grid g3">
            <?php foreach ($roles as [$nom, $desc]): ?>
                <div class="card"><h3><?= e($nom) ?></h3><p><?= e($desc) ?></p></div>
            <?php endforeach; ?>
        </div>

        <div class="block-title">Les événements (rituels)</div>
        <div class="timeline">
            <?php foreach ($evenements as [$nom, $desc]): ?>
                <div class="card"><h3><?= e($nom) ?></h3><p><?= e($desc) ?></p></div>
            <?php endforeach; ?>
        </div>

        <div class="block-title">Les artefacts</div>
        <div class="grid g3">
            <?php foreach ($artefacts as [$nom, $desc]): ?>
                <div class="card"><h3><?= e($nom) ?></h3><p><?= e($desc) ?></p></div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Kanban & outils -->
    <section id="kanban">
        <h2>Kanban &amp; outils associés</h2>
        <p class="sub">Gestion visuelle des flux de travail via un tableau (À faire, En cours, Terminé).</p>
        <div class="kanban">
            <?php foreach ($kanban as $colonne => $tickets): ?>
                <div class="col">
                    <h3><?= e($colonne) ?> <span><?= count($tickets) ?></span></h3>
                    <?php foreach ($tickets as $t): ?>
                        <div class="ticket"><?= e($t) ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="chips">
            <?php foreach ($outils as $o): ?>
                <span class="chip"><?= e($o) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Ateliers -->
    <section id="ateliers">
        <h2>Ateliers du module</h2>
        <p class="sub">Chaque atelier est accompagné de ses liens de ressources.</p>
        <div class="grid g3">
            <?php foreach ($ateliers as $a): ?>
                <article class="card atelier">
                    <span class="tag">Atelier <?= (int) $a['num'] ?></span>
                    <h3><?= e($a['titre']) ?></h3>
                    <p><?= e($a['desc']) ?></p>
                    <ul>
                        <?php foreach ($a['liens'] as [$label, $url]): ?>
                            <li><a href="<?= e($url) ?>" target="_blank" rel="noopener noreferrer"><?= e($label) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Révision -->
    <section id="revision">
        <div class="revision">
            <h2>Préparer l'EFM / l'examen régional (M202)</h2>
            <ul>
                <li>Exercices pratiques : Gantt, PERT, commandes Git</li>
                <li>Questions de QCM type examen</li>
                <li>Matrice RACI et chemin critique</li>
            </ul>
        </div>
    </section>

    <!-- Sources -->
    <section id="sources">
        <h2>Sources</h2>
        <ol class="sources">
            <?php foreach ($sources as [$label, $url]): ?>
                <li><a href="<?= e($url) ?>" target="_blank" rel="noopener noreferrer"><?= e($label) ?></a></li>
            <?php endforeach; ?>
        </ol>
    </section>

</main>

<footer>
    <div class="wrap">M202 – Approche Agile · OFPPT Développement Digital · <?= date('Y') ?></div>
</footer>

</body>
</html>
