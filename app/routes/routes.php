<?php   use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Bem-vindo ao Personal Assistant Iluminator (P.A.I)!");
    return $response;
});

$app->post('/chat', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    $message = $data['message'];

    // Lógica do chatbot aqui

    $responseBody = [
        'message' => $message,
        'response' => 'Resposta do chatbot',
    ];

    $response->getBody()->write(json_encode($responseBody));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/scrape', function (Request $request, Response $response) {
    // Lógica de web scraping aqui

    $scrapedData = [
        'data' => 'Dados extraídos',
    ];

    $response->getBody()->write(json_encode($scrapedData));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
