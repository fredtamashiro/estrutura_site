<?php
namespace Estrutura_site\Mvc\Controllers;

use Estrutura_site\Mvc\Helper\FlashMessageTrait;
use Estrutura_site\Mvc\Helper\HtmlRendererTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class homeController implements RequestHandlerInterface{

    use FlashMessageTrait;
    use HtmlRendererTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $queryParams = $request->getQueryParams();
        $this->addSuccessMessage('Bem Vindo!');
        return new Response(200,[],$this->renderTemplate('home\index',['titulo'=>'Home','content'=>'Hum....']));
    }
}