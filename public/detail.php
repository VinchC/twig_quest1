<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$detail = 'Détail';

echo $twig->render('detail.html.twig', ['detail' => $detail]);