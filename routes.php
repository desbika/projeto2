<?php
// Definindo as rotas
$routes = [
    '' => 'index.php',
    'sobre' => 'sobre.php',
    'servicos' => 'servicos.php',
    'agendamento' => 'agendamento.php',
    'feedback' => 'feedback.php'
];

// Obtendo a URL atual
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Removendo o caminho base do projeto
$path = str_replace('/Projeto2', '', $path);

// Removendo a barra inicial se existir
$path = ltrim($path, '/');

// Se o caminho estiver vazio, define como '/'
if (empty($path)) {
    $path = '/';
}

// Verificando se a rota existe
if (isset($routes[$path])) {
    include $routes[$path];
} else {
    // Página 404 - Não encontrada
    header("HTTP/1.0 404 Not Found");
    include '404.php';
}
?>
