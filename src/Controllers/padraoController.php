<?php
namespace Estrutura_site\Mvc\Controllers;

class padraoController implements Controller{
    public function processar():void
    {
        $titulo = 'Página Padrão';
        $content = '=DDDD';
        require_once __DIR__ . '/../../views/padrao/index.php';
    }
}
