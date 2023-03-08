<?php
namespace Estrutura_site\Mvc\Controllers;

use Estrutura_site\Mvc\Helper\HtmlRendererTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class padraoController implements RequestHandlerInterface{

    use HtmlRendererTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $queryParams = $request->getQueryParams();
        return new Response(200,[],$this->renderTemplate('padrao\index',['titulo'=>'Features','content'=>'=P']));
    }
}
