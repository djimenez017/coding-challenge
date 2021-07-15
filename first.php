<?php

require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

echo $twig->render('twigChallenge.html.twig', ['loginHeaderText' => 'Log In', 
    'isAdminLogin' => false, 'totalSiteLogins' => 0, 'submitButtonHTML => ‘<input type=”submit” value=”Log In”/>’']);

?>