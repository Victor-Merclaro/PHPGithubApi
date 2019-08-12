<?php
require __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$content = 'This is a playground for working with the GitHub API, allowing for searching and displaying repos.';

echo $twig->render('home.html', [
    'title' => 'Home',
    'content' => $content
]);