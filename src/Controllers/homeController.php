<?php
namespace Estrutura_site\Mvc\Controllers;

class homeController implements Controller{
    public function processar():void
    {
        $titulo = 'Home';
        $content = phpinfo();
        require_once __DIR__ . '/../../views/home/index.php';
    }
}