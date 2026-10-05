<?php
declare(strict_types=1);
const SITE_NAME = 'Houssam Chelha';
const SITE_ROLE = 'Junior Full Stack Developer';
const SITE_TITLE = 'Houssam Chelha — Junior Full Stack Developer | OFPPT';
const SITE_DESCRIPTION = 'Portfolio de Houssam Chelha, stagiaire OFPPT en Développement Digital, spécialité Web Full Stack.';
const CONTACT_STORAGE = __DIR__ . DIRECTORY_SEPARATOR . 'contact_messages.jsonl';
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (empty($_SESSION['csrf_token'])) $_SESSION['csrf_token'] = bin2hex(random_bytes(24));
